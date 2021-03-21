

<?php $__env->startSection('content'); ?>

<div class="content">
    <form action="<?php echo e(route('candidats.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo $__env->make('Candidat.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <button type="submit" class="btn btn-primary my-3">Ajouter un candidat</button>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'candidats', 'titlePage' => __('Nouveau Candidat')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/Candidat/create.blade.php ENDPATH**/ ?>