

<?php $__env->startSection('title', 'Employees'); ?>

<?php $__env->startSection('log'); ?>
<h1><?php echo e($message); ?></h1>
<table align="center" style="border:1px solid black;">
	<thead>
		<tr>
			<th>№</th>
			<th>Име</th>
			<th>Телефон</th>
			<th>Адрес</th>
			<th>Длъжност</th>
			<th>Изтрий служител</th>
			<th>Актуализирай</th>
		</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $allEmployees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($num++); ?></td>
			<td><?php echo e($employee->first_name); ?> <?php echo e($employee->last_name); ?></td>
			<td><?php echo e($employee->phone); ?></td>
			<td><?php echo e($employee->address); ?></td>
			<td><?php echo e($employee->job_title); ?></td>
			<td>
				<form method="post" action="<?php echo e(url('employees/')); ?>/<?php echo e($employee->id); ?>">
					<?php echo csrf_field(); ?>
					<?php echo method_field('DELETE'); ?>
					<button style = "text-decoration: none; color: black;" href = "">Изтрий служител</button>
				</form> 
			</td>
			<td><button><a style = "text-decoration: none; color: black;" href = "<?php echo e(url('employees')); ?>/<?php echo e($employee->id); ?>/edit">Актуализирай</a></button></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>
	<button><a style = "text-decoration: none; color: black;" href = "<?php echo e(url('employees')); ?>/create">Добави нов служител</a></button>

	<?php if($log == true): ?>
		<button><a style = "text-decoration: none; color: black;" href = "<?php echo e(url('update')); ?>">Актуализация</a></button><br><br>
	<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\Laravel\resources\views/employees/index.blade.php ENDPATH**/ ?>