<?php 

?>

<div class="container-fluid">

	<div class="row">
	<div class="col-lg-16">
			<button class="btn btn-primary float-right btn-sm" id="new_user"><i class="fa fa-plus"></i> Nuevo usuario</button>
	</div>
	</div>
	<br>
	<div class="col-lg-16">
		<div class="card ">
			<div class="card-header"><b>Lista de Usuarios</b></div>
			<div class="card-body">
				<table class="table-striped table-bordered">
			<thead>
				<tr>
					<th class="text-center">#</th>
					<th class="text-center">Nombre</th>
					<th class="text-center">Username</th>
				    <th class="text-center">Telefono</th>
					<th class="text-center">Telefono emergencia</th>
					<th class="text-center">Fecha de Ingreso</th>
			        <th class="text-center">Domicilio</th>
					<th class="text-center">Codigo_postal</th>
					<th class="text-center">Estado</th>

					<th class="text-center">Tipo</th>

					<th class="text-center">Accion</th>
				</tr>
			</thead>
			<tbody>
				<?php
 					include 'db_connect.php';
 					$type = array("","Admin","Staff","Jefe de meseros","Alumnus/Alumna");
 					$users = $conn->query("SELECT * FROM users order by name asc");
 					$i = 1;
 					while($row= $users->fetch_assoc()):
				 ?>
				 <tr>
				 	<td class="text-center">
				 		<?php echo $i++ ?>
				 	</td>
				 	<td>
				 		<?php echo ucwords($row['name']) ?>
				 	</td>
					 <td>
				 		<?php echo $row['username'] ?>
				 	</td>
					 <td>
				 		<?php echo $row['telefono'] ?>
				 	</td>
					 <td>
				 		<?php echo $row['telefono_emergencia'] ?>
				 	</td>
					 <td>
				 		<?php echo $row['fechaingreso'] ?>
				 	</td>
					<td>
				 		<?php echo $row['domicilio'] ?>
				 	</td>
					 <td>
				 		<?php echo $row['codigo_postal'] ?>
				 	</td>
					 <td>
				 		<?php echo $row['estado'] ?>
				 	</td>
				 	<td>
				 		<?php echo $type[$row['type']] ?>
				 	</td>
				 	<td>
				 		<center>
							<div class="btn-group">
							  <button type="button" class="btn btn-primary btn-sm">Action</button>
							  <button type="button" class="btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    <span class="sr-only">Toggle Dropdown</span>
							  </button>
							  <div class="dropdown-menu">
							    <a class="dropdown-item edit_user" href="javascript:void(0)" data-id = '<?php echo $row['id'] ?>'>Edit</a>
							    <div class="dropdown-divider"></div>
							    <a class="dropdown-item delete_user" href="javascript:void(0)" data-id = '<?php echo $row['id'] ?>'>Delete</a>
							  </div>
							</div>
						</center>
				 	</td>
				 </tr>
				<?php endwhile; ?>
			</tbody>
		</table>
			</div>
		</div>
	</div>


</div>
<script>
	$('table').dataTable();
$('#new_user').click(function(){
	uni_modal('New User','manage_user.php')
})
$('.edit_user').click(function(){
	uni_modal('Edit User','manage_user.php?id='+$(this).attr('data-id'))
})
$('.delete_user').click(function(){
		_conf("Are you sure to delete this user?","delete_user",[$(this).attr('data-id')])
	})
	function delete_user($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_user',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>