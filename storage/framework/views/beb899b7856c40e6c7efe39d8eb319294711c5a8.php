

<?php $__env->startSection('content'); ?>

<h1>Modifier la république : <?php echo e($republique->nomrep); ?></h1>
<form action="<?php echo e(route('republiques.update', ['republique' => $republique->id])); ?>" method="POST" enctype="multipart/form-data">
  <?php echo method_field('PATCH'); ?>
  <?php echo $__env->make('Republique.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <button type="submit" class="btn btn-primary my-3">Sauvegarder les informations</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'republique', 'titlePage' => __('')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/Republique/edit.blade.php ENDPATH**/ ?>