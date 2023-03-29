<?php
    require 'admin/config.php';
    require 'functions.php';

    // initialize shopping cart class
    include 'Cart.php';
    $cart = new Cart;

    // Conectamos a la base de datos
    $conexion=conexion($bd_config);

    // Añadimos el producto a la cesta
   if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
      if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){
        $productID = $_REQUEST['id'];
        $sentencia = "select * from Producto where id_producto=\"". $productID."\"";
        $row = executaSentencia($conexion,$sentencia);
        $itemData = array(
            'id' => $row['id_producto'],
            'name' => $row['descripcion'],
            'price' => $row['precio'],
            'img' => $row['imagen'],
            'qty' => 1
        );
        // Insertamos el producto en la cesta
        $insertItem = $cart->insert($itemData);
	$redirectLoc = $insertItem?'viewCart.php':'index.php';
        header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: viewCart.php");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0){
        // insert order details into database
        $data=date("Y-m-d H:i:s");
        $sentencia= "insert into Pedido (precio_total, creado) VALUES ('".$cart->total()."', '".$data."')";
        $resultado=executaSentencia($conexion,$sentencia);
        
        $id_pedido= $conexion->lastInsertId();
                     
        
        // Sumar el importe total
        $sentencia = "select sum(precio_total) as recaudado from Pedido";
        $resultado=executaSentencia($conexion,$sentencia);
        
        $_SESSION['total_recaudado']=$resultado['recaudado'];
       
        // Insertaremos los elementos de la cesta de la compra
        $cesta = $cart->contents();

        foreach ($cesta as $producto){
            $sentencia = "insert into LineaPedido (id_pedido, id_producto, precio,cantidad) values ('";
            $sentencia = $sentencia . $id_pedido. "','". $producto['id']. "','". $producto['price']."','";
            $sentencia = $sentencia. $producto['qty']. "')";
            
            executaSentencia($conexion, $sentencia);
        }
        $cart->destroy();
        header("Location: orderSuccess.php?id=$id_pedido");
    


    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}
?>        
       
  
