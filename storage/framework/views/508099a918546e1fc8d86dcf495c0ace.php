

<?php $__env->startSection('content'); ?>

<style>

  .uper {

    margin-top: 40px;

  }

</style>

<div class="uper">

  <?php if(session()->get('success')): ?>

    <div class="alert alert-success">

      <?php echo e(session()->get('success')); ?>  

    </div><br />

  <?php endif; ?>


<a href="<?php echo e(route('hotel.create')); ?>" class="btn btn-success">ADD</a>


  <table class="table table-striped">

    <thead>

        <tr>

          <td>ID</td>

          <td>Name</td>

          <td>City</td>
		  
          <td>Rooms</td>
		  
          <td>Apartments</td>

          <td colspan="2">Action</td>

        </tr>

    </thead>

    <tbody>

        <?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>

            <td><?php echo e($hotel->id); ?></td>

            <td><?php echo e($hotel->name); ?></td>

            <td><?php echo e($hotel->city); ?></td>
			
            <td><?php echo e($hotel->rooms); ?></td>
			
            <td><?php echo e($hotel->apart); ?></td>

            <td><a href="<?php echo e(route('hotel.edit', $hotel->id)); ?>" class="btn btn-primary">Edit</a></td>

            <td>

                <form action="<?php echo e(route('hotel.destroy', $hotel->id)); ?>" method="post" onsubmit="return confirm('The record will be deleted');">

                  <?php echo csrf_field(); ?>

                  <?php echo method_field('DELETE'); ?>

                  <button class="btn btn-danger" type="submit">Delete</button>

                </form>

            </td>

        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>

  </table>
  <?php echo e($hotels->links()); ?>


<div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hotel\resources\views/index.blade.php ENDPATH**/ ?>