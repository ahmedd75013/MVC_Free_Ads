<?php $__env->startSection('content'); ?>

<div class="ui two column grid">
<?php $__empty_1 = true; $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
  <div class="column">
    <div class="ui raised segment">
      <a class="ui red ribbon label"><?php echo e($post->category->image); ?></a>
      <span><?php echo e($post->image); ?></span>
      <div class="ui raised segment">
      <a class="ui red ribbon label"><?php echo e($post->category->title); ?></a>
      <span><?php echo e($post->title); ?></span>

      <div class="ui raised segment">
      <a class="ui red ribbon label"><?php echo e($post->category->price); ?></a>
      <span><?php echo e($post->price); ?></span>
      
      <div class="ui raised segment">
      <a class="ui red ribbon label"><?php echo e($post->category->description); ?></a>
      <span><?php echo e($post->price); ?></span>
      
      <p class="mt-3">
      
      <?php echo e($post-> price); ?>

      </p>
      
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
 <div class= "ui icon massage mt-5">
 <i class="info icon"></i>
 <div class="content">
 <div class="header">
 pas d'article!!
 </div>
 <p>
 desole pas d'article trouver
 </p>
 </div>
 </div>

  <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/chaieb/delivery/MVC_Free_Ads/freeads/resources/views/posts.blade.php ENDPATH**/ ?>