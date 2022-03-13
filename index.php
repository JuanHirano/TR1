
<?php
include("menu.php");
include("conexion.php");


$busqueda =($_REQUEST['txtbuscar']);
if(!empty($busqueda)){
	$sql= "SELECT * FROM empleados WHERE dni='$busqueda'";
	$resultado= mysqli_query($con,$sql);
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container" style="width: 90%">
	<br>
	<h3 align="center" style="color:#FF0000">Consulta de empleados</h3>
	<br>
	<form action="" method="get" class="float-rigth" style="display:flex">
		<input type="text" name="txtbuscar" placeholder="Ingrese su DNI" class="form-control" required="">
		<input type="submit" name="Buscar" value="Buscar" class="btn btn-dark my-2 my-sm-0" style="margin-left: 10px;">
	</form>
	<br>
	<table class="table table-striped table-dark">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">DNI</th>
				<th scope="col">Apellidos</th>
				<th scope="col">Nombres</th>
			</tr>
		</thead>
		<tbody>
			<?php while($fila=mysqli_fetch_assoc($resultado)) { ?>
			<tr>
				<td scope="row"> <?php echo $fila['id'];?> </td>
				<td scope="row"> <?php echo $fila['DNI'];?> </td>
				<td scope="row"> <?php echo $fila['Apellidos'];?> </td>
				<td scope="row"> <?php echo $fila['Nombres'];?> </td>

			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>