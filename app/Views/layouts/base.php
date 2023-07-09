<?= $this->include("layouts/header"); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
  

    <!-- Navbar -->
      <?= $this->include("layouts/navbar"); ?>

          <!-- Main Sidebar Container -->
              <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Brand Logo -->
        <?= $this->include("layouts/logo"); ?>


        <!-- Sidebar -->
        <?= $this->include("layouts/sidebar"); ?>



        <!-- jQuery -->
          <?= $this->include("layouts/jquery"); ?>
        <!-- Bootstrap 4 -->
          <?= $this->include("layouts/bootstrap"); ?>


            <!-- Main Content -->
            <?= $this->renderSection("content"); ?>
  </div>
</body>

</html>