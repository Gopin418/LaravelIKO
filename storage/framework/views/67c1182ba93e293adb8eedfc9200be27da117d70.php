<?php $__env->startSection('content-header'); ?>
Job Safety Analysis
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jenis'); ?>
JSA
<?php $__env->stopSection(); ?>


<?php $__env->startSection('approved-datatable'); ?>
<?php if( $JSA_approved == 0 ): ?>
<div class="box-body">
    <p>Tidak ada Data JSA Tersedia</p>
</div>
<?php else: ?>
<tr>
    <th>Nama Kontraktor</th>
    <th>Nama Pekerjaan</th>
    <th>Jenis Pekerjaan</th>
    <th>Lokasi Lokasi</th>
    <th>Tanggal Mulai</th>
    <th>Tanggal Selesai</th>
    <th></th>
</tr>
<?php endif; ?>
<?php $__currentLoopData = $iko; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataIKO): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($dataIKO->nama_kontraktor); ?></td>
        <td><?php echo e($dataIKO->nama_pekerjaan); ?></td>
        <td><?php echo e($dataIKO->jenis); ?></td>
        <td><?php echo e('Nutrifood ' . $dataIKO->lokasi . ', ' . $dataIKO->area); ?></td>
        <td><?php echo e($dataIKO->tgl_mulai); ?></td>
        <td><?php echo e($dataIKO->tgl_selesai); ?></td>
        <td>
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-default<?php echo e($dataIKO->id); ?>">Detail</button>
        </td>
    </tr>

    
    <div class="modal fade" role="dialog" id="modal-default<?php echo e($dataIKO->id); ?>">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Detail JSA <?php echo e($dataIKO->nama_kontraktor); ?></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-5" style="border-right: 1px solid #ddd">
                                
                                
                                <div class="box text-muted" style="font-size: 1.2em; font-style: 'Verdana'; box-shadow: none;">
                                    <div class="box-header bg-gray"><span class="text-muted"><?php echo e($dataIKO->id); ?>/ JSA / 2018</span></div>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Nama Kontraktor : <p class="pull-right"><?php echo e($dataIKO->nama_kontraktor); ?></p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Nama Pekerjaan : <p class="pull-right"><?php echo e($dataIKO->nama_pekerjaan); ?></p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Jenis Pekerjaan : <p class="pull-right"><?php echo e($dataIKO->jenis); ?></p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Lokasi Pekerjaan : <p class="pull-right"><?php echo e('Nutrifood ' . $dataIKO->lokasi); ?></p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Tanggal Mulai : <p class="pull-right"><?php echo e($dataIKO->tgl_mulai); ?></p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Tanggal Selesai : <p class="pull-right"><?php echo e($dataIKO->tgl_selesai); ?></p>
                                            </div>
                                        </div><br>
                                        Deskripsi Pekerjaan
                                            <br>
                                        <p><?php echo e($dataIKO->deskripsi); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="box" style="box-shadow:none">
                                    <div class="box-header bg-gray " style="font-size:1.2em">
                                        <span class="text-muted">DETAILS</span>
                                    </div>
                                    <div class="box-body">
                                        <?php $__currentLoopData = explode(',', $dataIKO->aktivitas); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detilJSA): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <?php echo e('Aktivitas ' . $dataIKO->id); ?>

                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Nama Aktivitas : <p class="pull-right"><?php echo e($detilJSA); ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Potensi Bahaya : 
                                                <div dir="rtl">
                                                    <ul>
                                                        <?php $__currentLoopData = explode(',', $dataIKO->potensi_bahaya); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $potensi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li><?php echo e($potensi); ?></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Pengendalian Bahaya :
                                                <div dir="rtl">
                                                    <ul>
                                                        <?php $__currentLoopData = explode(',', $dataIKO->pengendalian_bahaya); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengendalian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li><?php echo e($pengendalian); ?></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Penanggung Jawab : <p class="pull-right"><?php echo e($dataIKO->penanggung_jawab); ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Keterangan : <p class="pull-right"><?php echo e($dataIKO->keterangan); ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.approved', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>