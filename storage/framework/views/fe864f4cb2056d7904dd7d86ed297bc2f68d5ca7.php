

<?php $__env->startSection('content'); ?>
<div class="content"> 
     <table class="table"> 
                <tbody >
                   <tr>
                      <th scope="row" > <img src="<?php echo e(asset('material')); ?>/img/armoiries.jpg" alt="" class="img-thumbnail" width="100"> </th>
                      <th scope="row"> <h1 align="center"><strong>ELECTION PRESIDENTIELLE</strong></h1> </th>
                      <th scope="row"> <img src="<?php echo e(asset('material')); ?>/img/ceni-logo.png" alt="" class="img-thumbnail" width="150"></th>
                   </tr>
                </tbody>
      </table>
  <hr>
  <ul>
    <div class="container-fluid">
        <div class="card">
              <div class="card-header card-header-primary">  
                <h4 class="card-title">Vote fermé</h4>
                <!-- <p class="card-category">Created using Roboto Font Family</p>  -->
              </div>
        
             <div class="card-body">
             <p>Désolé vous ne pouvez pas voter tant que les votes sont fermés.</p>
             <p>Veuillez contactez le service pour plus d’information.</p>
            </div>
      </div> 
   </div> 
  </ul>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appelecteur', ['activePage' => 'votefermer', 'titlePage' => __('Vote')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/Vote/formvotefermer.blade.php ENDPATH**/ ?>