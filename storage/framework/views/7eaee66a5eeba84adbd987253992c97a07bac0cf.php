<?php echo csrf_field(); ?>
<div class="container-fluid">
  <div class="card">
       <div class="card-header card-header-primary">
        <h4 class="card-title">Région</h4>
        <!-- <p class="card-category">Created using Roboto Font Family</p>  -->
        </div>
        <div class="card-body">
            <div id="typography">
                  <div class="card-title">
                     <h2>Région</h2>
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
unset($__errorArgs, $__bag); ?>" name="nom" placeholder="Rentrez le nom de la region..." value="<?php echo e(old('nom') ?? $region->nom); ?>">
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

                    <div class="form-group my-3">
                        <select class="custom-select <?php $__errorArgs = ['republique_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="republique_id">
                                <?php $__currentLoopData = $republiques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $republique): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($republique->id); ?>" <?php echo e($republique->republique_id = $republique->id ? 'selected' : ''); ?>> <?php echo e($republique->nomrep); ?> </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </select>
                            <?php $__errorArgs = ['republique_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('republique_id')); ?>

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
</div><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/Region/form.blade.php ENDPATH**/ ?>