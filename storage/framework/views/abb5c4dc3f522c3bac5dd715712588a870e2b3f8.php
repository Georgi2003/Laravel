<!DOCTYPE HTML>  
<html>	
	<head>
		<title>Магазин</title>
		<link rel = "stylesheet" href = "css/default.css"></link>
		
		<link href = "img/avatar.jpg" rel = "shortcut icon" type="image/x-icon">
	</head>

	<body>
		<div class = "header">
			<h1><?php echo e($nameTitle); ?></h1>
		</div>  
		<ul>		
			<li style = "float: right;"><a href = "<?php echo e(url('account')); ?>">Информация</a></li>
			<li style = "float: right;"><a href = "<?php echo e(url('employees')); ?>">Служители</a></li>			
			<li style = "float: right;"><a href = "<?php echo e(url('register')); ?>">Регистрация</a></li>
			<li style = "float: right;"><a href = "<?php echo e(url('login')); ?>">Вход</a></li>
		</ul>
		<br>
		<img src = "img/avatar_accaunt.gif" style="width: 300px; height:300px"> 
	    <div class="container">
	        <?php echo $__env->yieldContent('log'); ?>
	    </div>
	</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\Laravel-master\resources\views/layout/default.blade.php ENDPATH**/ ?>