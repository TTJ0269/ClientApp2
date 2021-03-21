

<?php $__env->startSection('content'); ?>

<div class="content"> 
    <form action="<?php echo e(route('regions.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo $__env->make('Region.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <button type="submit" class="btn btn-primary my-3">Ajouter une nouvelle région</button>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'region', 'titlePage' => __('Nouvelle Région')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/Region/create.blade.php ENDPATH**/ ?>