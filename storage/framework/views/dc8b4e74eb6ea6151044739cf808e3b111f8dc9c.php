

<?php $__env->startSection('content'); ?>
<div class="content">
    <h1> <?php echo e($type_utilisateur->nom); ?> </h1>
    <div class="container-fluid">
       <div class="card">
          <div class="card-header card-header-primary">  
            <h4 class="card-title">Informations du type de l'utilisateur</h4>
             <!-- <p class="card-category">Created using Roboto Font Family</p>  -->
          </div>
     
            <div class="card-body">  
                <a href="<?php echo e(route('type_utilisateurs.edit', ['type_utilisateur' => $type_utilisateur->id])); ?>" class="btn btn-yellow my-3">Modifier</a>
                <form action="<?php echo e(route('type_utilisateurs.destroy', ['type_utilisateur' => $type_utilisateur->id])); ?>" method="POST" style="display: inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                <hr>
                <p><strong>Nom :</strong> <?php echo e($type_utilisateur->nom); ?></p>
           </div>
       </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'type_utilisateur', 'titlePage' => __('Type Utilisateur')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/TypeUtilisateur/show.blade.php ENDPATH**/ ?>