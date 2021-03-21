

<?php $__env->startSection('content'); ?>

<h1>Modifier le profil : <?php echo e($user->nom); ?></h1>
<form action="<?php echo e(route('users.update', ['user' => $user->id])); ?>" method="POST" enctype="multipart/form-data">
  <?php echo method_field('PATCH'); ?>
  <?php echo $__env->make('users.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <button type="submit" class="btn btn-primary my-3">Sauvegarder les informations</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'users', 'titlePage' => __('')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/users/edit.blade.php ENDPATH**/ ?>