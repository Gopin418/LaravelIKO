<?php $__env->startSection('content-header'); ?>
Dashboard Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header-description'); ?>
<?php echo e(Auth::user()->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="row">
    
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?php echo e($jumlah); ?></h3>

                <p><?php echo e($IKO_pending . ' Pending, ' . $IKO_approved . ' Approved'); ?></p>
            </div>
            <div class="icon">
                <i class="fa fa-cogs"></i>
            </div>
            <a href="/admin/IKO/approved" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-blue">
            <div class="inner">
                <h3><?php echo e($jumlahJSA); ?></h3>

                <p><?php echo e($JSA_pending . ' Pending, ' . $JSA_approved . ' Approved'); ?></p>
            </div>
            <div class="icon">
                <i class="fa fa-plus"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?php echo e($jumlahADL); ?></h3>
                
                <p><?php echo e($ADL_pending . ' Pending, ' . $ADL_approved . ' Approved'); ?></p>
            </div>
            <div class="icon">
                <i class="fa fa-envira"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
            <div class="inner">
                <h3> <?php echo e($jumlahIPB); ?> </h3>

                <p><?php echo e($IPB_pending . ' Pending, ' . $IPB_approved . ' Approved'); ?></p>
            </div>
            <div class="icon">
                <i class="fa fa-fire"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

</div>




<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">On-going</h3>
            </div>
            
            <?php if( $ongoingStatus == 0 ): ?>
            <div class="box-body">
                <p>&nbsp;Tidak ada Pekerjaan Kontraktor yang sedang berjalan</p>
            </div>
            <?php else: ?>
            <div class="box-body table-responsive no-padding">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Nama Kontraktor</th>
                        <th>Nama Pekerjaan</th>
                        <th>Jenis Pekerjaan</th>
                        <th>Dateline</th>
                        <th>Penanggung Jawab Kontraktor</th>
                        <th>No Telp</th>
                        <th>Penanggung Jawab Project</th>
                        <th>No Telp </th>
                    </tr>
                    <?php $__currentLoopData = $ongoing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($datas->nama_kontraktor); ?></td>
                        <td><?php echo e($datas->nama_pekerjaan); ?></td>
                        <td><?php echo e($datas->jenis); ?></td>
                        <td><?php echo e($datas->tgl_selesai); ?></td>
                        <td><?php echo e($datas->pj_kontraktor); ?></td>
                        <td><?php echo e($datas->telp_pj_kontraktor); ?></td>
                        <td><?php echo e($datas->pj_project); ?></td>
                        <td><?php echo e($datas->telp_pj_project); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                <div class="box-footer pull-right">
                    <?php echo e($ongoing->links()); ?>

                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>