<?php $__env->startSection('content-header'); ?>
Role List
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header-description'); ?>
<?php echo e(Auth::user()->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<li>User Management</li>
<li class="active">Roles</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box box-solid box-default">
            <div class="box-header">
                <div class="box-title">User List</div>
            </div>

            <div class="box-body">
                <table class="table table-borderless table-hover table-striped">
                    <tr>
                        <th>Id Role</th>
                        <th>Nama Role</th>
                        <th>Deskripsi Role</th>
                    </tr>
                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lists): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($lists->id); ?></td>
                        <td><?php echo e($lists->role_name); ?></td>
                        <td><?php echo e($lists->description); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>