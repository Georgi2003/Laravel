

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('log'); ?>
	<form method="post" action = "./registerEmployee"> 
    	<?php echo e(csrf_field()); ?>

		<input type = "text" name = "first_name" placeholder = "Въведете име">
		<br>
		<input type = "text" name = "last_name" placeholder = "Въведете фамилия">
		<br>
		<input type = "number" name = "phone" placeholder = "Въведете телефон">
		<br>
		<input type = "text" name = "address" placeholder = "Въведете адрес">
		<br>
		<input type = "text" name = "job_title" placeholder = "Въведете длъжност">
		<br>
		<input type = "submit" name = "submit" value="Запази">	
	</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\Laravel\resources\views/employees/registerEmployee.blade.php ENDPATH**/ ?>