<!DOCTYPE html>
<html>
	<head>
		<title>Actualización de profesores</title>
		<?php	require '../styles-scripts.php';?>
	</head>
	<body>
		<div class="container">
			<?php	require '../banner/banner.php'; ?>
			<div class="row">
				<div class="col panel panel-success col-lg-13 col-lg-offset-0">
					<div class="panel-heading text-center">
						<h1 >Actualización de profesores</h1>
					</div>
					<div class="panel-body ">
						<form action="registro.php" method="" id="form" name="">
							<div class="row form-group text-center">
								<label for="nombre" style="text-align: left; font-size: 20px;">Clave:</label>
								<input type="text" name="usuario" style="width: 200px; font-size: 20px">
							</div>
							<div class="row form-group text-center">
								<div class="col-xs-4">
									<label for="nombre" style="text-align: left; font-size: 20px;width: 200px;">Nombre:</label>
									<input type="text" name="usuario" style="width: 200px; font-size: 20px">
								</div>
								<div class="col-xs-4">
									<label for="nombre" style="text-align: left; font-size: 20px;width: 200px;">Apellido paterno:</label>
									<input type="text" name="usuario" style="width: 200px; font-size: 20px">
								</div>
								<div class="col-xs-4">
									<label for="nombre" style="text-align: left; font-size: 20px;width: 200px;">Apellido materno:</label>
									<input type="text" name="usuario" style="width: 200px; font-size: 20px">
								</div>
							</div>
							<div class="row form-group text-center">
								<div class="col-xs-4">
									<label for="nombre" style="text-align: left; font-size: 20px;width: 200px;">Email:</label>
									<input type="text" name="usuario" style="width: 200px; font-size: 20px">
								</div>
								<div class="col-xs-4" style="">
									<label for="nombre" style="text-align: left; font-size: 20px;width: 200px;">Telefono:</label>
									<input type="text" name="usuario" style="width: 200px; font-size: 20px">
								</div>
								<div class="col-xs-4" style="">
									<label for="nombre" style="text-align: left; font-size: 20px;width: 200px;">Área:</label>
									<select name="" id="" class="form-control" style="width: 300px">
										<option value="">Ciencias de la tierra</option>
										<option value="">Sistemas y computación</option>
										<option value="">Ciencias básicas</option>
										<option value="">Ciencias económicas</option>
										<option value="">Ciencias administrativas</option>
									</select>
								</div>
							</div>
							<div class="row form-group text-center" style="margin-top: 2%">
								<div class="col-xs-4"></div>
								<div class="col-xs-2"></div>
								<div class="col-xs-6">
									 <div class="form-group col-lg-9 col-lg-offset-3 right text-center" >
							 			<a href="profesores.php" class="btn btn-danger" style="width: 150px">Cancelar</a>
										<input type="submit" name="botonCrear" class="btn btn-success" style="width: 150px" value="Actualizar">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>