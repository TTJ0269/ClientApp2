

<?php $__env->startSection('content'); ?>
<div class="content"> 
    <!--  <table class="table"> 
                <tbody >
                   <tr>
                      <th scope="row" > <img src="<?php echo e(asset('material')); ?>/img/armoiries.jpg" alt="" class="img-thumbnail" width="100"> </th>
                      <th scope="row"> <h1 align="center"><strong>ELECTION PRESIDENTIELLE</strong></h1> </th>
                      <th scope="row"> <img src="<?php echo e(asset('material')); ?>/img/ceni-logo.png" alt="" class="img-thumbnail" width="150"></th>
                   </tr>
                </tbody> 
      </table> -->
  <hr>
  <ul>
    <div class="container-fluid">
        <div class="card">
              <div class="card-header card-header-primary">  
                <h4 class="card-title">Erreur</h4>
                <!-- <p class="card-category">Created using Roboto Font Family</p>  -->
              </div>
        
             <div class="card-body">
             <p>Désolé une erreur s'est produite.</p>
             <p>Veuillez contactez le service pour plus d’information et expliquer votre action.</p>
            </div>
      </div> 
   </div> 
  </ul>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'erreur', 'titlePage' => __('Erreur')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/erreur.blade.php ENDPATH**/ ?>