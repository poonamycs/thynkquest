<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('img/Fevicon-01.png')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('adminpanel/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo e(asset('adminpanel/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('adminpanel/plugins/select2/css/select2.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('adminpanel/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
  <!-- Bootstrap4 Duallistbox -->
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset('adminpanel/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo e(asset('adminpanel/plugins/jqvmap/jqvmap.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('adminpanel/dist/css/adminlte.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('adminpanel/dist/css/toggle.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('adminpanel/dist/css/main.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('adminpanel/plugins/datatables-bs4/css/dataTables.bootstrap4.css')); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(asset('adminpanel/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset('adminpanel/plugins/daterangepicker/daterangepicker.css')); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo e(asset('adminpanel/plugins/summernote/summernote-bs4.css')); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
        <?php echo $__env->make('layouts/back_layout/back_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--End Main Header -->

        <!-- Main Sidebar-->
        <?php echo $__env->make('layouts/back_layout/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--End Sidebar -->

        <!-- main body content -->
            <?php echo $__env->yieldContent('content'); ?>
        <!-- End main body content -->

        <!-- Main Footer -->
            <?php echo $__env->make('layouts/back_layout/back_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End Footer -->

  <!-- Content Wrapper. Contains page content -->
  
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo e(asset('adminpanel/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('adminpanel/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('adminpanel/plugins/select2/js/select2.full.min.js')); ?>"></script>

<script src="<?php echo e(asset('adminpanel/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<script src="<?php echo e(asset('adminpanel/plugins/jquery-validation/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminpanel/plugins/jquery-validation/additional-methods.min.js')); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo e(asset('adminpanel/plugins/chart.js/Chart.min.js')); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo e(asset('adminpanel/plugins/sparklines/sparkline.js')); ?>"></script>
<!-- JQVMap -->
<script src="<?php echo e(asset('adminpanel/plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminpanel/plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset('adminpanel/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo e(asset('adminpanel/plugins/moment/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminpanel/plugins/daterangepicker/daterangepicker.js')); ?>"></script>

<script src="<?php echo e(asset('adminpanel/plugins/datatables/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(asset('adminpanel/plugins/datatables-bs4/js/dataTables.bootstrap4.js')); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(asset('adminpanel/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
<!-- Summernote -->
<script src="<?php echo e(asset('adminpanel/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(asset('adminpanel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminpanel/plugins/bootstrap-switch/js/bootstrap-switch.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('adminpanel/dist/js/adminlte.js')); ?>"></script>


<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset('adminpanel/dist/js/pages/dashboard.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('adminpanel/dist/js/demo.js')); ?>"></script>
<script src="<?php echo e(asset('adminpanel/dist/js/main.js')); ?>"></script>



</body>
</html>
<?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/layouts/back_layout/back_design.blade.php ENDPATH**/ ?>