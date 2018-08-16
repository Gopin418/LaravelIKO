<?php $__env->startSection('breadcrumb'); ?>
<li><?php echo $__env->yieldContent('jenis'); ?></li>
<li class="active">Pending</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header-description'); ?>
Pending Form waiting for Approvment
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pending Permission</h3>
            </div>

            <div class="box-body  table-responsive  no-padding">

                

                <table class="table table-striped table-hover">
                    <?php echo $__env->yieldContent('pending-datatable'); ?>
                </table>
                    
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>