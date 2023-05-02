
<style>
	.collapse a{
		text-indent:10px;
	}
	nav#sidebar{
		/*background: url(assets/uploads/<?php echo $_SESSION['system']['cover_img'] ?>) !important*/
	}
</style>

<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">
				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-tachometer-alt "></i></span> Inicio</a>
				<a href="index.php?page=orders" class="nav-item nav-orders"><span class='icon-field'><i class="fa fa-clipboard-list "></i></span> Ordenes</a>
				<a href="billing/index.php" class="nav-item nav-takeorders"><span class='icon-field'><i class="fa fa-list-ol "></i></span> Tomar Ordenes</a>
				<?php if($_SESSION['login_type'] == 1): ?>

				<div class="mx-2 text-white">Master List</div>
				<a href="index.php?page=categories" class="nav-item nav-categories"><span class='icon-field'><i class="fa fa-list-alt "></i></span> Categorias</a>
				<a href="index.php?page=products" class="nav-item nav-products"><span class='icon-field'><i class="fa fa-th-list "></i></span> Productos</a>
				<?php endif; ?>
				<div class="mx-2 text-white">Reportes</div>
				<a href="index.php?page=sales_report" class="nav-item nav-sales_report"><span class='icon-field'><i class="fa fa-th-list"></i></span> Reportes de ventas</a>
				<?php if($_SESSION['login_type'] == 1 || $_SESSION['login_type'] == 3): ?>
				<div class="mx-2 text-white">Systems</div>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users "></i></span> Usuarios</a>
				<!-- <a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i class="fa fa-cogs"></i></span> Opciones del sistema</a> -->
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav_collapse').click(function(){
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
