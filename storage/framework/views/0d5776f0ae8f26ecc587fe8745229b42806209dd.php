

<?php $__env->startSection('content'); ?>

<div class="content">
    <form action="<?php echo e(route('republiques.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo $__env->make('Republique.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <button type="submit" class="btn btn-primary my-3">Ajouter la République</button>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'republique', 'titlePage' => __('Nouvelle République')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/Republique/create.blade.php ENDPATH**/ ?>