<?= $this->extend("layouts/base"); ?>

<?= $this->section("content"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Barangay Officials</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php base_url()?>assets/AdminLTE-3.2.0/dist/img/user2-160x160.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Dewey Fresco</h3>

                <p class="text-muted text-center">Captain</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Start of Term</b> <a class="float-right">July 8, 2020</a>
                  </li>
                  <li class="list-group-item">
                    <b>End of Term</b> <a class="float-right">July 8, 2023</a>
                  </li>
                  <div class="card-body">
                  <strong><i class="fas fa-book mr-1"></i> Education</strong>

                  <p class="text-muted">
                  B.S. in Information Technology from the Cavite State University - Cavite City Campus
                  </p>
                  
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>View</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">List of Kagawad</a></li>
                  
                </ul>
              </div><!-- /.card-header -->
              <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                  <div class="card-header text-muted border-bottom-0">
                    Kagawad
                  </div>
                  <div class="card-body pt-0">
                    <div class="row">
                      <div class="col-7">
                        <h2 class="lead"><b>John Phillip H. Gonzales</b></h2>
                        <p class="text-muted text-sm"><b>About: </b>  3 Years in Candidacy </p>
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: 10 San Antonio Cavite City, Cavite</li>
                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone : 09287365999</li>
                        </ul>
                      </div>
                      <div class="col-5 text-center">
                        <img src="<?php base_url()?>assets/AdminLTE-3.2.0/dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="text-right">
                      
                      <a href="#" class="btn btn-sm btn-primary">
                        <i class="fas fa-user"></i> View Profile
                      </a>
                    </div>
                  </div>
                </div>
            </div>
          </div>
            
        

<?= $this->endSection(); ?>