<?php
	include("global/config.php");
	include("global/conexion.php");
	include("funciones.php");	
	include("templates/cabezera.php");
?>

<div class="col-md-7">
						<!-- Billing Details -->
			<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Direccion</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="username" placeholder="Nombre">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="userlastname" placeholder="Apellido">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="correo" placeholder="Correo">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="telefono" placeholder="Telefono">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="colonia" placeholder="Colonia">
								<input class="input" type="text" name="calle" placeholder="calle">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="direccion" placeholder="Calle">
							</div>
						</div>
						<!-- /Billing Details -->
					</div>