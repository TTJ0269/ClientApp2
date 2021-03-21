

<?php $__env->startSection('content'); ?>
<div class="content">
    <a href="<?php echo e(route('republiques.create')); ?>" class="btn btn-primary my-3">Nouvelle Republique</a>

 <ul>
 <div class="container-fluid">
       <div class="card">
                          <?php if(session()->has('messagealert')): ?>
                          <div class="alert alert-danger" role="alert">
                          <?php echo e(session()->get('messagealert')); ?>

                          </div>
                          <?php endif; ?>
          <div class="card-header card-header-primary">  
            <h4 class="card-title">République</h4>
             <!-- <p class="card-category">Created using Roboto Font Family</p>  -->
          </div>
     
           <div class="card-body">

                <table class="table">
                <thead>
                    <th scope="col">Identifiant</th>
                    <th scope="col">Nom</th>
                </thead>

                <tbody>
                <?php $__currentLoopData = $republiques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $republique): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <th scope="row"> <?php echo e($republique->id); ?> </th>
                <td> <a href="<?php echo e(route('republiques.show', ['republique' => $republique->id])); ?>"> <?php echo e($republique->nomrep); ?> </a></td>
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
<?php echo $__env->make('layouts.app', ['activePage' => 'republique', 'titlePage' => __('Republique')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/Republique/index.blade.php ENDPATH**/ ?>