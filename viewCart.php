<?php
// initializ shopping cart class
require 'Cart.php';
session_start();
$cart = new Cart();

// Creamos la variable de sesion
if (!isset($SESSION['cesta']))
    $_SESSION['cesta']=serialize($cart);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cistella de la compra</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="css/style.css"/>
    <style>
    .container{padding: 50px;}
    input[type="number"]{width: 20%;}
    </style>
    <script>
    function updateCartItem(obj,id){

        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
	    //if(data == 'ok'){
                location.reload();
       //}else{
           
          // alert('No s\' ha pogut actualitzar');
        //}
        });
    }
    </script>
</head>
</head>
<body>
   <!-- HEADER -->
		<header>
			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
								<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.jpg" alt="" width="200">
								</a>
							    </div>
							<h3 style="color:white; line-height: 200px;"> &nbsp; &nbsp; &nbsp;Recollida solidària d'aliments Maite Bueso</h3>

						
						
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
<div class="container">
    <h1>Cistella de la compra</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Producte</th>
            <th>Preu</th>
            <th>Quantitat</th>
            <th>Subtotal</th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo $item["price"].' €'; ?></td>
            <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td><?php echo $item["subtotal"].' €'; ?></td>
            <td>
                <a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Estàs segur d\'esborrar-lo?')"><i class="glyphicon glyphicon-trash"></i></a>
            </td>   
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>La teua cistella està buida.....</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td><a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continuar comprant</a></td>
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo $cart->total().' €'; ?></strong></td>
            <td><a href="checkout.php" class="btn btn-success btn-block">Comprar <i class="glyphicon glyphicon-menu-right"></i></a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
</div>
</body>
</html>
