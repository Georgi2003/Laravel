

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('log'); ?>
	<form method="post" action = "./update/1"> 
    	<?php echo e(csrf_field()); ?>

		<h3>Актуализирайте данните си</h3>
		<input type = "number" name = "phone" placeholder = "Въведете телефон">
		<br>
		<input type = "text" name = "address" placeholder = "Въведете адрес">
		<br>
		<input type = "text" name = "job_title" placeholder = "Въведете длъжност">
		<br>
		<input type = "submit" name = "submit" value = "Актуализирай">	
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\Laravel\resources\views/auth/update.blade.php ENDPATH**/ ?>