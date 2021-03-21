

<?php $__env->startSection('content'); ?>
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
      <h3><?php echo e(__('Bienvenue sur la page de vérification')); ?> </h3>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="<?php echo e(url('/verification')); ?>">
        <?php echo csrf_field(); ?>

        <div class="card card-login card-hidden mb-3">
                          <?php if(session()->has('messagealert')): ?>
                          <div class="alert alert-danger" role="alert">
                          <?php echo e(session()->get('messagealert')); ?>

                          </div>
                          <?php endif; ?>
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong><?php echo e(__('vérification')); ?></strong></h4>
            <!-- <div class="social-line">
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div> -->
          </div>
          <div class="card-body">
            <p class="card-description text-center"><?php echo e(__('Merci de nous avoir fait confiance ')); ?> <!-- <strong>admin@material.com</strong> <?php echo e(__(' and the password ')); ?><strong>secret</strong> </p> -->
            <div class="bmd-form-group<?php echo e($errors->has('email') ? ' has-danger' : ''); ?>">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="<?php echo e(__('Email...')); ?>" required>
              </div>
              <?php if($errors->has('email')): ?>
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong><?php echo e($errors->first('email')); ?></strong>
                </div>
              <?php endif; ?>
            </div>
            <div class="bmd-form-group<?php echo e($errors->has('hashpassword') ? ' has-danger' : ''); ?> mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="text" name="hashpassword" id="hashpassword" class="form-control" placeholder="<?php echo e(__('Mot de passe crypté...')); ?>" value="<?php echo e(!$errors->has('hashpassword') ? "" : ""); ?>" required>
              </div>
              <?php if($errors->has('hashpassword')): ?>
                <div id="password-error" class="error text-danger pl-3" for="hashpassword" style="display: block;">
                  <strong><?php echo e($errors->first('hashpassword')); ?></strong>
                </div>
              <?php endif; ?>
            </div>





            <div class="bmd-form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?> mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="<?php echo e(__('Nouveau mot de passe...')); ?>" required>
              </div>
              <?php if($errors->has('password')): ?>
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong><?php echo e($errors->first('password')); ?></strong>
                </div>
              <?php endif; ?>
            </div>
            <div class="bmd-form-group<?php echo e($errors->has('password_confirmation') ? ' has-danger' : ''); ?> mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="<?php echo e(__('Confirmation du mot de passe...')); ?>" required>
              </div>
              <?php if($errors->has('password_confirmation')): ?>
                <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                  <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                </div>
              <?php endif; ?>
            </div>







          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg"><?php echo e(__('Allons-y')); ?></button>
          </div>
        </div>
      </form>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'connexion', 'title' => __('Election')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/Connexions/connexion.blade.php ENDPATH**/ ?>