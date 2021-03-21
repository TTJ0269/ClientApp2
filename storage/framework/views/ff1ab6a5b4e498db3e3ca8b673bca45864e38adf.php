

<?php $__env->startSection('content'); ?>

<div class="content">
    <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary my-3">Nouveau Utilisateur</a>

    <ul>
    <div class="container-fluid">
                          <?php if(session()->has('message')): ?>
                          <div class="alert alert-success" role="alert">
                          <?php echo e(session()->get('message')); ?>

                          </div>
                          <?php endif; ?>
                          <?php if(session()->has('messagealert')): ?>
                          <div class="alert alert-danger" role="alert">
                          <?php echo e(session()->get('messagealert')); ?>

                          </div>
                          <?php endif; ?>
       <div class="card">
          <div class="card-header card-header-primary">  
            <h4 class="card-title">Utilisateur</h4>
             <!-- <p class="card-category">Created using Roboto Font Family</p>  -->
          </div>
     
           <div class="card-body">     

                <table class="table">
                <thead>
                    <th scope="col">Identifiant</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Type Utilisateur</th>
                    <th scope="col">Région</th>
                </thead>

                <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <th scope="row"> <?php echo e($user->id); ?> </th>
                <th scope="row"> <?php echo e($user->nom); ?> </th>
                <th scope="row"> <?php echo e($user->prenom); ?> </th>
                <td> <a href="<?php echo e(route('users.show', ['user' => $user->id])); ?>"> <?php echo e($user->email); ?> </a></td>
                <th scope="row"> <?php echo e($user->type_utilisateur->nom); ?> </th>
                <th scope="row"> <?php echo e($user->region->nom); ?> </th>
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

<?php echo $__env->make('layouts.app', ['activePage' => 'users', 'titlePage' => __('Utilisateur')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/users/index.blade.php ENDPATH**/ ?>