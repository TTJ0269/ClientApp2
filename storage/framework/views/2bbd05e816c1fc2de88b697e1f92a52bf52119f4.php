

<?php $__env->startSection('content'); ?>
<div class="content">
   <ul>
          <?php $__currentLoopData = $nombre_voter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nrb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <p><strong>Nombre:</strong><?php echo e($nrb->nombre); ?></p>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   <div class="container-fluid">
       <div class="card">
          <div class="card-header card-header-primary">  
            <h4 class="card-title">Informations des élécteurs qui ont participés au vote</h4>
          </div>
     
           <div class="card-body">
            <table class="table">
            <thead>
                  <th scope="col">Identifiant</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prénom</th>
                  <th scope="col">Nom du pére</th>
                  <th scope="col">Nom de la mére</th>
            </thead>

                  <tbody>
                  <?php $__currentLoopData = $utilisateurs_voter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vote): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                  <th scope="row"> <?php echo e($vote->id); ?> </th>
                  <th scope="row"> <?php echo e($vote->nom); ?> </th>
                  <th scope="row"> <?php echo e($vote->prenom); ?> </th>
                  <th scope="row"> <?php echo e($vote->nompere); ?> </th>
                  <th scope="row"> <?php echo e($vote->nommere); ?> </th>
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
<?php echo $__env->make('layouts.app', ['activePage' => 'participervote', 'titlePage' => __('Electeur-Vote')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/Electeurvote/voteparticiper.blade.php ENDPATH**/ ?>