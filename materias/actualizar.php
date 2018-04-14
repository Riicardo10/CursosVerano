<!DOCTYPE html>
<html>
	<head>
		<title>Actualización de materias</title>
		<?php	require '../styles-scripts.php';?>
	</head>
	<body>
		<div class="container">
			<?php	require '../banner/banner.php'; ?>
			<div class="row">
				<div class="col panel panel-success col-lg-13 col-lg-offset-0">
					<div class="panel-heading text-center">
						<h1 >Actualización de materias</h1>
					</div>
					<div class="panel-body ">
						<form action="registro.php" method="" id="form" name="">
							<div class="row form-group text-center">
								<div class="col-xs-2"></div>
								<div class="col-xs-4">
									<label for="nombre" style="text-align: left; font-size: 20px;width: 200px;">Clave:</label>
									<input type="text" name="usuario" style="width: 200px; font-size: 20px">
								</div>
								<div class="col-xs-4">
									<label for="nombre" style="text-align: left; font-size: 20px;width: 200px;">Nombre:</label>
									<input type="text" name="usuario" style="width: 200px; font-size: 20px">
								</div>
							</div>
							<div class="row form-group text-center">
								<div class="col-xs-2"></div>
								<div class="col-xs-4" style="">
									<label for="nombre" style="text-align: left; font-size: 20px;width: 200px;">Carrera:</label>
									<select name="" id="" class="form-control" style="width: 300px">
										<option value="">Contabilidad</option>
										<option value="">Gestión empresarial</option>
										<option value="">Ingeniería informatica</option>
										<option value="">Ingeniería civil</option>
										<option value="">Ingeniería en sistemas computacionales</option>
									</select>
								</div>
								<div class="col-xs-4" style="">
									<label for="nombre" style="text-align: left; font-size: 20px;width: 200px;">Créditos:</label>
									<input type="text" name="usuario" style="width: 200px; font-size: 20px" min="1" max="10">
								</div>
							</div>
							<div class="row form-group text-center" style="margin-top: 2%">
								<div class="form-group col-lg-6 col-lg-offset-3 right text-center"> 
									<a href="../admin/inicio.php" class="btn btn-danger" style="width: 150px">Cancelar</a>
									<input type="submit" name="botonCrear" class="btn btn-success" style="width: 150px" value="Registrar">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>











