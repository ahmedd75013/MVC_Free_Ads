<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    <img class="card-img-top" src="<?php echo e($value->image); ?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo e($value->title); ?></h5>
        <p class="card-text"><?php echo e($value->description); ?></p>
        <h3 class="card-title"><?php echo e($value->price); ?></h3>

        <a href ="<?php echo e(route('edit',$value->id)); ?>" class="btn btn-primary">
        <i class="fa fa-pencil">Modifier</i>
        </a>
        
        <a href ="#" class="btn btn-danger">
        <i class="fa fa-pencil">Supprime</i>
        </a>
   


        </a>
      </div>
    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo e($annonce->appends(request()->input())->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/chaieb/delivery/MVC_Free_Ads/freeads/resources/views/posts/search.blade.php ENDPATH**/ ?>