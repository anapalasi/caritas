<?php
// include database configuration file
require 'admin/config.php';
require 'functions.php';


$conexion=conexion($bd_config);

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
   
    <h1>Llistat de productes donats</h1>
    <table class="table">
    <thead>
        <tr>
            <th> Imatge </th>
            <th>Producte</th>
            <th>Quantitat</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
            $sentencia="SELECT id_producto, sum(cantidad) as cantidad FROM LineaPedido group by id_producto ";
            $resultat = executaSentenciaTotsResultats($conexion, $sentencia);

            $cantidad = 0;

            foreach ($resultat as $producte)
            {
                $sentencia="select imagen, descripcion from Producto where id_producto=\"". $producte['id_producto']. "\"";
                $resultat2=executaSentencia($conexion, $sentencia);
                echo "<tr>";
                echo "<td><img src=\"img/" . $resultat2['imagen']. "\" width=\"100\"></td>";
                echo "<td>" . utf8_encode($resultat2['descripcion']). "</td>";
                echo "<td>" . $producte['cantidad']. "</td>";
                echo "</tr>";
                $cantidad++;
            }

            if ($cantidad == 0)
               echo " <tr><td colspan=\"4\"><p>No hi ha items en la teua cistella......</p></td>";
        ?>
    </tbody>
    </table>
    <?php
        $sentencia = "select sum(precio_total) as donat from Pedido";
        $resultat=executaSentencia($conexion, $sentencia);
    ?>
    <h3>&nbsp; &nbsp; &nbsp;Total donat: <?php echo $resultat['donat']; ?> €</h3>
    <div class="footBtn">
        <a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continua comprant</a>
    </div>
</div>
</body>
</html>
