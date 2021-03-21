

<?php $__env->startSection('content'); ?>

<div class="content">
            <h1> <?php echo e($candidat->nomcd); ?> </h1>
   <div class="container-fluid">
       <div class="card">
          <div class="card-header card-header-primary">  
            <h4 class="card-title">Informations du candidat</h4>
             <!-- <p class="card-category">Created using Roboto Font Family</p>  -->
          </div>
     
            <div class="card-body">  
              <a href="<?php echo e(route('candidats.edit', ['candidat' => $candidat->id])); ?>" class="btn btn-info my-3">Modifier</a>
              <form action="<?php echo e(route('candidats.destroy', ['candidat' => $candidat->id])); ?>" method="POST" style="display: inline;">
              <?php echo csrf_field(); ?>
              <?php echo method_field('DELETE'); ?>
              <button type="submit" class="btn btn-danger">Supprimer</button>
              </form>
              <hr>
              <p><strong>Nom du candidat:</strong> <?php echo e($candidat->nomcd); ?></p>
              <p><strong>Prenom du candidat :</strong> <?php echo e($candidat->prenomcd); ?></p>
              <?php if($candidat->imagecd): ?>
              <img src="<?php echo e(asset('storage/' .$candidat->imagecd)); ?>" alt="candidat-ImageCandidat" class="img-thumbnail" width="400">
              <?php endif; ?>
              <p><strong>Nom du parti politique :</strong> <?php echo e($candidat->nomparti); ?></p>
              <?php if($candidat->pancarteparti): ?>
              <img src="<?php echo e(asset('storage/' .$candidat->pancarteparti)); ?>" alt="candidat-ImagePancarte" class="img-thumbnail" width="400">
              <?php endif; ?>
            </div>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'candidats', 'titlePage' => __('Nouveau Candidat')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/Candidat/show.blade.php ENDPATH**/ ?>