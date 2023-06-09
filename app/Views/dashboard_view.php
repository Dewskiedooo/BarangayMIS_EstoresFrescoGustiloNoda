  <?= $this->extend("layouts/base");?>

  <?=$this->section("title");?>
    <?=$page_title;?>
  <?=$this->endSection();?>

  <?= $this->section("content");?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0"><?=$page_heading;?></h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        
        <!-- Main content -->
        <section class="content">


          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner" >
                    <h3 id="getPopulation" >2</h3>

                    <p>Total Population</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-users"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>100<sup style="font-size: 20px">%</sup></h3>

                    <p>Registered Voters</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-vote-yea"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>2</h3>

                    <p>Male</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-male"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3>0</h3>

                    <p>Female</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-female"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->

        
          </section>
          <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1> <?=$page_heading1;?> </h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
          </section>
          <!-- Second Content -->
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Current Barangay Officials</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="officials" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                        <th>Position</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Start of Term</th>
                        <th>End of Term</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>Kagawad</td>
                          <td>John Phillip H. Gonzales</td>
                          <td>09287365999</td>
                          <td>10 San Antonio Cavite City, Cavite</td>
                          <td>July 8, 2020</td>
                          <td>July 8, 2023</td>
                        </tr>
                        <tr>
                          <td>Captain</td>
                          <td>Dewey C. Fresco</td>
                          <td>09352317890</td>
                          <td>10 San Antonio Cavite City, Cavite</td>
                          <td>July 8, 2020</td>
                          <td>July 8, 2023</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>Position</th>
                          <th>Name</th>
                          <th>Contact</th>
                          <th>Address</th>
                          <th>Start of Term</th>
                          <th>End of Term</th>
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
          </div>	
        </section>		
      
      </div>

  <?= $this->endSection();?>
