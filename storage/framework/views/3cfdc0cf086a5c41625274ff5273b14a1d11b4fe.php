<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('log'); ?>
	<form method = "POST" action = "./login"> 	  			
		<?php echo e(csrf_field()); ?>

		<input type = "text" name = "first_name" placeholder = "Потребителско име">
		<br>
		<input type = "text" name = "last_name" placeholder = "Парола"> 	
		<br>	 	
		<input type = "submit" name = "submit">
		<br>
	</form>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\Laravel-master\resources\views/auth/login.blade.php ENDPATH**/ ?>