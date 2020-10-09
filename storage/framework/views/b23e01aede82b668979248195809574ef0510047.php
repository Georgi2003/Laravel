

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('log'); ?>
	<form method="post" action = "/employees/<?php echo e($employee->id); ?>"> 
    	<?php echo e(csrf_field()); ?>

    	<?php echo method_field('PUT'); ?>

    	Актуализирай телефон:
    	<br>
		<input type = "number" name = "phone" placeholder = "Въведете телефон" value="<?php echo e($employee->phone); ?>">
		<br>
		Актуализирай адрес:
		<br>
		<input type = "text" name = "address" placeholder = "Въведете адрес" value="<?php echo e($employee->address); ?>">
		<br>
		Актуализирай длъжност:
		<br>
		<input type = "text" name = "job_title" placeholder = "Въведете длъжност" value="<?php echo e($employee->job_title); ?>">
		<br>
		<input type = "submit" name = "submit" value="Запази">	
	</form>

	<?php if($errors->any()): ?>
	    <div class="alert alert-danger">
	        <ul id = "error">
	            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                <li>
	                	<h3  style="text-align: center;"><?php echo e($error); ?></h3>
	                </li>
	            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	        </ul>
	    </div>
	<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\Laravel\resources\views/employees/edit.blade.php ENDPATH**/ ?>