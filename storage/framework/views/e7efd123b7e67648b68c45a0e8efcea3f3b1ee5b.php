

<?php $__env->startSection('content'); ?>
<div class="content">
   <h1> <?php echo e($user->email); ?> </h1>
    <div class="container-fluid">
       <div class="card">
          <div class="card-header card-header-primary">  
            <h4 class="card-title">Informations de l'utilisateur</h4>
             <!-- <p class="card-category">Created using Roboto Font Family</p>  -->
          </div>
     
           <div class="card-body">    

                <a href="<?php echo e(route('users.edit', ['user' => $user->id])); ?>" class="btn btn-yellow my-3">Modifier</a>
                
                <form action="<?php echo e(route('users.destroy', ['user' => $user->id])); ?>" method="POST" style="display: inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                <hr>
                <p><strong>Nom :</strong> <?php echo e($user->nom); ?></p>
                <p><strong>Prenom :</strong> <?php echo e($user->prenom); ?></p>
                <p><strong>Date de naissance :</strong> <?php echo e($user->datenaissance); ?></p>
                <p><strong>Nom du pére :</strong> <?php echo e($user->nompere); ?></p>
                <p><strong>Nom de la mère :</strong> <?php echo e($user->nommere); ?></p>
                <p><strong>Profession :</strong> <?php echo e($user->profession); ?></p>
                <p><strong>Email :</strong> <?php echo e($user->email); ?></p>
                <?php if($user->image): ?>
                <img src="<?php echo e(asset('storage/' .$user->image)); ?>" alt="user-ImageUtilisateur" class="img-thumbnail" width="400">
                <?php endif; ?>
         </div>
     </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'users', 'titlePage' => __('Utilisateur')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/users/show.blade.php ENDPATH**/ ?>