<?php $__env->startSection('content'); ?>

<h1>Deposer une annonce</h1>

<hr>

<form method ="POST" action="<?php echo e(route('annonce.store')); ?>">
<?php echo csrf_field(); ?>
  <div class="form-check">
    <label for="title">Titre de l'annonce</label>
    <input type="text" class="form-control <?php echo e($errors->has('title') ? 'is-invalid' : ''); ?>" name="title" aria-describedby="title" >
    <?php if($errors->has('title')): ?>
    <span class="invalide-feedback"><?php echo e($errors->first('title')); ?></span>
    <?php endif; ?>
  </div>

  <div class="form-check">
    <label for="price">Prix</label>
    <input type="text" class="form-control  <?php echo e($errors->has('price') ? 'is-invalid' : ''); ?>" name="price" aria-describedby="title">
    <?php if($errors->has('title')): ?>
    <span class="invalide-feedback"><?php echo e($errors->first('price')); ?></span>
    <?php endif; ?>
  </div>

  <div class="form-check">
    <label for="image">Image</label>
    <input type="text" class="form-control <?php echo e($errors->has('image') ? 'is-invalid' : ''); ?> "name="image" aria-describedby="image">
    <?php if($errors->has('image')): ?>
    <span class="invalide-feedback"><?php echo e($errors->first('image')); ?></span>
    <?php endif; ?>
  </div>
  <br>
  <div class="form-check">
    <label for="description">description</label>
    <textarea name="description" class="form-control"  id="description"></textarea>
  </div>

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/chaieb/delivery/MVC_Free_Ads/freeads/resources/views/create.blade.php ENDPATH**/ ?>