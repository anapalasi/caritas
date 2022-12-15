<?php
	
	session_start();

	
	include 'Cart.php';
	
	
	echo " <!DOCTYPE html>";
	echo "<html lang=\"ca\">";
	echo "<head>";
		echo "<meta charset=\"utf-8\">";
		echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">";
		echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
		echo "<title> Recollida solidària d'aliments Caritas</title>";
		echo "<link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,500,700\" rel=\"stylesheet\">";
		echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"css/bootstrap.min.css\"/>";
		echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"css/slick.css\"/>";
		echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"css/slick-theme.css\"/>";
		echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"css/nouislider.min.css\"/>";
		echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"css/font-awesome.min.css\">";
		echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"css/style.css\"/>";

	echo "</head>";
	echo "<body>";
		echo "<header>";
		echo "<div id=\"top-header\">";
		echo "<div class=\"container\">";
		/*				<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
						<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
					</ul>
				echo "</div>"; --> */
				echo "</div>";
				//<!-- /TOP HEADER -->
	
			//	<!-- MAIN HEADER -->
			echo "<div id=\"header\">";
					//<!-- container -->
					echo "<div class=\"container\">";
						//<!-- row -->
						echo "<div class=\"row\">";
							//<!-- LOGO -->
							echo "<div class=\"col-md-3\">";
								echo "<div class=\"header-logo\">";
									echo "<a href=\"#\" class=\"logo\">";
										echo "<img src=\"./img/logo.jpg\" alt=\"\" width=\"200\">";
									echo "</a>";
								echo "</div>";
							echo "</div>";
							// <!-- /LOGO -->
	
							//<!-- SEARCH BAR -->
							echo "<div class=\"col-md-6\">";
								echo "<h3 style=\"color:white; line-height: 100px;align:center\">Recollida solidària d'aliments</h3>";
							/*	<div class="header-search">
									<form>
										<select class="input-select">
											<option value="0">All Categories</option>
											<option value="1">Category 01</option>
											<option value="1">Category 02</option>
										</select>
										<input class="input" placeholder="Search here">
										<button class="search-btn">Search</button>
									</form>
								</div> */
							echo "</div>"; 

						//						<!-- /SEARCH BAR -->

						//<!-- ACCOUNT -->
						echo "<div class=\"col-md-3 clearfix\">";
							echo "<div class=\"header-ctn\">";
							/*	<!-- Wishlist -->
							<!--	<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div> -->
								<!-- </Wishlist> --> 

								<!-- Cart -->*/
								echo "<div class=\"dropdown\">";
									echo "<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"true\">";
									echo "<i class=\"fa fa-shopping-cart\"></i>";
										echo "<span> Tu compra</span>";
										if (isset($_SESSION['cesta'])){
											$numero_items=$_SESSION['cart_contents']['total_items'];

											if ($numero_items !=0){
												echo "<div class=\"qty\">";
												echo $numero_items;
												//echo var_dump($_SESSION['cart_contents']);
												echo "</div>";
											}
											
										}
									echo "</a>";
									echo "<div class=\"cart-dropdown\">";
										echo "<div class=\"cart-list\">";
											foreach ($_SESSION['cart_contents'] as $clave => $valor){
												if ((strcmp($clave,"total_items")!= 0 ) and (strcmp($clave,"cart_total")!=0))	{
													echo "<div class=\"product-widget\">";
													echo "<div class=\"product-img\">";
														echo "<img src=\"./img/";
														echo $valor["img"]. "\" alt=\"\">";
													echo "</div>";
													echo "<div class=\"product-body\">";
														echo "<h4 class=\"product-name\"><a href=\"#\">";
														echo utf8_encode($valor["name"]) . "</a></h4>";
														echo "<h4 class=\"product-price\"><span class=\"qty\">";
														echo $valor['qty'] ."x</span>";
														echo $valor['price'] ."€</h4>";
													echo "</div>";
													//echo "<button class=\"delete\"><i class=\"fa fa-close\"></i></button>";
													echo "</div>";

												}
											}
										
												
											

											
										echo "</div>";
										echo "<div class=\"cart-summary\">";
											echo "<small> ";
											echo $_SESSION['cart_contents']['total_items'];
											echo " producte(s) seleccionats</small>";
											echo "<h5>SUBTOTAL: ";
											echo $_SESSION['cart_contents']['cart_total'];	
											echo "€ </h5>";
										echo "</div>";
										echo "<div class=\"cart-btns\">";
											echo "<a href=\"viewCart.php\"> Ver cesta</a>";
											echo "<a href=\"checkout.php\">Comprar  <i class=\"fa fa-arrow-circle-right\"></i></a>";
										echo "</div>";
									echo "</div>";
								echo "</div>";
								// <!-- /Cart -->

								//<!-- Menu Toogle -->
								echo "<div class=\"menu-toggle\">";
									echo "<a href=\"#\">";
										echo "<i class=\"fa fa-bars\"></i>";
										echo "<span>Menu</span>";
									echo "</a>";
								echo "</div>";
								//<!-- /Menu Toogle --> */
							echo "</div>";
						echo "</div>";
					//	<!-- /ACCOUNT -->
					echo "</div>";
				//	<!-- row -->
				echo "</div>";
				//<!-- container -->
			echo "</div>";
			//<!-- /MAIN HEADER -->
		echo "</header>";
		//<!-- /HEADER -->

	//	<!-- NAVIGATION -->
	echo "<nav id=\"navigation\">";
			//<!-- container -->
			echo "<div class=\"container\">";
				//<!-- responsive-nav -->
				echo "<div id=\"responsive-nav\">";
					//<!-- NAV -->
					echo "<ul class=\"main-nav nav navbar-nav\">";
						echo "<li class=\"active\"><a href=\"#\">Home</a></li>";
						echo "<li><a href=\"#brou\">Brou, oli i farina</a></li>";
						echo "<li><a href=\"#desdejuni\">Desdejuni</a></li>";
						echo "<li><a href=\"#fruita\">Fruita i sucre</a></li>";
						echo "<li><a href=\"#higiene\">Higiene</a></li>";
						echo "<li><a href=\"#llegums\">Llegums i arrós</a></li>";
						echo "<li><a href=\"#pasta\">Pasta</a></li>";
						echo "<li><a href=\"#verdures\">Verdures</a></li>";
					echo "</ul>";
					// <!-- /NAV -->
				echo "</div>";
				//<!-- /responsive-nav -->
			echo "</div>";
			//<!-- /container -->
		echo "</nav>";
		//<!-- /NAVIGATION -->

		//<!-- HOT DEAL SECTION -->
		echo "<div id=\"hot-deal\" class=\"section\">";
			//<!-- container -->
			echo "<div class=\"container\">";
				//<!-- row -->
				echo "<div class=\"row\">";
					echo "<div class=\"col-md-12\">";
						echo "<div class=\"hot-deal\">";
						/*	<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul> */
							echo "<h2 class=\"text-uppercase\">Fons recaudats</h2>";
							echo "<p><strong>";
							if (!isset( $_SESSION['total_recaudado']))
								echo "0€";
							else
								echo  $_SESSION['total_recaudado']. "€";
							echo "</strong></p>";
							echo "<a class=\"primary-btn cta-btn\" href=\"llistatproductes.php\">Llistat productes donats</a>";
						echo "</div>";
					echo "</div>";
				echo "</div>";
				//<!-- /row -->
			echo "</div>";
			//<!-- /container -->
		echo "</div>";
	//	<!-- /HOT DEAL SECTION -->
		
		

	//	<!-- SECTION -->
		echo "<div class=\"section\">";
			//<!-- container -->
			echo "<div class=\"container\">";
				echo "<div class=\"row\">";

					//<!-- section title -->
					echo "<div class=\"col-md-12\">";
						echo "<div class=\"section-title\">";
							echo "<a name=\"brou\"><h3 class=\"title\">Brou, oli i farina</h3></a>";
							/* <div class=\"section-nav\">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab1">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab1">Accessories</a></li>
								</ul>
							</div> */
						echo "</div>";
					echo "</div>";
					//<!-- /section title -->

					//<!-- Products tab & slick -->
					echo "<div class=\"col-md-12\">";
						echo "<div class=\"row\">";
							echo "<div class=\"products-tabs\">";
								//<!-- tab -->
								echo "<div id=\"tab1\" class=\"tab-pane active\">";
									echo "<div class=\"products-slick\" data-nav=\"#slick-nav-1\">";
									//	// <!-- product -->
										echo "<div class=\"product\">";
											echo "<div class=\"product-img\">";
												echo "<img src=\"./img/caldo_pollastre.jpg\" alt=\"Brou\" height=\"300\">";
												
											echo "</div>";
											echo "<div class=\"product-body\">";
												echo "<p class=\"product-category\">Brou i farina</p>";
												echo "<h3 class=\"product-name\">Brou de pollastre</h3>";
												echo "<h4 class=\"product-price\">1,50€</h4>";
												
											echo "</div>";
											echo "<div class=\"add-to-cart\">";
												echo "<button class=\"add-to-cart-btn\" name=\"btn1\"><i class=\"fa fa-shopping-cart\"></i><a href=\"cartAction.php?action=addToCart&id=1\">  Afig a la cistella</a></button>";
											echo "</div>";
										echo "</div>";
										//<!-- /product -->
										
										//// <!-- product -->
										echo "<div class=\"product\">";
											echo "<div class=\"product-img\">";
												echo "<img src=\"./img/caldo_peix.jpg\" alt=\"Brou de peix\" height=\"300\">";
												/* <div class=\"product-label"> 
													<span class="new">NEW</span>
												</div> */
											echo "</div>";
											echo "<div class=\"product-body\">";	
												echo "<p class=\"product-category\">Brou i farina</p>";
												echo "<h3 class=\"product-name\">Brou de peix</h3>";
												echo "<h4 class=\"product-price\">1€ </h4>";
											
											echo "</div>";
											echo "<div class=\"add-to-cart\">";
												echo "<button class=\"add-to-cart-btn\" name=\"btn2\"><i class=\"fa fa-shopping-cart\"></i><a href=\"cartAction.php?action=addToCart&id=2\"> Afig a la cistella</a></button>";
											echo "</div>";
										echo "</div>";
										//<!-- /product -->
										echo "<div class=\"product\">";
											echo "<div class=\"product-img\">";
												echo "<img src=\"./img/botella_oli.jpg\" alt=\"Oli\" height=\"300\">";
												
											echo "</div>";
											echo "<div class=\"product-body\">";
												echo "<p class=\"product-category\">Brou i farina</p>";
												echo "<h3 class=\"product-name\">Oli de girasol</h3>";
												echo "<h4 class=\"product-price\">1€</h4>";
												
											echo "</div>";
											echo "<div class=\"add-to-cart\">";
												echo "<button class=\"add-to-cart-btn\" name=\"btn3\"> <i class=\"fa fa-shopping-cart\"></i> <a href=\"cartAction.php?action=addToCart&id=3\"> Afig a la cistella</a></button>";
											echo "</div>";
										echo "</div>";
										//<!-- /product -->
										//// <!-- product -->
										echo "<div class=\"product\">";
											echo "<div class=\"product-img\">";
												echo "<img src=\"./img/farina.jpg\" alt=\"Farina\" height=\"300\">";
											echo "</div>";
											echo "<div class=\"product-body\">";	
												echo "<p class=\"product-category\">Brou i farina</p>";
												echo "<h3 class=\"product-name\">Farina</h3>";
												echo "<h4 class=\"product-price\">1€ </h4>";
											
											echo "</div>";
											echo "<div class=\"add-to-cart\">";
												echo "<button class=\"add-to-cart-btn\" name=\"btn4\"><i class=\"fa fa-shopping-cart\"></i> <a href=\"cartAction.php?action=addToCart&id=4\"> Afig a la cistella</a></button>";
											echo "</div>";
										echo "</div>";
										//<!-- /product -->
									
									echo "</div>";
									echo "<div id=\"slick-nav-1\" class=\"products-slick-nav\"></div>";
								echo "</div>";
								//<!-- /tab -->
							echo "</div>";
						echo "</div>";
					echo "</div>";
					//<!-- Products tab & slick -->
				echo "</div>";
				//<!-- /row -->
			echo "</div>";
				//<!-- row -->
				echo "<br><br>";			
				echo "<div class=\"row\">";

					//<!-- section title -->
					echo "<div class=\"col-md-12\">";
						echo "<div class=\"section-title\">";
							echo "<a name=\"desdejuni\"><h3 class=\"title\">Desdejuni</h3></a>";
						echo "</div>";
					echo "</div>";
					//<!-- /section title -->

					//<!-- Products tab & slick -->
					echo "<div class=\"col-md-12\">";
						echo "<div class=\"row\">";
							echo "<div class=\"products-tabs\">";
								//<!-- tab -->
								echo "<div id=\"tab1\" class=\"tab-pane active\">";
									echo "<div class=\"products-slick\" data-nav=\"#slick-nav-1\">";
										//// <!-- product -->
										echo "<div class=\"product\">";
											echo "<div class=\"product-img\">";
												echo "<img src=\"./img/cereals.jpg\" alt=\"Cereals\" height=\"300\">";
												
											echo "</div>";
											echo "<div class=\"product-body\">";
												echo "<p class=\"product-category\">Desdejuni</p>";
												echo "<h3 class=\"product-name\">Cereals</h3>";
												echo "<h4 class=\"product-price\">1,50€</h4>";
												
											echo "</div>";
											echo "<div class=\"add-to-cart\">";
												echo "<button class=\"add-to-cart-btn\" name=\"btn5\"><i class=\"fa fa-shopping-cart\"></i> <a href=\"cartAction.php?action=addToCart&id=5\"> Afig a la cistella</a></button>";
											echo "</div>";
										echo "</div>";
										// <!-- /product -->

										//// <!-- product -->
										echo "<div class=\"product\">";
											echo "<div class=\"product-img\">";
												echo "<img src=\"./img/galletes.jpg\" alt=\"Galletes\" height=\"300\">";
												
											echo "</div>";
											echo "<div class=\"product-body\">";	
												echo "<p class=\"product-category\">Desdejuni</p>";
												echo "<h3 class=\"product-name\">Galletes</h3>";
												echo "<h4 class=\"product-price\">1€ </h4>";
											
											echo "</div>";
											echo "<div class=\"add-to-cart\">";
												echo "<button class=\"add-to-cart-btn\" name=\"btn6\"><i class=\"fa fa-shopping-cart\"></i><a href=\"cartAction.php?action=addToCart&id=6\">  Afig a la cistella</a></button>";
											echo "</div>";
										echo "</div>";
										//<!-- /product -->

										// // <!-- product -->
										echo "<div class=\"product\">";
											echo "<div class=\"product-img\">";
												echo "<img src=\"./img/mermelada2.png\" alt=\"Mermelada\" height=\"300\">";
												
											echo "</div>";
											echo "<div class=\"product-body\">";	
												echo "<p class=\"product-category\">Desdejuni</p>";
												echo "<h3 class=\"product-name\">Mermelada</h3>";
												echo "<h4 class=\"product-price\">1€ </h4>";
											
											echo "</div>";
											echo "<div class=\"add-to-cart\">";
												echo "<button class=\"add-to-cart-btn\" name=\"btn7\"><i class=\"fa fa-shopping-cart\"></i> <a href=\"cartAction.php?action=addToCart&id=7\"> Afig a la cistella</a></button>";
											echo "</div>";
										echo "</div>";
										//<!-- /product -->
									
										//// <!-- product -->
										echo "<div class=\"product\">";
											echo "<div class=\"product-img\">";
												echo "<img src=\"./img/llet2.jpg\" alt=\"Desdejuni\" height=\"300\">";
												
											echo "</div>";
											echo "<div class=\"product-body\">";	
												echo "<p class=\"product-category\">Desdejuni</p>";
												echo "<h3 class=\"product-name\">Llet</h3>";
												echo "<h4 class=\"product-price\">1€ </h4>";
											
											echo "</div>";
											echo "<div class=\"add-to-cart\">";
												echo "<button class=\"add-to-cart-btn\" name=\"btn8\"><i class=\"fa fa-shopping-cart\"></i><a href=\"cartAction.php?action=addToCart&id=8\">  Afig a la cistella</a></button>";
											echo "</div>";
										echo "</div>";
										// <!-- /product -->
									echo "</div>";
									echo "<div id=\"slick-nav-1\" class=\"products-slick-nav\"></div>";
								echo "</div>";
								//<!-- /tab -->
							echo "</div>";
						echo "</div>";
					echo "</div>";
					//<!-- Products tab & slick -->
				echo "</div>";
				//<!-- /row -->
			echo "</div>";
			echo "<br><br>";
			echo "<div class=\"row\">";

				//<!-- section title -->
				echo "<div class=\"col-md-12\">";
					echo "<div class=\"section-title\">";
						echo "<a name=\"fruita\"><h3 class=\"title\">Fruita i sucre</h3></a>";
						
					echo "</div>";
				echo "</div>";
				//<!-- /section title -->

				//<!-- Products tab & slick -->
				echo "<div class=\"col-md-12\">";
					echo "<div class=\"row\">";
						echo "<div class=\"products-tabs\">";
							//<!-- tab -->
							echo "<div id=\"tab1\" class=\"tab-pane active\">";
								echo "<div class=\"products-slick\" data-nav=\"#slick-nav-1\">";
									// <!-- product -->
									echo "<div class=\"product\">";
										echo "<div class=\"product-img\">";
											echo "<img src=\"./img/pinya.jpg\" alt=\"Pinya\" height=\"300\">";
											
										echo "</div>";
										echo "<div class=\"product-body\">";
											echo "<p class=\"product-category\">Fruita i sucre</p>";
											echo "<h3 class=\"product-name\">Pinya al natural</h3>";
											echo "<h4 class=\"product-price\">1€</h4>";
											
										echo "</div>";
										echo "<div class=\"add-to-cart\">";
											echo "<button class=\"add-to-cart-btn\" name=\"btn9\"><i class=\"fa fa-shopping-cart\"></i> <a href=\"cartAction.php?action=addToCart&id=9\"> Afig a la cistella</a></button>";
										echo "</div>";
									echo "</div>";
									// <!-- /product -->

									// <!-- product -->
									echo "<div class=\"product\">";
										echo "<div class=\"product-img\">";
											echo "<img src=\"./img/pressec.jpg\" alt=\"Préssec\" height=\"300\">";
										echo "</div>";
										echo "<div class=\"product-body\">";	
											echo "<p class=\"product-category\">Fruita i sucre</p>";
											echo "<h3 class=\"product-name\">Préssec al natural</h3>";
											echo "<h4 class=\"product-price\">1,50€ </h4>";
										
										echo "</div>";
										echo "<div class=\"add-to-cart\">";
											echo "<button class=\"add-to-cart-btn\" name=\"btn10\"><i class=\"fa fa-shopping-cart\"></i><a href=\"cartAction.php?action=addToCart&id=10\">  Afig a la cistella</a></button>";
										echo "</div>";
									echo "</div>";
								//	<!-- /product -->
									
									// <!-- product -->
									echo "<div class=\"product\">";
										echo "<div class=\"product-img\">";
											echo "<img src=\"./img/sucre.jpg\" alt=\"Sucre\" height=\"300\">";
											
										echo "</div>";
										echo "<div class=\"product-body\">";	
											echo "<p class=\"product-category\">Fruita i sucre</p>";
											echo "<h3 class=\"product-name\">Sucre</h3>";
											echo "<h4 class=\"product-price\">1€ </h4>";
										
										echo "</div>";
										echo "<div class=\"add-to-cart\">";
											echo "<button class=\"add-to-cart-btn\" name=\"btn11\"><i class=\"fa fa-shopping-cart\"></i><a href=\"cartAction.php?action=addToCart&id=11\">  Afig a la cistella</a></button>";
										echo "</div>";
									echo "</div>";
						//			<!-- /product -->
								
								
								echo "</div>";
								echo "<div id=\"slick-nav-1\" class=\"products-slick-nav\"></div>";
							echo "</div>";
							//<!-- /tab -->
						echo "</div>";
					echo "</div>";
				echo "</div>";
			//	<!-- Products tab & slick -->
			echo "</div>";
			//<!-- /row -->
		echo "</div>";
		echo "<br><br>";
		echo "<div class=\"row\">";

			//<!-- section title -->
			echo "<div class=\"col-md-12\">";
				echo "<div class=\"section-title\">";
					echo "<a name=\"higiene\"><h3 class=\"title\">Higiene</h3></a>";
					
				echo "</div>";
			echo "</div>";
			// <!-- /section title -->

			// <!-- Products tab & slick -->
			echo "<div class=\"col-md-12\">";
				echo "<div class=\"row\">";
					echo "<div class=\"products-tabs\">";
						//<!-- tab -->
						echo "<div id=\"tab1\" class=\"tab-pane active\">";
							echo "<div class=\"products-slick\" data-nav=\"#slick-nav-1\">";
								// <!-- product -->
								echo "<div class=\"product\">";
									echo "<div class=\"product-img\">";
										echo "<img src=\"./img/detergent.jpg\" alt=\"Detergent\" height=\"300\">";
										
									echo "</div>";
									echo "<div class=\"product-body\">";
										echo "<p class=\"product-category\">Higiene</p>";
										echo "<h3 class=\"product-name\">Detergent</h3>";
										echo "<h4 class=\"product-price\">1,50€</h4>";
										
									echo "</div>";
									echo "<div class=\"add-to-cart\">";
										echo "<button class=\"add-to-cart-btn\" name=\"btn12\"><i class=\"fa fa-shopping-cart\"></i><a href=\"cartAction.php?action=addToCart&id=12\">  Afig a la cistella</a></button>";
									echo "</div>";
								echo "</div>";
								// <!-- /product -->

								// <!-- product -->
								echo "<div class=\"product\">";
									echo "<div class=\"product-img\">";
										echo "<img src=\"./img/desodorant.jpg\" alt=\"Desodorant\" height=\"300\">";
									echo "</div>";
									echo "<div class=\"product-body\">";	
										echo "<p class=\"product-category\">Higiene</p>";
										echo "<h3 class=\"product-name\">Desodorant</h3>";
										echo "<h4 class=\"product-price\">1,50€ </h4>";
									
									echo "</div>";
									echo "<div class=\"add-to-cart\">";
										echo "<button class=\"add-to-cart-btn\" name=\"btn13\"><i class=\"fa fa-shopping-cart\"></i> <a href=\"cartAction.php?action=addToCart&id=13\">  Afig a la cistella</a></button>";
									echo "</div>";
								echo "</div>";
								//<!-- /product -->

								// <!-- product -->
								echo "<div class=\"product\">";
									echo "<div class=\"product-img\">";
										echo "<img src=\"./img/gel.jpg\" alt=\"Gel\" height=\"300\">";
										
									echo "</div>";
									echo "<div class=\"product-body\">";	
										echo "<p class=\"product-category\">Higiene</p>";
										echo "<h3 class=\"product-name\">Gel</h3>";
										echo "<h4 class=\"product-price\">1€ </h4>";
									
									echo "</div>";
									echo "<div class=\"add-to-cart\">";
										echo "<button class=\"add-to-cart-btn\" name=\"btn14\"><i class=\"fa fa-shopping-cart\"></i> <a href=\"cartAction.php?action=addToCart&id=14\">  Afig a la cistella</a></button>";
									echo "</div>";
								echo "</div>";
								// <!-- /product -->
							
							
							echo "</div>";
							echo "<div id=\"slick-nav-1\" class=\"products-slick-nav\"></div>";
						echo "</div>";
						//<!-- /tab -->
					echo "</div>";
				echo "</div>";
			echo "</div>";
		//	<!-- Products tab & slick -->
		echo "</div>";
		echo "<br><br><br>";
		//<!-- /row -->
		echo "<div class=\"row\">";
			echo "<div class=\"products-tabs\">";
				//<!-- tab -->
				echo "<div id=\"tab1\" class=\"tab-pane active\">";
					echo "<div class=\"products-slick\" data-nav=\"#slick-nav-1\">";
						// <!-- product -->
						echo "<div class=\"product\">";
							echo "<div class=\"product-img\">";
								echo "<img src=\"./img/pasta.jpg\" alt=\"Pasta\" height=\"300\">";
								
							echo "</div>";
							echo "<div class=\"product-body\">";
								echo "<p class=\"product-category\">Higiene</p>";
								echo "<h3 class=\"product-name\">Pasta de dents</h3>";
								echo "<h4 class=\"product-price\">1€</h4>";
								
							echo "</div>";
							echo "<div class=\"add-to-cart\">";
								echo "<button class=\"add-to-cart-btn\" name=\"btn15\"><i class=\"fa fa-shopping-cart\"></i> <a href=\"cartAction.php?action=addToCart&id=15\">  Afig a la cistella</a></button>";
							echo "</div>";
						echo "</div>";
						//<!-- /product -->

						// <!-- product -->
						echo "<div class=\"product\">";
							echo "<div class=\"product-img\">";
								echo "<img src=\"./img/raspall3.jpg\" alt=\"Raspall de dents\" height=\"300\">";
								
							echo "</div>";
							echo "<div class=\"product-body\">";	
								echo "<p class=\"product-category\">Higiene</p>";
								echo "<h3 class=\"product-name\">Raspall de dents</h3>";
								echo "<h4 class=\"product-price\">1€ </h4>";
							
							echo "</div>";
							echo "<div class=\"add-to-cart\">";
								echo "<button class=\"add-to-cart-btn\" name=\"btn16\"><i class=\"fa fa-shopping-cart\"></i><a href=\"cartAction.php?action=addToCart&id=16\">  Afig a la cistella</a></button>";
							echo "</div>";
						echo "</div>";
						// <!-- /product -->

						// <!-- product -->
						echo "<div class=\"product\">";
							echo "<div class=\"product-img\">";
								echo "<img src=\"./img/xampu.jpg\" alt=\"Xampú\" height=\"300\">";
								
							echo "</div>";
							echo "<div class=\"product-body\">";	
								echo "<p class=\"product-category\">Higiene</p>";
								echo "<h3 class=\"product-name\">Xampú</h3>";
								echo "<h4 class=\"product-price\">1€ </h4>";
							
							echo "</div>";
							echo "<div class=\"add-to-cart\">";
								echo "<button class=\"add-to-cart-btn\" name=\"btn17\"><i class=\"fa fa-shopping-cart\"></i> <a href=\"cartAction.php?action=addToCart&id=17\">  Afig a la cistella</a></button>";
							echo "</div>";
						echo "</div>";
					//<!-- /product -->
					
					
					echo "</div>";
					echo "<div id=\"slick-nav-1\" class=\"products-slick-nav\"></div>";
				echo "</div>";
				//<!-- /tab -->
			echo "</div>";
		echo "</div>";
	echo "</div>";
	//<!-- Products tab & slick -->
echo "</div>";
//<!-- /row -->
echo "</div>";
	echo "</div>";
	echo "<br><br>";
	echo "<div class=\"row\">";

		// <!-- section title -->
		echo "<div class=\"col-md-12\">";
			echo "<div class=\"section-title\">";
				echo "<a name=\"llegums\"><h3 class=\"title\">Llegums i arrós</h3></a>";
						
					echo "</div>";
				echo "</div>";
				// <!-- /section title -->

				// <!-- Products tab & slick -->
				echo "<div class=\"col-md-12\">";
					echo "<div class=\"row\">";
						echo "<div class=\"products-tabs\">";
							//<!-- tab -->
							echo "<div id=\"tab1\" class=\"tab-pane active\">";
								echo "<div class=\"products-slick\" data-nav=\"#slick-nav-1\">";
									// <!-- product -->
									echo "<div class=\"product\">";
										echo "<div class=\"product-img\">";
											echo "<img src=\"./img/cigrons.jpg\" alt=\"Cigrons\" height=\"300\">";
											
										echo "</div>";
										echo "<div class=\"product-body\">";
											echo "<p class=\"product-category\">Llegums i arrós</p>";
											echo "<h3 class=\"product-name\">Cigrons</h3>";
											echo "<h4 class=\"product-price\">1€</h4>";
											
										echo "</div>";
										echo "<div class=\"add-to-cart\">";
											echo "<button class=\"add-to-cart-btn\" name=\"btn18\"><i class=\"fa fa-shopping-cart\"></i> <a href=\"cartAction.php?action=addToCart&id=18\">  Afig a la cistella</a></button>";
										echo "</div>";
									echo "</div>";
							//		<!-- /product -->

									// <!-- product -->
									echo "<div class=\"product\">";
										echo "<div class=\"product-img\">";
											echo "<img src=\"./img/fesol.jpg\" alt=\"Fessols\" height=\"300\">";
										echo "</div>";
										echo "<div class=\"product-body\">";	
											echo "<p class=\"product-category\">Llegums i arrós</p>";
											echo "<h3 class=\"product-name\">Fesols</h3>";
											echo "<h4 class=\"product-price\">1€</h4>";
										
										echo "</div>";
										echo "<div class=\"add-to-cart\">";
											echo "<button class=\"add-to-cart-btn\" name=\"btn19\"><i class=\"fa fa-shopping-cart\"></i> <a href=\"cartAction.php?action=addToCart&id=19\">  Afig a la cistella</a></button>";
										echo "</div>";
									echo "</div>";
									// <!-- /product -->

									// <!-- product -->
									echo "<div class=\"product\">";
										echo "<div class=\"product-img\">";
											echo "<img src=\"./img/lentilles.jpg\" alt=\"Llentilles\" height=\"300\">";
										
										echo "</div>";
										echo "<div class=\"product-body\">";	
											echo "<p class=\"product-category\">Llegums i arrós</p>";
											echo "<h3 class=\"product-name\">Llentilles</h3>";
											echo "<h4 class=\"product-price\">1€ </h4>";
										
										echo "</div>";
										echo "<div class=\"add-to-cart\">";
											echo "<button class=\"add-to-cart-btn\" name=\"btn20\"><i class=\"fa fa-shopping-cart\"></i><a href=\"cartAction.php?action=addToCart&id=20\">  Afig a la cistella</a></button>";
										echo "</div>";
									echo "</div>";
									//<!-- /product -->
								// <!-- product -->
								echo "<div class=\"product\">";
									echo "<div class=\"product-img\">";
										echo "<img src=\"./img/arros.jpg\" alt=\"Arros\" height=\"300\">";
										
									echo "</div>";
									echo "<div class=\"product-body\">";	
										echo "<p class=\"product-category\">Llegums i arrós</p>";
										echo "<h3 class=\"product-name\">Arrós</h3>";
										echo "<h4 class=\"product-price\">1€ </h4>";
									
									echo "</div>";
									echo "<div class=\"add-to-cart\">";
										echo "<button class=\"add-to-cart-btn\" name=\"btn21\"><i class=\"fa fa-shopping-cart\"></i> <a href=\"cartAction.php?action=addToCart&id=21\">  Afig a la cistella</a></button>";
									echo "</div>";
								echo "</div>";
							//	<!-- /product -->
								echo "</div>";
								echo "<div id=\"slick-nav-1\" class=\"products-slick-nav\"></div>";
							echo "</div>";
							//<!-- /tab -->
						echo "</div>";
					echo "</div>";
				echo "</div>";
			//	<!-- Products tab & slick -->
			echo "</div>";
			//<!-- /row -->
			echo "<br><br>";
			echo "<div class=\"row\">";

			//	<!-- section title -->
				echo "<div class=\"col-md-12\">";
					echo "<div class=\"section-title\">";
						echo "<a name=\"pasta\"><h3 class=\"title\">Pasta</h3></a>";
						
					echo "</div>";
				echo "</div>";
				//<!-- /section title -->

				//<!-- Products tab & slick -->
				echo "<div class=\"col-md-12\">";
					echo "<div class=\"row\">";
						echo "<div class=\"products-tabs\">";
							//<!-- tab -->
							echo "<div id=\"tab1\" class=\"tab-pane active\">";
								echo "<div class=\"products-slick\" data-nav=\"#slick-nav-1\">";
									// <!-- product -->
									echo "<div class=\"product\">";
										echo "<div class=\"product-img\">";
											echo "<img src=\"./img/fideus2.jpg\" alt=\"Fideus\" height=\"300\">";
											
										echo "</div>";
										echo "<div class=\"product-body\">";
											echo "<p class=\"product-category\">Pasta</p>";
											echo "<h3 class=\"product-name\">Fideus</h3>";
											echo "<h4 class=\"product-price\">0,50€</h4>";
											
										echo "</div>";
										echo "<div class=\"add-to-cart\">";
											echo "<button class=\"add-to-cart-btn\" name=\"btn22\"><i class=\"fa fa-shopping-cart\"></i><a href=\"cartAction.php?action=addToCart&id=22\">  Afig a la cistella</a></button>";
										echo "</div>";
									echo "</div>";
									//<!-- /product -->

									// <!-- product -->
									echo "<div class=\"product\">";
										echo "<div class=\"product-img\">";
											echo "<img src=\"./img/espaguetti.jpg\" alt=\"Espagueti\" height=\"300\">";
											
										echo "</div>";
										echo "<div class=\"product-body\">";	
											echo "<p class=\"product-category\">Pasta</p>";
											echo "<h3 class=\"product-name\">Espagueti</h3>";
											echo "<h4 class=\"product-price\">1€ </h4>";
										
										echo "</div>";
										echo "<div class=\"add-to-cart\">";
											echo "<button class=\"add-to-cart-btn\" name=\"btn23\"><i class=\"fa fa-shopping-cart\"></i> <a href=\"cartAction.php?action=addToCart&id=23\">  Afig a la cistella</a> </button>";
										//	echo "<button class="\add-to-cart-btn\" name=\"btn23\"><i class=\"fa fa-shopping-cart\"></i> Afig a la cistella</button>";
										echo "</div>";
									echo "</div>";
								//	<!-- /product -->

									// <!-- product -->
									echo "<div class=\"product\">";
										echo "<div class=\"product-img\">";
											echo "<img src=\"./img/macarrons.jpg\" alt=\"Macarrons\" height=\"300\">";
										
										echo "</div>";
										echo "<div class=\"product-body\">";	
											echo "<p class=\"product-category\">Pasta</p>";
											echo "<h3 class=\"product-name\">Macarrons</h3>";
											echo "<h4 class=\"product-price\">1€ </h4>";
										
										echo "</div>";
										echo "<div class=\"add-to-cart\">";
											echo "<button class=\"add-to-cart-btn\" name=\"btn24\"><i class=\"fa fa-shopping-cart\"></i> <a href=\"cartAction.php?action=addToCart&id=24\">  Afig a la cistella</a></button>";
										echo "</div>";
									echo "</div>";
									//<!-- /product -->
								// <!-- product -->
								
								echo "<div id=\"slick-nav-1\" class=\"products-slick-nav\"></div>";
							echo "</div>";
						//	<!-- /tab -->
						echo "</div>";
					echo "</div>";
				echo "</div>";
			//	<!-- Products tab & slick -->
			echo "</div>";
			//<!-- /row -->
	//<!-- /row -->
	echo "</div>";
	echo "<br><br><br>";
	echo "<div class=\"row\">";

	//	<!-- section title -->
		echo "<div class=\"col-md-12\">";
			echo "<div class=\"section-title\">";
				echo "<a name=\"verdures\"><h3 class=\"title\"> &nbsp; &nbsp; Verdures</h3></a>";
				
			echo "</div>";
		echo "</div>";
	//	<!-- /section title -->

	//	<!-- Products tab & slick -->
		echo "<div class=\"col-md-12\">";
			echo "<div class=\"row\">";
				echo "<div class=\"products-tabs\">";
	//				<!-- tab -->
					echo "<div id=\"tab1\" class=\"tab-pane active\">";
						echo "<div class=\"products-slick\" data-nav=\"#slick-nav-1\">";
							// <!-- product -->
							echo "<div class=\"product\">";
								echo "<div class=\"product-img\">";
									echo "<img src=\"./img/panis.jpg\" alt=\"Panís\" height=\"300\">";
									
								echo "</div>";
								echo "<div class=\"product-body\">";
									echo "<p class=\"product-category\">Verdures</p>";
									echo "<h3 class=\"product-name\">Panís</h3>";
									echo "<h4 class=\"product-price\">1€</h4>";
									
								echo "</div>";
								echo "<div class=\"add-to-cart\">";
									echo "<button class=\"add-to-cart-btn\" name=\"btn25\"><i class=\"fa fa-shopping-cart\"></i> <a href=\"cartAction.php?action=addToCart&id=25\">  Afig a la cistella</a></button>";
								echo "</div>";
							echo "</div>";
						//	<!-- /product -->

							// <!-- product -->
							echo "<div class=\"product\">";
								echo "<div class=\"product-img\">";
									echo "<img src=\"./img/pessol.jpg\" alt=\"Pèsol\" height=\"300\">";
									
								echo "</div>";
								echo "<div class=\"product-body\">";	
									echo "<p class=\"product-category\">Verdures</p>";
									echo "<h3 class=\"product-name\">Pèsol</h3>";
									echo "<h4 class=\"product-price\">1€ </h4>";
								
								echo "</div>";
								echo "<div class=\"add-to-cart\">";
									echo "<button class=\"add-to-cart-btn\" name=\"btn26\"><i class=\"fa fa-shopping-cart\"></i> <a href=\"cartAction.php?action=addToCart&id=26\">  Afig a la cistella</a></button>";
								echo "</div>";
							echo "</div>";
				//			<!-- /product -->

							// <!-- product -->
							echo "<div class=\"product\">";
								echo "<div class=\"product-img\">";
									echo "<img src=\"./img/tomata.jpg\" alt=\"Tomata\" height=\"300\">";
									
								echo "</div>";
								echo "<div class=\"product-body\">";	
									echo "<p class=\"product-category\">Verdures</p>";
									echo "<h3 class=\"product-name\">Pot de tomata</h3>";
									echo "<h4 class=\"product-price\">1€ </h4>";
								
								echo "</div>";
								echo "<div class=\"add-to-cart\">";
									echo "<button class=\"add-to-cart-btn\" name=\"btn27\"><i class=\"fa fa-shopping-cart\"></i> <a href=\"cartAction.php?action=addToCart&id=27\">  Afig a la cistella</a></button>";
								echo "</div>";
							echo "</div>";
							//<!-- /product -->
						// <!-- product -->
						
						echo "<div id=\"slick-nav-1\" class=\"products-slick-nav\"></div>";
					echo "</div>";
					//<!-- /tab -->
				echo "</div>";
			echo "</div>";
		echo "</div>";
		//<!-- Products tab & slick -->
	echo "</div>";
	//<!-- /row -->
		echo "</div>";
	//		<!-- /container -->
		echo "</div>";
	//	<!-- /SECTION -->

	echo "<br><br><br>";
	//	<!-- FOOTER -->
		echo "<footer id=\"footer\">";
			//<!-- top footer -->
			echo "<div class=\"section\">";
				//<!-- container -->
				echo "<div class=\"container\">";
					//<!-- row -->
					echo "<div class=\"row\">";
						echo "<div class=\"col-md-3 col-xs-6\">";
							echo "<div class=\"footer\">";
								echo "<h3 class=\"footer-title\">Sobre nosaltres</h3>";
								echo "<p> Caritas La Vall d'Uixó</p>";
								echo "<ul class=\"footer-links\">";
									echo "<li><a href=\"#\"><i class=\"fa fa-map-marker\"></i>Carrer del Convent.<br>  La Vall d'Uixó</a></li>";
									echo "<li><a href=\"#\"><i class=\"fa fa-phone\"></i>964 66 05 23</a></li>";
									echo "<li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i>acsocial@caritas-sc.org</a></li>";
									echo "<li><a href=\"#\"><i class=\"fa fa-home\"></i>www.caritas.es</a></li>";

								echo "</ul>";
							echo "</div>";
						echo "</div>";

						echo "<div class=\"col-md-3 col-xs-6\">";
							echo "<div class=\"footer\">";
								echo "<h3 class=\"footer-title\">Categories</h3>";
								echo "<ul class=\"footer-links\">";
									echo "<li><a href=\"#brou\">Brou, oli i farina</a></li>";
									echo "<li><a href=\"#desdejuni\">Desdejuni</a></li>";
									echo "<li><a href=\"#fruita\">Fruita i sucre</a></li>";
									echo "<li><a href=\"#higiene\">Higiene</a></li>";
									echo "<li><a href=\"#llegums\">Llegums i arrós</a></li>";
									echo "<li><a href=\"#pasta\"> Pasta </a></li>";
									echo "<li><a href=\"#verdures\">Verdures </a></li>";
								echo "</ul>";
							echo "</div>";
						echo "</div>";

						/*<div class="clearfix visible-xs">echo "</div>";

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							echo "</div>";
						echo "</div>";

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							echo "</div>";
						echo "</div>";*/
					echo "</div>";
					// <!-- /row -->
				echo "</div>";
				// <!-- /container -->
			echo "</div>";
			// <!-- /top footer -->

			//<!-- bottom footer -->
			echo "<div id=\"bottom-footer\" class=\"section\">";
				echo "<div class=\"container\">";
					//<!-- row -->
					echo "<div class=\"row\">";
						echo "<div class=\"col-md-12 text-center\">";
							echo "<ul class=\"footer-payments\">";
								echo "<li><a href=\"#\"><i class=\"fa fa-cc-visa\"></i></a></li>";
								echo "<li><a href=\"#\"><i class=\"fa fa-credit-card\"></i></a></li>";
								echo "<li><a href=\"#\"><i class=\"fa fa-cc-paypal\"></i></a></li>";
								echo "<li><a href=\"#\"><i class=\"fa fa-cc-mastercard\"></i></a></li>";
								echo "<li><a href=\"#\"><i class=\"fa fa-cc-discover\"></i></a></li>";
								echo "<li><a href=\"#\"><i class=\"fa fa-cc-amex\"></i></a></li>";
							echo "</ul>";
							echo "<span class=\"copyright\">";
								/*<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->*/
							echo "</span>";
						echo "</div>";
					echo "</div>";
						//<!-- /row -->
				echo "</div>";
				// <!-- /container -->
			echo "</div>";
			// <!-- /bottom footer -->
		echo "</footer>";
		//<!-- /FOOTER -->

	//	<!-- jQuery Plugins -->
		echo "<script src=\"js/jquery.min.js\"></script>";
		echo "<script src=\"js/bootstrap.min.js\"></script>";
		echo "<script src=\"js/slick.min.js\"></script>";
		echo "<script src=\"js/nouislider.min.js\"></script>";
		echo "<script src=\"js/jquery.zoom.min.js\"></script>";
		echo "<script src=\"js/main.js\"></script>";
			

	echo "</body>";
?>
