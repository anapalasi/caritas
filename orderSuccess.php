<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Comanda correcta</title>
    <meta charset="utf-8">
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
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
        <style>
        .container{width: 100%;padding: 50px;}
        p{color: #e80e91;font-size: 18px;}
        </style>
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
						<table border="0" width="100%">
						<!-- LOGO -->
							<tr>
								<td>
									<div class="header-logo">
										<a href="#" class="logo">
										<img src="./img/logo.jpg" alt="" width="200">
									</a>
								    </div>
								</td>
								<td>
									<h4 style="color:white; line-height:100px;"> &nbsp; &nbsp; &nbsp;Recollida solidària d'aliments de Caritas</h3>
								</td>
							</tr>
						</table>

						
						
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
<div class="container">
    <h1>Estat de la teua comanda</h1>
    <p>La teua comanda s'ha processat correctament. L'identificador de la teua comanda és  #<?php echo $_GET['id']; ?></p>
</div>
<table border="0">
    <tr>
        <td width="100"> </td>
        <td>
            <img src="img/gracias.jpg">
        </td>
        <td width="100"></td>
        <td>
            <a href="index.php" class="btn btn-success btn-block">Fes una altra comanda <i class="glyphicon glyphicon-menu-right"></i></a>
</td>
        </tr>
</table>
</body>
</html>
