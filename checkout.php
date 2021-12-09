<?php
// include database configuration file
require 'admin/config.php';
require 'functions.php';

// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;

$conexion=conexion($bd_config);

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Comprar</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{width: 100%;padding: 50px;}
    .table{width: 65%;float: left;}
    .shipAddr{width: 30%;float: left;margin-left: 30px;}
    .footBtn{width: 95%;float: left;}
    .orderBtn {float: right;}
    </style>
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
   
    <h1>Previsualització de comanda</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Producte</th>
            <th>Preu</th>
            <th>Quantitat</th>
            <th>Subtotal</th>
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
            <td><?php echo utf8_encode($item["name"]); ?></td>
            <td><?php echo $item["price"].' €'; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo $item["subtotal"].' €'; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No hi ha items en la teua cistella......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo $cart->total().' €'; ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
  
    <div class="footBtn">
        <a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continua comprant</a>
        <a href="cartAction.php?action=placeOrder" class="btn btn-success orderBtn">Confirma compra <i class="glyphicon glyphicon-menu-right"></i></a>
    </div>
</div>
</body>
</html>
