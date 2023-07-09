   <!-- Sidebar -->
    <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php base_url()?>assets/AdminLTE-3.2.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Welcome, Admin!</a>
        </div>
      </div>  

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
  
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/resident" class="nav-link">
              <i class="nav-icon fa fa-address-book"></i>
              <p>
                New Resident 
                
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="/officials" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Barangay Officials
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/totalresident" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Total Residents
                
              </p>
            </a>
            
          </li>  
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>