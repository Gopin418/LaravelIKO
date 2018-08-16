<?php $__env->startSection('jenis'); ?>
IKO
<?php $__env->stopSection(); ?>

<?php $__env->startSection('approved-datatable'); ?>
    <?php if( $IKO_approved == 0): ?>
    <div class="box-body">
        <p>Tidak ada Data IKO Tersedia</p>
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
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($datas->nama_kontraktor); ?></td>
        <td><?php echo e($datas->nama_pekerjaan); ?></td>
        <td><?php echo e($datas->jenis); ?></td>
        <td><?php echo e('Nutrifood ' . $datas->lokasi . ', ' . $datas->area); ?></td>
        <td><?php echo e($datas->tgl_mulai); ?></td>
        <td><?php echo e($datas->tgl_selesai); ?></td>
        <td>
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-default<?php echo e($datas->id); ?>">Detail</button>
        </td>
    </tr>
    <div class="modal fade" role="dialog" id="modal-default<?php echo e($datas->id); ?>">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Detail IKO <?php echo e($datas->nama_kontraktor); ?></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-5" style="border-right: 1px solid #ddd">


                                <div class="box text-muted" style="font-size: 1.2em; font-style: 'Verdana'; box-shadow: none;">
                                    <div class="box-header bg-gray"><span class="text-muted"><?php echo e($datas->id); ?>/IKO/2018</span></div>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Nama Kontraktor : <p class="pull-right"><?php echo e($datas->nama_kontraktor); ?></p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Nama Pekerjaan : <p class="pull-right"><?php echo e($datas->nama_pekerjaan); ?></p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Jenis Pekerjaan : <p class="pull-right"><?php echo e($datas->jenis); ?></p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Lokasi Pekerjaan : <p class="pull-right"><?php echo e('Nutrifood ' . $datas->lokasi); ?></p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Tanggal Mulai : <p class="pull-right"><?php echo e($datas->tgl_mulai); ?></p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Tanggal Selesai : <p class="pull-right"><?php echo e($datas->tgl_selesai); ?></p>
                                            </div>
                                        </div><br>
                                        Deskripsi Pekerjaan
                                            <br>
                                        <p><?php echo e($datas->deskripsi); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="box" style="box-shadow:none">
                                    <div class="box-header bg-gray " style="font-size:1.2em">
                                        <span class="text-muted">DETAILS</span>
                                    </div>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Penanggung Jawab Kontraktor : <p class="pull-right"><?php echo e($datas->pj_kontraktor); ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                No. Telp : <b><p class="pull-right"><?php echo e($datas->telp_pj_kontraktor); ?></p></b>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Penanggung Jawab Lapangan : <p class="pull-right"><?php echo e($datas->pj_lapangan); ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                No. Telp : <b><p class="pull-right"><?php echo e($datas->telp_pj_lapangan); ?></p></b>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Penanggung Jawab Project : <p class="pull-right"><?php echo e($datas->pj_project); ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                No. Telp : <b><p class="pull-right"><?php echo e($datas->telp_pj_project); ?></p></b>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Bekerja pada Area GMP : <p class="pull-right"><?php echo e($datas->area_gmp); ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Barang yang disimpan :
                                                <div dir="rtl">
                                                    <ul>
                                                        <?php $__currentLoopData = explode(',', $datas->brg_yang_disimpan); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li><?php echo e($data); ?></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Lokasi Gudang : <p class="pull-right"><?php echo e($datas->lokasi_gudang); ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Jenis Pekerjaan Berbahaya :
                                                <div dir="rtl">
                                                    <ul>
                                                        <?php $__currentLoopData = explode(',', $datas->pekerjaan_berbahaya); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li><?php echo e($data); ?></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Dokumen Lampiran :
                                                <div dir="rtl">
                                                    <ul>
                                                        <?php $__currentLoopData = explode(',', $datas->doc_lampiran); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li><?php echo e($data); ?></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                Kebutuhan Utility :
                                                <div dir="rtl">
                                                    <ul>
                                                        <?php $__currentLoopData = explode(',', $datas->utility); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li><?php echo e($data); ?></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Sistem yang akan Terganggu :
                                                <div dir="rtl">
                                                    <ul>
                                                        <?php $__currentLoopData = explode(',', $datas->sistem_terganggu); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li><?php echo e($data); ?></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dissmiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template.approved', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>