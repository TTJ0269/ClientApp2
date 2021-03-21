<?php echo csrf_field(); ?>
<div class="container-fluid">
  <div class="card">
       <div class="card-header card-header-primary">
        <h4 class="card-title">Republique</h4>
        <!-- <p class="card-category">Created using Roboto Font Family</p>  -->
        </div>
        <div class="card-body">
            <div id="typography">
                  <div class="card-title">
                     <h2>Republique</h2>
                  </div>
               <div class="content">
                    <div class="form-group">
                    <input type="text" class="form-control <?php $__errorArgs = ['nomrep'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nomrep" placeholder="Rentrez un nom..." value="<?php echo e(old('nomrep') ?? $republique->nomrep); ?>">
                    <?php $__errorArgs = ['nomrep'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('nomrep')); ?>

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
</div><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/Republique/form.blade.php ENDPATH**/ ?>