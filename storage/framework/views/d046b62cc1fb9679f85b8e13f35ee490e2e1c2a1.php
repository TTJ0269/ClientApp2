

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
                         <?php if(session()->has('messagealert')): ?>
                            <div class="alert alert-danger" role="alert">
                            <?php echo e(session()->get('messagealert')); ?>

                            </div>
                         <?php endif; ?>
                         <?php if(session()->has('message')): ?>
                           <div class="alert alert-success" role="alert">
                           <?php echo e(session()->get('message')); ?>

                           </div>
                         <?php endif; ?>



              <div class="card-header card-header-primary">  
                <h4 class="card-title">Voter en toute sécurité</h4>
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
                          </thead>

                       <?php $__currentLoopData = $candidats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <form action="<?php echo e(route('votes_store')); ?>" method="POST" class="section">
                            <?php echo csrf_field(); ?>
                            <tbody >
                                <input type="number" hidden  name="candidat_id" value="<?php echo e($candidat->id); ?>" >
                              <tr>
                                <th scope="row" > <?php echo e($candidat->id); ?> </th>
                                <?php if($candidat->imagecd): ?>
                                <th scope="row"> <img src="<?php echo e(asset('storage/' .$candidat->imagecd)); ?>" alt="candidat-ImageCandidat" class="img-thumbnail" width="300"> </th>
                                <?php endif; ?>
                                <th scope="row" > <?php echo e($candidat->nomcd); ?> </th>
                                <th scope="row" > <?php echo e($candidat->prenomcd); ?> </th>
                                <th scope="row" > <?php echo e($candidat->nomparti); ?> </th>
                                <th scope="row"> <button type="submit" class="btn btn-primary my-3">Voter</button> </th>
                              </tr>
                            </tbody>
                          </form>   
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </table>   
               </div>
      </div> 
   </div> 
  </ul>
</div>
<!--script>
function store()
{
  alert("Votre vote a été validé avec succes.");
}
</script-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appelecteur', ['activePage' => 'vote', 'titlePage' => __('Vote')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/Vote/form.blade.php ENDPATH**/ ?>