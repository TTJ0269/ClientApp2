<?php echo csrf_field(); ?>
<div class="container-fluid">
  <div class="card">
     <div class="card-header card-header-primary">
        <h4 class="card-title">Type Utilisateur</h4>
        <!-- <p class="card-category">Created using Roboto Font Family</p>  -->
      </div>
         <div class="card-body">
            <div id="typography">
                  <div class="card-title">
                     <h2>Type Utilisateur</h2>
                  </div>
               <div class="content">
                  <div class="form-group my-3">
                     <input type="text" class="form-control <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nom" placeholder="Rentrez un type..." value="<?php echo e(old('nom') ?? $type_utilisateur->nom); ?>">
                     <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                           <?php echo e($errors->first('nom')); ?>

                        </div>   
                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
               </div>
            </div>
       </div>
   </div>
</div>


<?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/TypeUtilisateur/form.blade.php ENDPATH**/ ?>