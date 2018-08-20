<?php $__env->startSection('jenis'); ?>
IPB
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pending-datatable'); ?>
  <?php if( $IPB_pending == 0 ): ?>
  <div class="box-body">
      <p>Tidak ada IPB yang sedang menunggu persetujuan</p>
  </div>
  <?php else: ?>
  <tr>
    <th>No IKO</th>
    <th>Nama Kontraktor</th>
    <th>Nama Pekerjaan</th>
    <th>Jenis Pekerjaan</th>
    <th>Lokasi Pekerjaan</th>
    <th>Jenis Pekerjaan Berbahaya</th>
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
      <td>
        <ul>
          <?php $__currentLoopData = explode(' ', $ipb->pekerjaan_berbahaya); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($jenis); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </td>
      <td>
        <button type="button" class="btn btn-primary btn-xs">Detail</button>
        <button type="button" class="btn btn-success btn-xs">Approve</button>
      </td>
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template.pending', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>