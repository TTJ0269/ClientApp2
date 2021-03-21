

<?php $__env->startSection('content'); ?>
<div class="content">
    <h2><?php echo e($republique->nomrep); ?></h2>
    <div class="container-fluid">
       <div class="card">
          <div class="card-header card-header-primary">  
            <h4 class="card-title">Informations de la république</h4>
             <!-- <p class="card-category">Created using Roboto Font Family</p>  -->
          </div>
     
            <div class="card-body">  
                <a href="<?php echo e(route('republiques.edit', ['republique' => $republique->id])); ?>" class="btn btn-yellow my-3">Modifier</a>
                <form action="<?php echo e(route('republiques.destroy', ['republique' => $republique->id])); ?>" method="POST" style="display: inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                <hr>
                <p><strong>Nom :</strong> <?php echo e($republique->nomrep); ?></p>
             </div>
       </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'republique', 'titlePage' => __('Republique')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/Republique/show.blade.php ENDPATH**/ ?>