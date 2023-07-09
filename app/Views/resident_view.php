<?= $this->extend("layouts/base"); ?>

<?= $this->section("content"); ?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Resident Information</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="container-fluid">
            
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header ">
                      <h3 class="card-title" >New Residents</h3> 
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="button"><A:blank></A:blank>Add New Resident </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="officials" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Birthday</th>
                          <th>Sex</th>
                          <th>Age</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>John Phillip H. Gonzales</td>
                          <td>10 San Antonio Cavite City, Cavite</td>
                          <td>October 5, 1999</td>
                          <td>Male</td>
                          <td>23 years old</td>
                        </tr>
                        <tr>
                          <td>Dewey C. Fresco</td>
                          <td>10 San Antonio Cavite City, Cavite</td>
                          <td>September 13, 1999</td>
                          <td>Male</td>
                          <td>23 years old</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Birthday</th>
                          <th>Sex</th>
                          <th>Age</th>
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
          </div>	
        </section>	
    
        

<?= $this->endSection(); ?>