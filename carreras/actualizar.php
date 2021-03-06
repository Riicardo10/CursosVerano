<!DOCTYPE html>
<html>
	<head>
		<title>Actualizar carrera</title>
		<meta charset="utf-8">
		<?php	require '../styles-scripts.php';?>
		<?php
			$clave = $_GET['clave'];
			require 'CarreraModel.php';
			$obj_carrera = new CarreraModel; 
			$nombre_carrera = $obj_carrera->getCarrera( $clave );
		?>
	</head>
	<body>
		<div class="container">
			<?php	require '../banner/banner.php'; ?>
			<div class="row">
				<div class="col panel panel-success col-lg-13 col-lg-offset-0">
					<div class="panel-heading text-center">
						<h1 >Actualizar carrera</h1>
					</div>
					<div class="panel-body ">
						<form action="CarreraModel.php" method="POST">
							<div class="form-group text-center">
								<label for="txt_clave" style="text-align: left; font-size: 20px;width: 200px;">Clave:</label>
								<input type="text" name="txt_clave" style="width: 200px; font-size: 20px" value="<?php echo $clave; ?>" readonly>
							</div>
							<div class="form-group text-center">
								<label for="txt_carrera" style="width: 200px;text-align: left;  font-size: 20px">Carrera:</label>
								<input type="text" name="txt_carrera" style="width: 200px; font-size: 20px" value="<?php echo $nombre_carrera; ?>" required>
							</div>
							<div class="form-group col-lg-6 col-lg-offset-3 right text-center"> 
							 	<a href="../admin/inicio.php#carreras" class="btn btn-danger" style="width: 150px">Cancelar</a>
								<input type="submit" name="btt_actualizar" class="btn btn-success" style="width: 150px" value="Actualizar">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>