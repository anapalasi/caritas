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
            'qty' => 1
        );
        // Insertamos el producto en la cesta
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'viewCart.php':'index.php';
        header("Location: ".$redirectLoc);
        }
        
       
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'qty' => $_REQUEST['qty']
        );
        
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }
   /* }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: viewCart.php");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])){
        // insert order details into database
        $sentencia="INSERT INTO Pedido (id_pedido, precio_total, creado, modificado) VALUES ('\".$_SESSION['sessCustomerID'].\"', '\".$cart->total().\"', '\".date("Y-m-d H:i:s").\"', '\".date("Y-m-d H:i:s").\"')\");
        $insertOrder= executaSentencia($conexion,$sentencia);

        if($insertOrder){
           // $orderID = $db->insert_id;
            $sql = '';
            // get cart items
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                $sql .= "INSERT INTO order_items (order_id, product_id, quantity) VALUES ('".$orderID."', '".$item['id']."', '".$item['qty']."');";
            }
            // insert order items into database
            $insertOrderItems = executaTotesSentencies($sql);
            
            if($insertOrderItems){
                $cart->destroy();
                header("Location: orderSuccess.php?id=$orderID");
            }else{
                header("Location: checkout.php");
            }
        }else{
            header("Location: checkout.php");
        }
    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}
*/