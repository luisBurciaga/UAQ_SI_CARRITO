<?php
	include("global/config.php");
	include("funciones.php");	
	include("templates/cabezera.php");
?>

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
						<?php 
							if(!empty($_SESSION['CARRITO'])){
						?>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<table class="table table-light table-bordered">
									<tbody>
										<tr>
											<th width="40%">Nombre</th>
											<th width="15%">Cantidad</th>
											<th width="20%">Precio</th>
											<th width="20%">Total</th>
											<th width="5%">--</th>
										</tr>

										<?php $total= 0; ?>
										<?php foreach($_SESSION['CARRITO'] as $indice=>$producto){?>

										<tr>
											<?php $id= $producto['id'] ?>
											<?php $date= $producto['date'] ?>
											<?php $status= $producto['status'] ?>
											<td width="40%"> <?php echo $producto['product_name'] ?> </td>
											<td width="15%"><?php echo $producto['cantidad'] ?></td>
											<td width="20%">$<?php echo $producto['price'] ?></td>
											<td width="20%">$<?php echo number_format($producto['price']*$producto['cantidad'],2); ?></td>
											<td width="5%"> 
												<form action="" method="POST">
													<input type="hidden" name="id" value="<?php echo $id; ?>">
													<button class="btn btn-danger" name="btnaccion" value="eliminar" type="submit">
														Eliminar
													</button> 
												</form>
											</td>
										</tr>
										<?php $total= $total+($producto['price']*$producto['cantidad']); ?>
										<?php } ?>

									</tbody>
								</table>
								<?php 
									}
									else{ 
										echo"<script>alert('Sin productos')</script>";
									}
								?>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">$<?php echo number_format($total,2); ?></strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Direct Bank Transfer
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Cheque Payment
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Paypal System
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div>
						<a href="#" class="primary-btn order-submit">Place order</a>
					</div>
					<!-- /Order Details -->
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
