<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Barangay MIS | Register</title>

  <!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php base_url()?>assets/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php base_url()?>assets/AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php base_url()?>assets/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php base_url()?>assets/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Main content -->
    <div class="container">
      <div class="row d-flex justify-content-center" style="margin-top:45px">
        <div class="col-md-4 col-md-offset-4 ">
          <h4> Register </h4><hr>
          <form action ="<?= base_url('save')?>" method="post">
            <?= csrf_field(); ?>
              <!--Notif if the function is error-->
              <?php if(!empty(session()->getFlashdata('Fail'))) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('fail');?></div>
              <?php endif ?>
              <!--Notif if the function is Success-->
              <?php if(!empty(session()->getFlashdata('success'))) : ?>
                <div class="alert alert-success"><?= session()->getFlashdata('success');?></div>
              <?php endif ?>
          <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter fullname">
            </div>
            <div class="form-group">
              <label for="">Username</label>
              <input type="text" class="form-control" name="username" placeholder="Enter your username">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Enter your password">
            </div>
            <div class="form-group">
              <label for="">Confirm Password</label>
              <input type="password" class="form-control" name="cpassword" placeholder="Enter your confirm password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-block" type="submit"> Register </button>
            </div>
            <br>
            <a href="<?= site_url('login'); ?>"> Already have an account, Login now </a>
          </form>
        </div>
      </div>
  </div>

        


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php base_url()?>assets/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php base_url()?>assets/AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php base_url()?>assets/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php base_url()?>assets/AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php base_url()?>assets/AdminLTE-3.2.0/dist/js/adminlte.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php base_url()?>assets/AdminLTE-3.2.0/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php base_url()?>assets/AdminLTE-3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

    <script src="<?= base_url('assets/js/Dashboard.js'); ?> "> </script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>