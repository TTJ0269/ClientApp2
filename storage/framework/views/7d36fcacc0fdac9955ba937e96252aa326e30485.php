<?php $__env->startSection('content'); ?>
<div class="container" style="height: auto;">

                         <?php if(session()->has('message')): ?>
                           <div class="alert alert-success" role="alert">
                           <?php echo e(session()->get('message')); ?>

                           </div>
                         <?php endif; ?>

  <div class="row justify-content-center">
      <div class="col-lg-7 col-md-8">
          <h1 class="text-white text-center"><?php echo e(__('Bienvenue sur notre site de vote en ligne')); ?></h1>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Eléction')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/Welcome.blade.php ENDPATH**/ ?>