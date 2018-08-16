<?php $__env->startSection('content-header'); ?>
Admin List
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content-header-description'); ?>
<?php echo e(Auth::user()->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <?php if(Auth::user()->hasRole('Admin Developer')): ?>
        <li>User Management</li>
        <li class="active">Users</li>
    <?php elseif(Auth::user()->hasRole('Admin Biasa') || Auth::user()->hasRole('Admin Utama')): ?>
        <li>Users</li>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box box-default">
            <div class="box-header">
                <div class="box-title">
                    <h4>User List</h4>
                </div>
                <?php if(Auth::user()->hasRole('Admin Developer') || Auth::user()->hasRole('Admin Utama')): ?>
                    <a href="/admin/add"><button class="btn btn-success pull-right">Add Admin</button></a>
                <?php elseif(Auth::user()->hasRole('Admin Biasa')): ?>
                <?php endif; ?>
            </div>

            <div class="box-body">
                <table class="table table-borderless table-hover table-striped">
                    <tr>
                        <th>Nama User</th>
                        <th>Email User</th>
                        <th>Role User</th>
                        <th>Deskripsi Role</th>
                        <th>Action</th>
                    </tr>
                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lists): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <tr>
                        <td><?php echo e($lists->name); ?></td>
                        <td><?php echo e($lists->email); ?></td>
                        <td><?php echo e($lists->role_name); ?></td>
                        <td><?php echo e($lists->description); ?></td>
                        <td>
                            <form action="/admin/list/<?php echo e($lists->id); ?>" method="post">
                                <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#detail<?php echo e($lists->id); ?>">Detail</button>
                                <?php if( Auth::user()->hasRole('Admin Developer') || Auth::user()->hasRole('Admin Utama')): ?>
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#edit<?php echo e($lists->id); ?>">Edit</button>
                                <input type="submit" value="Delete" class="btn btn-danger btn-xs">
                                <?php elseif(Auth::user()->hasRole('Admin Biasa')): ?>

                                <?php endif; ?>
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="_method" value="DELETE">
                            </form>
                        </td>
                    </tr>
    
    <div class="modal fade" role="dialog" id="edit<?php echo e($lists->id); ?>">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Edit Admin <?php echo e($lists->name); ?></h4>
                </div>
                <div class="modal-body">
                    <form action="/admin/list/<?php echo e($lists->id); ?>" method="post">
                        <div class="form-group">
                            <label for="name">Nama Admin</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="e.g Alvin Ardiansyah" value="<?php echo e($lists->name); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Admin</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="e.g example@mail.com" value="<?php echo e($lists->email); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="text" name="password" id="password" class="form-control" placeholder="must contain 'hse'" required>
                        </div>
                        <div class="form-group">
                            <label for="roles">Admin Role</label>
                            <br>
                            <select class="form-control select2" name="roles">
                                <option value="2">Admin Biasa</option>
                                <option value="1">Admin Utama</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary col-xs-4 pull-right" value="Save">
                </div>
                <input type="hidden" name="_method" value="PUT">
                <?php echo e(csrf_field()); ?>

                </form>
            </div>
        </div>
    </div>
    
    <div class="modal fade" role="dialog" id="detail<?php echo e($lists->id); ?>">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Detail Admin <?php echo e($lists->name); ?></h4>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        
                    </div>
                </div>
            </div>
        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>