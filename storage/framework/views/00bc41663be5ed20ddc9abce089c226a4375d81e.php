

<?php $__env->startSection('content'); ?>

<div class="content">
    <ul>
    <table class="table"> 
                <tbody >
                   <tr>
                      <th scope="row" > <img src="<?php echo e(asset('material')); ?>/img/armoiries.jpg" alt="" class="img-thumbnail" width="100"> </th>
                      <th scope="row"> <h1 align="center"><strong>PUBLICATION DU RESULTAT DE VOTE</strong></h1> </th>
                      <th scope="row"> <img src="<?php echo e(asset('material')); ?>/img/ceni-logo.png" alt="" class="img-thumbnail" width="150"></th>
                   </tr>
                </tbody>
      </table>
    <hr>
    <div class="container-fluid">
       <div class="card">
          <div class="card-header card-header-primary">  
            <h4 class="card-title">Voix par candidat</h4>
             <!-- <p class="card-category">Created using Roboto Font Family</p>  -->
          </div>
     
           <div class="card-body">     

                <table class="table">
                <thead>
                    <th scope="col">Identifiant</th>
                    <th scope="col">Image du candidat</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Nom parti</th>
                    <th scope="col">Nombre de voix</th>
                    <th scope="col">Pourcentage de voix</th>
                </thead>

                <tbody>
                <?php $__currentLoopData = $nombre_voix; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voix): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <th scope="row"> <?php echo e($voix->candidat_id); ?> </th>
                <?php if($voix->imagecd): ?>
                <th scope="row"> <img src="<?php echo e(asset('storage/' .$voix->imagecd)); ?>" alt="candidat-ImageCandidat" class="img-thumbnail" width="150"> </th>
                <?php endif; ?>
                <th scope="row"> <?php echo e($voix->nomcd); ?> </th>
                <th scope="row"> <?php echo e($voix->prenomcd); ?> </th>
                <th scope="row"> <?php echo e($voix->nomparti); ?> </th>
                <th scope="row"> <?php echo e($voix->nombre); ?> </th>
                <th scope="row"> <?php echo e($voix->pourcentage); ?> % </th>
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

<?php echo $__env->make('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'nbvoix', 'title' => __('Candidat')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/Candidatvote/nombrevotecandidat.blade.php ENDPATH**/ ?>