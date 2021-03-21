<div class="sidebar" data-color="orange" data-background-color="black" data-image="<?php echo e(asset('material')); ?>/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal"> <!--https://creative-tim.com/ --> 
      <?php echo e(__('election')); ?>

    </a>
  </div>
  <div class="sidebar-wrapper">
        <table class="table">
                <thead>
                    <th scope="col"><img src="<?php echo e(asset('storage/' .Auth::user()->image)); ?>" alt="Image" class="img-thumbnail" width="70"></th>
                    <th scope="col"><?php echo e(Auth::user()->nom); ?></th>
                    <th scope="col"><?php echo e(Auth::user()->prenom); ?></th>
                </thead>
        </table>
           
      <ul class="nav">
     <!-- <li class="nav-item<?php echo e($activePage == 'dashboard' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
          <i class="material-icons">dashboard</i>
            <p><?php echo e(__('Dashboard')); ?></p>
        </a>
      </li> 
     <li class="nav-item <?php echo e(($activePage == 'profile' || $activePage == 'user-management') ? ' active' : ''); ?>">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="<?php echo e(asset('material')); ?>/img/laravel.svg"></i>
          <p><?php echo e(__('Laravel Examples')); ?>

            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item<?php echo e($activePage == 'profile' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('profile.edit')); ?>">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal"><?php echo e(__('User profile')); ?> </span>
              </a>
            </li>
            <li class="nav-item<?php echo e($activePage == 'user-management' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('user.index')); ?>">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> <?php echo e(__('User Management')); ?> </span>
              </a>
            </li>
          </ul>
        </div>
      </li> 
       <li class="nav-item<?php echo e($activePage == 'connexion' ? ' active' : ''); ?>">
        <a class="nav-link" href="/connexion">
          <i class="material-icons"></i>
            <p><?php echo e(__('connexion')); ?></p>
        </a>
      </li>-->
      
      <li class="nav-item<?php echo e($activePage == 'votelimite' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('votelimite')); ?>">
          <i class="material-icons"></i>
            <p><?php echo e(__('Limite-Vote')); ?></p>
        </a>
        </li>
      <li class="nav-item<?php echo e($activePage == 'republique' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('republiques.index')); ?>">
          <i class="material-icons"></i>
            <p><?php echo e(__('Republique')); ?></p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'region' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('regions.index')); ?>">
          <i class="material-icons"></i>
            <p><?php echo e(__('Region')); ?></p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'type_utilisateur' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('type_utilisateurs.index')); ?>">
          <i class="material-icons"></i>
            <p><?php echo e(__('Type Utilisateur')); ?></p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'users' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('users.index')); ?>">
          <i class="material-icons"></i>
            <p><?php echo e(__('Utilisateur')); ?></p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'candidats' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('candidats.index')); ?>">
          <i class="material-icons"></i>
            <p><?php echo e(__('Candidat')); ?></p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'nombrevoteregion' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('nombrevoteregion')); ?>">
          <i class="material-icons"></i>
            <p><?php echo e(__('Voix par Region')); ?></p>
        </a>
      </li>
      <li class="nav-item <?php echo e(($activePage == 'participervote' || $activePage == 'pasparticipervote') ? ' active' : ''); ?>">
        <a class="nav-link" data-toggle="collapse" href="#laravel" aria-expanded="true">
          <p><?php echo e(__('Electeur-Vote')); ?>

            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravel">
          <ul class="nav">
            <li class="nav-item<?php echo e($activePage == 'participervote' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('participer_vote')); ?>">
                <span class="sidebar-normal"><?php echo e(__('Voter')); ?> </span>
              </a>
            </li>
            <li class="nav-item<?php echo e($activePage == 'pasparticipervote' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('pasparticiper_vote')); ?>">
                <span class="sidebar-normal"> <?php echo e(__('Pas Voter')); ?> </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

     <!--  <li class="nav-item<?php echo e($activePage == 'map' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('map')); ?>">
          <i class="material-icons"></i>
            <p><?php echo e(__('Maps')); ?></p>
        </a>
      </li>
       
     <li class="nav-item<?php echo e($activePage == 'typography' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('typography')); ?>">
          <i class="material-icons"></i>
            <p><?php echo e(__('Typography')); ?></p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'icons' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('icons')); ?>">
          <i class="material-icons"></i>
          <p><?php echo e(__('Icons')); ?></p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'notifications' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('notifications')); ?>">
          <i class="material-icons"></i>
          <p><?php echo e(__('Notifications')); ?></p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'language' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('language')); ?>">
          <i class="material-icons">language</i>
          <p><?php echo e(__('RTL Support')); ?></p>
        </a>
      </li>
      <li class="nav-item active-pro<?php echo e($activePage == 'upgrade' ? ' active' : ''); ?>">
        <a class="nav-link text-white bg-danger" href="<?php echo e(route('upgrade')); ?>">
          <i class="material-icons text-white">unarchive</i>
          <p><?php echo e(__('Upgrade to PRO')); ?></p>
        </a>
      </li> -->
    </ul>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\laravel\template\resources\views/layouts/navbars/sidebar.blade.php ENDPATH**/ ?>