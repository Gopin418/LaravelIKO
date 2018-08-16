<?php $__env->startSection('content-header'); ?>
Approval Utility
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<li class="active">Approval Utility</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row mb-5">

  
  <div class="col-xs-6">
    <div class="box">

      
      <div class="box-header">
        <h3>Air</h3>
      </div>

      
      <div class="box-body">
        <form action="/admin/utility/air" method="post">
          <?php echo e(csrf_field()); ?>


          
          <div class="form-group">
            <label for="nama_pj">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="e.g Alvin Ardiansyah" value="<?php echo e($air->name); ?>">
          </div>

          
          <div class="form-group">
            <label for="email_pj">Email</label>
            <input type="email" name="email_pj" class="form-control" placeholder="e.g alvinardiansyah@example.com" value="<?php echo e($air->email); ?>">
          </div>

          
          <div class="form-group">
            <label for="telp_pj">No. Telp</label>
            <input type="text" name="telp_pj" class="form-control" placeholder="e.g 08983201224" value="<?php echo e($air->telp); ?>">
          </div>

          
          <div class="form-group">
              <label for="departement">Departement</label>
              <select class="form-control select2" name="departement">
                  <?php $__currentLoopData = $utility; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $departement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($departement->departement); ?>"
                      <?php if($departement->departement == $air->departement): ?>
                        selected="selected"
                      <?php endif; ?>
                      >
                        <?php echo e($departement->departement); ?>

                      </option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
          </div>

          
          <div class="form-group">
            <input type="submit" name="submit" value="Save" class="btn btn-primary col-xs-2">
          </div>

        </form>
      </div>

    </div>
  </div>

  
  <div class="col-xs-6">
    <div class="box">

      
      <div class="box-header">
        <h3>Angin</h3>
      </div>

      
      <div class="box-body">
        <form action="/admin/utility/angin" method="post">
          <?php echo e(csrf_field()); ?>


          
          <div class="form-group">
            <label for="nama_pj">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="e.g Alvin Ardiansyah" value="<?php echo e($angin->name); ?>">
          </div>

          
          <div class="form-group">
            <label for="email_pj">Email</label>
            <input type="email" name="email_pj" class="form-control" placeholder="e.g alvinardiansyah@example.com" value="<?php echo e($angin->email); ?>">
          </div>

          
          <div class="form-group">
            <label for="telp_pj">No. Telp</label>
            <input type="text" name="telp_pj" class="form-control" placeholder="e.g 08983201224" value="<?php echo e($angin->telp); ?>">
          </div>

          
          <div class="form-group">
              <label for="departement">Departement</label>
              <select class="form-control select2" name="departement">
                  <?php $__currentLoopData = $utility; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $departement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($departement->departement); ?>"
                      <?php if($departement->departement == $angin->departement): ?>
                        selected=="selected"
                      <?php endif; ?>
                      >
                      <?php echo e($departement->departement); ?>

                    </option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
          </div>

          
          <div class="form-group">
            <input type="submit" name="submit" value="Save" class="btn btn-primary col-xs-2">
          </div>

        </form>
      </div>

    </div>
  </div>

</div>

<div class="row">

  
  <div class="col-xs-6">
    <div class="box">

      
      <div class="box-header">
        <h3>Listrik</h3>
      </div>

      
      <div class="box-body">
        <form action="/admin/utility/listrik" method="post">
          <?php echo e(csrf_field()); ?>


          
          <div class="form-group">
            <label for="nama_pj">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="e.g Alvin Ardiansyah" value="<?php echo e($listrik->name); ?>">
          </div>

          
          <div class="form-group">
            <label for="email_pj">Email</label>
            <input type="email" name="email_pj" class="form-control" placeholder="e.g alvinardiansyah@example.com" value="<?php echo e($listrik->email); ?>">
          </div>

          
          <div class="form-group">
            <label for="telp_pj">No. Telp</label>
            <input type="text" name="telp_pj" class="form-control" placeholder="e.g 08983201224" value="<?php echo e($listrik->telp); ?>">
          </div>

          
          <div class="form-group">
              <label for="departement">Departement</label>
              <select class="form-control select2" name="departement">
                  <?php $__currentLoopData = $utility; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $departement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($departement->departement); ?>"
                      <?php if($departement->departement == $listrik->departement): ?>
                        selected="selected"
                      <?php endif; ?>
                      >
                      <?php echo e($departement->departement); ?>

                    </option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
          </div>

          
          <div class="form-group">
            <input type="submit" name="submit" value="Save" class="btn btn-primary col-xs-2">
          </div>

        </form>
      </div>

    </div>
  </div>

  
  <div class="col-xs-6">
    <div class="box">

      
      <div class="box-header">
        <h3>Steam</h3>
      </div>

      
      <div class="box-body">
        <form action="/admin/utility/steam" method="post">
          <?php echo e(csrf_field()); ?>


          
          <div class="form-group">
            <label for="nama_pj">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="e.g Alvin Ardiansyah" value="<?php echo e($steam->name); ?>">
          </div>

          
          <div class="form-group">
            <label for="email_pj">Email</label>
            <input type="email" name="email_pj" class="form-control" placeholder="e.g alvinardiansyah@example.com" value="<?php echo e($steam->email); ?>">
          </div>

          
          <div class="form-group">
            <label for="telp_pj">No. Telp</label>
            <input type="text" name="telp_pj" class="form-control" placeholder="e.g 08983201224" value="<?php echo e($steam->telp); ?>">
          </div>

          
          <div class="form-group">
              <label for="departement">Departement</label>
              <select class="form-control select2" name="departement">
                  <?php $__currentLoopData = $utility; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $departement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($departement->departement); ?>"
                      <?php if($departement->departement == $steam->departement): ?>
                        selected="selected"
                      <?php endif; ?>
                      >
                      <?php echo e($departement->departement); ?>

                    </option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
          </div>

          
          <div class="form-group">
            <input type="submit" name="submit" value="Save" class="btn btn-primary col-xs-2">
          </div>

        </form>
      </div>

    </div>
  </div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>