<?php $__env->startSection('content-header'); ?>
Izin Kerja Kontraktor
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <?php if(Auth::user()->hasRole('Admin Utama') || Auth::user()->hasRole('Admin Developer')): ?>
        <li><?php echo $__env->yieldContent('jenis'); ?></li>
        <li class="active">Approved</li>
    <?php elseif(Auth::user()->hasRole('Admin Biasa')): ?>
        <li class="active"><?php echo $__env->yieldContent('jenis'); ?></li>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Approved Contract</h3>
            </div>

            <div class="box-body table-responsive no-padding">

                <table class="table table-striped table-hover">
                    <?php echo $__env->yieldContent('approved-datatable'); ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>