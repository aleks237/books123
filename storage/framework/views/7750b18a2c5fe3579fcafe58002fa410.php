


<?php $__env->startSection('content'); ?>

<style>

  .uper {

    margin-top: 40px;

  }

</style>

<div class="card uper">

  <div class="card-header">

    Edit Hotel Data

  </div>

  <div class="card-body">

    <?php if($errors->any()): ?>

      <div class="alert alert-danger">

        <ul>

            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <li><?php echo e($error); ?></li>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>

      </div><br />

    <?php endif; ?>

      <form method="post" action="<?php echo e(route('hotel.update', $hotel->id)); ?>" onsubmit="return confirm('The record will be updated');">

          <div class="form-group">

              <?php echo csrf_field(); ?>

              <?php echo method_field('PATCH'); ?>

              <label for="name">Hotel Name:</label>

              <input type="text" class="form-control" name="name" value="<?php echo e($hotel->name); ?>"/>

          </div>

          <div class="form-group">

              <label for="city">City:</label>

              <input type="text" class="form-control" name="city" value="<?php echo e($hotel->city); ?>"/>

          </div>
		  
		  <div class="form-group">

              <label for="rooms">Rooms:</label>

              <input type="text" class="form-control" name="rooms" value="<?php echo e($hotel->rooms); ?>"/>

          </div>
		  
		  <div class="form-group">

              <label for="apart">Apartments:</label>

              <input type="number" id="tentacles" class="form-control" name="apart" min="0" max="100" value="<?php echo e($hotel->apart); ?>"/>

          </div>
			<br>
          <button type="submit" class="btn btn-primary">Update Data</button>

      </form>

  </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vesak\Downloads\hotel\resources\views/edit.blade.php ENDPATH**/ ?>