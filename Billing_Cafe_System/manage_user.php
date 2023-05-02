<?php 
include('db_connect.php');
session_start();
if(isset($_GET['id'])){
$user = $conn->query("SELECT * FROM users where id =".$_GET['id']);
foreach($user->fetch_array() as $k =>$v){
	$meta[$k] = $v;
}
}
?>
<div class="container-fluid">
	<div id="msg"></div>
	
	<form action="" id="manage-user">
    		<input type="hidden" name="id" value="<?php echo isset($meta['id']) ? $meta['id']: '' ?>">
    		<div class="form-group">
    			<label for="name">Name</label>
    			<input type="text" name="name" id="name" class="form-control" value="<?php echo isset($meta['name']) ? $meta['name']: '' ?>" required>
    		</div>
    		<div class="form-group">
    			<label for="username">Username</label>
    			<input type="text" name="username" id="username" class="form-control" value="<?php echo isset($meta['username']) ? $meta['username']: '' ?>" required  autocomplete="off">
    		</div>
    		<div class="form-group">
    			<label for="telefono">Telefono</label>
    			<input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo isset($meta['telefono']) ? $meta['telefono']: '' ?>" required>
    		</div>
    		<div class="form-group">
    			<label for="telefono_emergencia">Telefono Emergencia</label>
    			<input type="text" name="telefono_emergencia" id="telefono_emergencia" class="form-control" value="<?php echo isset($meta['telefono_emergencia']) ? $meta['telefono_emergencia']: '' ?>" required>
    		</div>
    		<div class="form-group">
    			<label for="fechaingreso">Fecha Ingreso</label>
    			<input type="text" name="fechaingreso" id="fechaingreso" class="form-control" value="<?php echo isset($meta['fechaingreso']) ? $meta['fechaingreso']: '' ?>" required>
    		</div>
    		<div class="form-group">
    			<label for="domicilio">Domicilio</label>
    			<input type="text" name="domicilio" id="domicilio" class="form-control" value="<?php echo isset($meta['domicilio']) ? $meta['domicilio']: '' ?>" required>
    		</div>
    		<div class="form-group">
    			<label for="codigo_postal">Codigo Postal</label>
    			<input type="text" name="codigo_postal" id="codigo_postal" class="form-control" value="<?php echo isset($meta['codigo_postal']) ? $meta['codigo_postal']: '' ?>" required>
    		</div>
    		<div class="form-group">
    			<label for="estado">Estado</label>
    			<input type="text" name="estado" id="estado" class="form-control" value="<?php echo isset($meta['estado']) ? $meta['estado']: '' ?>" required >
    		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" class="form-control" value="" autocomplete="off">
			<?php if(isset($meta['id'])): ?>
			<small><i>Leave this blank if you dont want to change the password.</i></small>
		<?php endif; ?>
		</div>
		<?php if(isset($meta['type']) && $meta['type'] == 4): ?>
			<input type="hidden" name="type" value="4">
		<?php else: ?>
		<?php if(!isset($_GET['mtype'])): ?>
		<div class="form-group">
			<label for="type">User Type</label>
			<select name="type" id="type" class="custom-select">
				<option value="2" <?php echo isset($meta['type']) && $meta['type'] == 2 ? 'selected': '' ?>>Staff</option>
				<option value="1" <?php echo isset($meta['type']) && $meta['type'] == 1 ? 'selected': '' ?>>Admin</option>
				<option value="3" <?php echo isset($meta['type']) && $meta['type'] == 3 ? 'selected': '' ?>>Jefe de meseros</option>
			</select>
		</div>
		<?php endif; ?>
		<?php endif; ?>
		

	</form>
</div>
<script>
	
	$('#manage-user').submit(function(e){
		e.preventDefault();
		start_load()
		$.ajax({
			url:'ajax.php?action=save_user',
			method:'POST',
			data:$(this).serialize(),
			success:function(resp){
				if(resp ==1){
					alert_toast("Data successfully saved",'success')
					setTimeout(function(){
						location.reload()
					},1500)
				}else{
					$('#msg').html('<div class="alert alert-danger">Username already exist</div>')
					end_load()
				}
			}
		})
	})

</script>