

<?php $__env->startSection('content'); ?>
<div class="content">

            <form action="<?php echo e(route('type_utilisateurs.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo $__env->make('TypeUtilisateur.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <button type="submit" class="btn btn-primary my-3">Ajouter un type d'utilisateur</button>
            </form>     
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'type_utilisateur', 'titlePage' => __(' Type Utilisateur')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/TypeUtilisateur/create.blade.php ENDPATH**/ ?>