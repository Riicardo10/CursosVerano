<!DOCTYPE html>
<html>
	<head>
		<title>Administrador</title>
		<?php	require '../styles-scripts.php';?>
	</head>
	<body>
		<div class="container">
			<?php	require '../banner/banner.php'; ?>
			<hr>
			<div class="container">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
					</li>
					<li class="nav-item"> 
						<a class="nav-link" id="areas-tab" data-toggle="tab" href="#areas" role="tab" aria-controls="areas" aria-selected="false">Areas</a>
					</li>
					<li class="nav-item"> 
						<a class="nav-link" id="carreras-tab" data-toggle="tab" href="#carreras" role="tab" aria-controls="carreras" aria-selected="false">Carreras</a>
					</li>
				</ul>
				<?php require 'tabs.php'; ?>
			</div>
		</div>

	</body>
	<script>
		var hash = window.location.hash;
		$(function () {
			if( hash == "#areas" )
				$('#areas-tab').tab('show');
			else if( hash == "#carreras" )
				$('#carreras-tab').tab('show');
			else
				$('#general-tab').tab('show')
		})
	</script>
</html>