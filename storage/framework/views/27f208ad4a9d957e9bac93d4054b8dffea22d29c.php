

<?php $__env->startSection('content'); ?>
<div class="content">
   <a href="<?php echo e(route('type_utilisateurs.create')); ?>" class="btn btn-primary my-3">Nouveau Type d'utilisateur</a>

   <ul>
   <div class="container-fluid">
       <div class="card">
                          <?php if(session()->has('messagealert')): ?>
                          <div class="alert alert-danger" role="alert">
                          <?php echo e(session()->get('messagealert')); ?>

                          </div>
                          <?php endif; ?>
          <div class="card-header card-header-primary">  
            <h4 class="card-title">Type Utilisateur</h4>
             <!-- <p class="card-category">Created using Roboto Font Family</p>  -->
          </div>
     
           <div class="card-body">
            <table class="table">
            <thead>
                  <th scope="col">Identifiant</th>
                  <th scope="col">Nom</th>
            </thead>

                  <tbody>
                  <?php $__currentLoopData = $type_utilisateurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type_utilisateur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                  <th scope="row"> <?php echo e($type_utilisateur->id); ?> </th>
                  <td> <a href="<?php echo e(route('type_utilisateurs.show', ['type_utilisateur' => $type_utilisateur->id])); ?>"> <?php echo e($type_utilisateur->nom); ?> </a></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
            </table>
      </div>
   </div>
 </div> 
   </ul>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'type_utilisateur', 'titlePage' => __('Type Utilisateur')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/TypeUtilisateur/index.blade.php ENDPATH**/ ?>