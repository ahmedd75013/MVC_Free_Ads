<?php $__env->startSection('contenu'); ?>
    <form action="/inscription" method="post">

    <?php echo e(csrf_field()); ?>

  
     
        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text"  name="nom" >
       
        </div>


        <div class="form-group">
          <label for="prenom">Prenom</label>
          <input type="text"  name="prenom">
        
        </div>
   
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email"  name="email" >
        
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email"  name="email_verified_at" >
        
        </div>

      <div class="form-group">
        <label for="mdp">Password</label>
        <input type="password" name="password" >
       
      </div>

      <div class="form-group">
        <label for="mdp">Confirm Password</label>
        <input type="password" name="password2" >
        
      </div>
      <input type="submit" value="M'inscrire">
      </div>
    </form>
   
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/chaieb/delivery/MVC_Free_Ads/freeads/resources/views/inscription.blade.php ENDPATH**/ ?>