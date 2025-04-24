

<?php $__env->startSection('content'); ?>

<style>

  .uper {

    margin-top: 40px;

  }

</style>

<div class="card uper">

  <div class="card-header">

    Add Hotel Data

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

      <form method="post" action="<?php echo e(route('hotel.store')); ?>">

          <div class="form-group">

              <?php echo csrf_field(); ?>

              <label for="fn">Hotel Name:</label>

              <input type="text" class="form-control" name="name"/>

          </div>

          <div class="form-group">

              <label for="name">City:</label>

              <input type="text" class="form-control" name="city"/>

          </div>
		  
		  <div class="form-group">

              <label for="name">Rooms:</label>

              <input type="text" class="form-control" name="rooms"/>

          </div>
		  
		  <div class="form-group">

              <label for="name">Apartment:</label>

              <input type="number" id="tentacles"class="form-control" name="apart" min="0" max="100"/>
			  

          </div>

			<br>
          <button type="submit" class="btn btn-primary">Add Hotel</button>

      </form>

  </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vesak\Desktop\hotel\resources\views/create.blade.php ENDPATH**/ ?>