<?php $__env->startComponent('mail::message'); ?>
# Bienvenue <?php echo e($users->nom); ?>


Merci de vous être enregistré(e) avec l'adresse <?php echo e($users->email); ?>


Votre mot de passe est: <?php echo e($users->password); ?>


Veuillez bien garder secret ce mot de passe.
<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/emails/user/welcome-user.blade.php ENDPATH**/ ?>