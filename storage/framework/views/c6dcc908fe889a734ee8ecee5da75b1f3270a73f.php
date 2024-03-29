<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Anggota CBT | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(url('adminlte/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo e(url('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(url('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo e(url('adminlte/plugins/jqvmap/jqvmap.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(url('adminlte/dist/css/adminlte.min.css')); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(url('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(url('adminlte/plugins/daterangepicker/daterangepicker.css')); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo e(url('adminlte/plugins/summernote/summernote-bs4.css')); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
    <?php echo $__env->make('layout.anggotacbt.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php echo $__env->make('layout.anggotacbt.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- /.content -->
    <?php echo $__env->yieldContent('content'); ?>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  <?php echo $__env->make('layout.anggotacbt.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo e(url('adminlte/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(url('adminlte/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo e(url('adminlte/plugins/chart.js/Chart.min.js')); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo e(url('adminlte/plugins/sparklines/sparkline.js')); ?>"></script>
<!-- JQVMap -->
<script src="<?php echo e(url('adminlte/plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
<script src="<?php echo e(url('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(url('adminlte/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo e(url('adminlte/plugins/moment/moment.min.js')); ?>"></script>
<script src="<?php echo e(url('adminlte/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(url('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
<!-- Summernote -->
<script src="<?php echo e(url('adminlte/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(url('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(url('adminlte/dist/js/adminlte.js')); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(url('adminlte/dist/js/pages/dashboard.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(url('adminlte/dist/js/demo.js')); ?>"></script>
</body>
</html>
<?php /**PATH D:\Backup Data Kristopel\Kuliah ITdel\Semester 6\PA III\Project\git\v.4.1\PA-III-02-2020\resources\views/layout/anggotacbt/app.blade.php ENDPATH**/ ?>