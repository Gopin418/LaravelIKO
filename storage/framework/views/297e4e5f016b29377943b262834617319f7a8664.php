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
        <form action="/admin/utility/air/<?php echo e($air->id); ?>" method="post">
          <?php echo e(csrf_field()); ?>


          
          <div class="form-group">
            <label for="nama_air">Nama</label>
            <input type="text" name="name_air" class="form-control" placeholder="e.g Alvin Ardiansyah" value="<?php echo e($air->name); ?>">
          </div>

          
          <div class="form-group">
            <label for="email_pj_air">Email</label>
            <input type="email" name="email_pj_air" class="form-control" placeholder="e.g alvinardiansyah@example.com" value="<?php echo e($air->email); ?>">
          </div>

          
          <div class="form-group">
            <label for="telp_pj_air">No. Telp</label>
            <input type="text" name="telp_pj_air" class="form-control" placeholder="e.g 08983201224" value="<?php echo e($air->telp); ?>">
          </div>

          
          <div class="form-group">
              <label for="departement_air">Departement</label>
              <select class="form-control select2" name="departement_air">
                  <?php $__currentLoopData = $departement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($dept->departement); ?>"
                      <?php if($dept->departement == $air->departement): ?>
                        selected="selected"
                      <?php endif; ?>
                      >
                        <?php echo e($dept->departement); ?>

                      </option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
          </div>

          
          <div class="form-group">
            <input type="hidden" name="_method" value="PUT">
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
        <form action="/admin/utility/angin/<?php echo e($angin->id); ?>" method="post">
          <?php echo e(csrf_field()); ?>


          
          <div class="form-group">
            <label for="nama_angin">Nama</label>
            <input type="text" name="name_angin" class="form-control" placeholder="e.g Alvin Ardiansyah" value="<?php echo e($angin->name); ?>">
          </div>

          
          <div class="form-group">
            <label for="email_pj_angin">Email</label>
            <input type="email" name="email_pj_angin" class="form-control" placeholder="e.g alvinardiansyah@example.com" value="<?php echo e($angin->email); ?>">
          </div>

          
          <div class="form-group">
            <label for="telp_pj_angin">No. Telp</label>
            <input type="text" name="telp_pj_angin" class="form-control" placeholder="e.g 08983201224" value="<?php echo e($angin->telp); ?>">
          </div>

          
          <div class="form-group">
              <label for="departement_angin">Departement</label>
              <select class="form-control select2" name="departement_angin">
                  <?php $__currentLoopData = $departement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($dept->departement); ?>"
                      <?php if($dept->departement == $angin->departement): ?>
                        selected=="selected"
                      <?php endif; ?>
                      >
                      <?php echo e($dept->departement); ?>

                    </option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
          </div>

          
          <div class="form-group">
            <input type="hidden" name="_method" value="PUT">
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
        <form action="/admin/utility/listrik/<?php echo e($listrik->id); ?>" method="post">
          <?php echo e(csrf_field()); ?>


          
          <div class="form-group">
            <label for="nama_listrik">Nama</label>
            <input type="text" name="name_listrik" class="form-control" placeholder="e.g Alvin Ardiansyah" value="<?php echo e($listrik->name); ?>">
          </div>

          
          <div class="form-group">
            <label for="email_pj_listrik">Email</label>
            <input type="email" name="email_pj_listrik" class="form-control" placeholder="e.g alvinardiansyah@example.com" value="<?php echo e($listrik->email); ?>">
          </div>

          
          <div class="form-group">
            <label for="telp_pj_listrik">No. Telp</label>
            <input type="text" name="telp_pj_listrik" class="form-control" placeholder="e.g 08983201224" value="<?php echo e($listrik->telp); ?>">
          </div>

          
          <div class="form-group">
              <label for="departement_listrik">Departement</label>
              <select class="form-control select2" name="departement_listrik">
                  <?php $__currentLoopData = $departement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($dept->departement); ?>"
                      <?php if($dept->departement == $listrik->departement): ?>
                        selected="selected"
                      <?php endif; ?>
                      >
                      <?php echo e($dept->departement); ?>

                    </option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
          </div>

          
          <div class="form-group">
            <input type="hidden" name="_method" value="PUT">
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
        <form action="/admin/utility/steam/<?php echo e($steam->id); ?>" method="post">
          <?php echo e(csrf_field()); ?>


          
          <div class="form-group">
            <label for="nama_steam">Nama</label>
            <input type="text" name="name_steam" class="form-control" placeholder="e.g Alvin Ardiansyah" value="<?php echo e($steam->name); ?>">
          </div>

          
          <div class="form-group">
            <label for="email_pj_steam">Email</label>
            <input type="email" name="email_pj_steam" class="form-control" placeholder="e.g alvinardiansyah@example.com" value="<?php echo e($steam->email); ?>">
          </div>

          
          <div class="form-group">
            <label for="telp_pj_steam">No. Telp</label>
            <input type="text" name="telp_pj_steam" class="form-control" placeholder="e.g 08983201224" value="<?php echo e($steam->telp); ?>">
          </div>

          
          <div class="form-group">
              <label for="departement_steam">Departement</label>
              <select class="form-control select2" name="departement_steam">
                  <?php $__currentLoopData = $departement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($dept->departement); ?>"
                      <?php if($dept->departement == $steam->departement): ?>
                        selected="selected"
                      <?php endif; ?>
                      >
                      <?php echo e($dept->departement); ?>

                    </option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
          </div>

          
          <div class="form-group">
            <input type="hidden" name="_method" value="PUT">
            <input type="submit" name="submit" value="Save" class="btn btn-primary col-xs-2">
          </div>

        </form>
      </div>

    </div>
  </div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>