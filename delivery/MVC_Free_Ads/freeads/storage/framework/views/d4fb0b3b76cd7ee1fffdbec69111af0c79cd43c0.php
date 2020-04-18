<form action="<?php echo e(route ('annonce.search')); ?>">

 <input type="text"  name="q" class="searchTerm" placeholder="What are you looking for?" value="<?php echo e(request()->q ?? ''); ?>">
<button type="submit" class="searchButton"><i class="fa fa-search"></i>search</button>
</form><?php /**PATH /home/chaieb/delivery/MVC_Free_Ads/freeads/resources/views/search/search.blade.php ENDPATH**/ ?>