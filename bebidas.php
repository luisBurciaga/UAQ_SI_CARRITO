<?php
	include("global/config.php");
	include("global/conexion.php");
	include("funciones.php");	
	include("templates/cabezera.php");
?>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Productos</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a href="bebidas.php">Bebidas</a></li>
									<li><a href="index.php">Ensaladas</a></li>
									<li><a href="fruta.php">Fruta</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">

										<!-- product -->

										<?php
										function make_date(){
											return strftime("%Y-%m-%d %H:%M:%S", time());
										}

										$date = make_date();

											$Select_slider=$pdo->prepare("SELECT c.name AS categoria,p.name AS nombre,
													p.sale_price AS precio, m.file_name AS imagen, p.media_id AS idImage,
													p.id AS productoId
													FROM products p LEFT JOIN categories c ON c.id = p.categorie_id 
													LEFT JOIN media m ON m.id = p.media_id WHERE p.categorie_id = 2");
											$Select_slider->execute();
											$listaProductos=$Select_slider->fetchAll(PDO::FETCH_ASSOC);
											// print_r($listaProductos);
										?>

									<?php foreach($listaProductos as $producto){ ?>

										<div class="product" >
											<div class="product-img" height>
												<img src="./uploads/products/<?php echo $producto['imagen'] ?> " alt="">
											</div>
											<div class="product-body">
												<p class="product-category"> <?php	
													echo $producto['categoria'];													
													?> </p>
												<h3 class="product-name">
													<?php
														echo $producto['nombre']; 
													?> </h3>
												<h4 class="product-price">$<?php echo $producto['precio'] ?> </h4>
												<!-- <div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div> -->
											</div>
											<div class="add-to-cart">
											<form action="" method="POST">
												<input type="hidden" name="product_id" id="product_id" value="<?php echo $producto['productoId'] ?>">
												<input type="hidden" name="product_name" id="product_name" value="<?php echo $producto['nombre'] ?>">
												<input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1 ?>">
												<input type="hidden" name="price" id="price" value="<?php echo $producto['precio'] ?>">
												<input type="hidden" name="date" id="date" value="<?php echo $date ?>">
												<input type="hidden" name="status" id="status" value="<?php echo 0 ?>" >

												<button class="add-to-cart-btn" name="btnaccion" value="agregar" type="submit">
													<i class="fa fa-shopping-cart"></i> Agregar al carrito
												</button>
											</form>
											</div>
										</div>
										
										<?php } ?>
										<!-- /product -->

									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->


				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
