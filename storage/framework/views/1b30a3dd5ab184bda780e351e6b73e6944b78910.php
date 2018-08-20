<?php $__env->startSection('jenis'); ?>
IPB
<?php $__env->stopSection(); ?>

<?php $__env->startSection('approved-datatable'); ?>
  <?php if( $IPB_approved == 0 ): ?>
  <div class="box-body">
      <p>Tidak ada data IPB yang tersedia</p>
  </div>
  <?php else: ?>
  <tr>
    <th>No IKO</th>
    <th>Nama Kontraktor</th>
    <th>Nama Pekerjaan</th>
    <th>Jenis Pekerjaan</th>
    <th>Lokasi Pekerjaan</th>
    <th>Tanggal Mulai</th>
    <th>Tanggal Selesai</th>
    <th></th>
  </tr>
  <?php endif; ?>
  <?php $__currentLoopData = $ipb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ipb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($ipb->id . ' / IKO / 2018'); ?></td>
      <td><?php echo e($ipb->nama_kontraktor); ?></td>
      <td><?php echo e($ipb->nama_pekerjaan); ?></td>
      <td><?php echo e($ipb->jenis); ?></td>
      <td><?php echo e('Nutrifood ' . $ipb->lokasi . ', ' . $ipb->area); ?></td>
      <td><?php echo e($ipb->tgl_mulai); ?></td>
      <td><?php echo e($ipb->tgl_selesai); ?></td>
      <td>
        <button type="button" class="btn btn-primary btn-xs">Detail</button>
      </td>
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template.approved', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>