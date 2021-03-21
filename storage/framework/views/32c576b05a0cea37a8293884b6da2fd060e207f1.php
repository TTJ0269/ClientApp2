

<?php $__env->startSection('content'); ?>

<h1>Modifier le profil : <?php echo e($candidat->nomcd); ?></h1>
<form action="<?php echo e(route('candidats.update', ['candidat' => $candidat->id])); ?>" method="POST" enctype="multipart/form-data">
  <?php echo method_field('PATCH'); ?>
  <?php echo $__env->make('Candidat.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <button type="submit" class="btn btn-primary my-3">Sauvegarder les informations</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'candidats', 'titlePage' => __('')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/Candidat/edit.blade.php ENDPATH**/ ?>