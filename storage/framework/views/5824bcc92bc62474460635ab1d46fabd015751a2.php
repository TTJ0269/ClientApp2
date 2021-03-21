

<?php $__env->startSection('content'); ?>
<div class="content">
    <a href="<?php echo e(route('regions.create')); ?>" class="btn btn-primary my-3">Nouvelle région</a>

    <ul>
    <div class="container-fluid">
       <div class="card">
                          <?php if(session()->has('messagealert')): ?>
                          <div class="alert alert-danger" role="alert">
                          <?php echo e(session()->get('messagealert')); ?>

                          </div>
                          <?php endif; ?>
          <div class="card-header card-header-primary">  
            <h4 class="card-title">Région</h4>
             <!-- <p class="card-category">Created using Roboto Font Family</p>  -->
          </div>
     
           <div class="card-body">

                <table class="table">
                <thead>
                    <th scope="col">Identifiant</th>
                    <th scope="col">Nom</th>
                    <th scope="col">République</th>
                </thead>

                <tbody>
                <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <th scope="row"> <?php echo e($region->id); ?> </th>
                <td> <a href="<?php echo e(route('regions.show', ['region' => $region->id])); ?>"> <?php echo e($region->nom); ?> </a></td>
                <th scope="row"> <?php echo e($region->republique->nomrep); ?> </th>
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
<?php echo $__env->make('layouts.app', ['activePage' => 'region', 'titlePage' => __('Région')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/Region/index.blade.php ENDPATH**/ ?>