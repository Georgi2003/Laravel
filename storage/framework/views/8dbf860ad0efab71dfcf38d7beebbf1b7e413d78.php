

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('log'); ?>
	<form method="post" action = "./delete"> 
    	<?php echo e(csrf_field()); ?>

		<input type = "password" name = "id" placeholder = "Въведете id">
		<br>
		<input type = "submit" name = "submit">	
	</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\Laravel\resources\views/employees/deleteEmployees.blade.php ENDPATH**/ ?>