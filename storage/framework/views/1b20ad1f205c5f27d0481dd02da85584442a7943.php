

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('log'); ?>
	<form method = "POST" action = "./login"> 	  			
		<?php echo e(csrf_field()); ?>

		<input type = "text" name = "username" placeholder = "Потребителско име">
		<br>
		<input type = "password" name = "password" placeholder = "Парола"> 	
		<br>	 	
		<input type = "submit" name = "submit">
	 	<br>
	</form>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\proj\resources\views/auth/login.blade.php ENDPATH**/ ?>