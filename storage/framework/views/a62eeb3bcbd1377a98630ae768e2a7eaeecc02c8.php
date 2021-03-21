

<?php $__env->startSection('content'); ?>
<div class="content">

<a href="<?php echo e(route('candidats.create')); ?>" class="btn btn-primary my-3">Nouveau candidat</a>

<ul>
<div class="container-fluid">
       <div class="card">
                          <?php if(session()->has('messagealert')): ?>
                          <div class="alert alert-danger" role="alert">
                          <?php echo e(session()->get('messagealert')); ?>

                          </div>
                          <?php endif; ?>
          <div class="card-header card-header-primary">  
            <h4 class="card-title">Candidat</h4>
             <!-- <p class="card-category">Created using Roboto Font Family</p>  -->
           </div>
           
           <div class="card-body">

                <table class="table">
                <thead>
                    <th scope="col">Identifiant</th>
                    <th scope="col">Nom du candidat</th>
                    <th scope="col">Prenom du candidat</th>
                    <th scope="col">Nom du parti politique</th>
                </thead>

                <tbody>
                <?php $__currentLoopData = $candidats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <th scope="row"> <?php echo e($candidat->id); ?> </th>
                <td> <a href="<?php echo e(route('candidats.show', ['candidat' => $candidat->id])); ?>"> <?php echo e($candidat->nomcd); ?> </a></td>
                <th scope="row"> <?php echo e($candidat->prenomcd); ?> </th>
                <th scope="row"> <?php echo e($candidat->nomparti); ?> </th>
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
<?php echo $__env->make('layouts.app', ['activePage' => 'candidats', 'titlePage' => __('Candidat')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/Candidat/index.blade.php ENDPATH**/ ?>