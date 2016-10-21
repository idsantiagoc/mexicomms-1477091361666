<?php
include('config.php');
	//echo $_GET['serial'];
	
		//$_SESSION['serial'] = $serial;
		//Obtiene los datos de la tabla os_system con el serial introducido
		$sql = mysqli_query($con,"SELECT * FROM calendar");
		$datos = mysqli_fetch_assoc($sql);
		//Obtiene el dato del campo user y se la asigna a una variable de sesion
		//$_SESSION['username'] = $datos['user'];   	$query = mysqli_query($con, "SELECT * FROM calendar");
		$title = 'Mi Usuario';
	
	
?>
	
	<div id="data_user">
		<div class="row">
			<p class="title">Mi usuario</p>
		</div>
		<div class="row flex">
			<div class="row-title">
				<p>Evento</p>
			</div>
			<div class="row-content">
				<?php echo $datos['title']; ?>
			</div>
		</div>		
	</div>
	<?php echo $datos['title']; ?>
</div>
<script src="<?php echo $raiz; ?>js/jquery-3.0.0.min.js"></script>
<script src="<?php echo $raiz; ?>js/menu.js" ></script>
</body>
</html>