<?php echo csrf_field(); ?>
<div class="container-fluid">
  <div class="card">
       <div class="card-header card-header-primary">
        <h4 class="card-title">Candidat</h4>
        <!-- <p class="card-category">Created using Roboto Font Family</p>  -->
        </div>
        <div class="card-body">
            <div id="typography">
                  <div class="card-title">
                     <h2>Candidat</h2>
                  </div>
               <div class="content">
                    <div class="form-group my-3">
                    <input type="text" class="form-control <?php $__errorArgs = ['nomcd'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nomcd" placeholder="Rentrez le nom du candidat..." value="<?php echo e(old('nomcd') ?? $candidat->nomcd); ?>">
                    <?php $__errorArgs = ['nomcd'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('nomcd')); ?>

                        </div>   
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group my-3">
                    <input type="text" class="form-control <?php $__errorArgs = ['prenomcd'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="prenomcd" placeholder="Rentrez le prenom du candidat..." value="<?php echo e(old('prenomcd') ?? $candidat->prenomcd); ?>">
                    <?php $__errorArgs = ['prenomcd'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('prenomcd')); ?>

                        </div>   
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group my-3">
                        <div class="custom-file">
                            <input type="file" name="imagecd" class="custom-file-input <?php $__errorArgs = ['imagecd'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="validatedCustomFile" value="<?php echo e(old('imagecd') ?? $candidat->imagecd); ?>">
                            <label class="custom-file-label" for="validatedCustomFile"> Choisir une image du candidat...</label>
                            <?php $__errorArgs = ['imagecd'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('imagecd')); ?>

                        </div>   
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group my-3">
                    <input type="text" class="form-control <?php $__errorArgs = ['nomparti'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nomparti" placeholder="Rentrez le nom du parti..." value="<?php echo e(old('nomparti') ?? $candidat->nomparti); ?>">
                    <?php $__errorArgs = ['nomparti'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('nomparti')); ?>

                        </div>   
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!--div class="form-group my-3">
                        <div class="custom-file">
                            <input type="file" name="pancarteparti" class="custom-file-input <?php $__errorArgs = ['pancarteparti'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="validatedCustomFile" value="<?php echo e(old('pancarteparti') ?? $candidat->pancarteparti); ?>">
                            <label class="custom-file-label" for="validatedCustomFile"> Choisir une image de la pancarte...</label>
                            <?php $__errorArgs = ['pancarteparti'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                            <?php echo e($errors->first('pancarteparti')); ?>

                            </div>   
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div-->
                </div>
            </div>
         </div>
   </div>
</div><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/Candidat/form.blade.php ENDPATH**/ ?>