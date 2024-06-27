<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

 

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
    
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><?php echo e(Session::get('adminSession')); ?></span>
          <div class="dropdown-divider"></div>
          <a href="<?php echo e(url('admin/change-password')); ?>" class="dropdown-item">
            <i class="fas fa-key mr-2"></i>Change Password
          
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo e(url('admin/logout')); ?>" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i>Logout
            
          </a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>
      
    </ul>
  </nav><?php /**PATH D:\xampp\htdocs\laravel-project\thynkquest\resources\views/layouts/back_layout/back_header.blade.php ENDPATH**/ ?>