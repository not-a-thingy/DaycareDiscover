<aside class="main-sidebar sidebar-dark-primary elevation-4" style = "position:fixed; height: 100%"  >

<a href="/home" class="brand-link" style="text-decoration:none; font-size:20px; text-align:center;">
      ADMIN PANEL
      
    </a>
  
 <!-- Sidebar -->
 <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="/profile" style="text-decoration:none;" class="d-block">
          <img style=" position:absolute; top:10px; left:10px; border-radius:50%; text-decoration:none;">
                                {{ Auth::user()->name }}
          </a>
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
          
              <li class="nav-item">
                <a href="{{ url('/admin/home') }}" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-key"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" style = "position:relative; left:15px;">
                <a href="{{ url('/admin') }}" class="nav-link">
                <i class="nav-icon fa-solid fa-user"></i>
                  <p>Users</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
         
              <li class="nav-item" >
                <a href="{{ url('/admin/verify/daycares') }}" class="nav-link">
                <i class="nav-icon fa-solid fa-user"></i>
                  <p>Day Care Verify</p>
                </a>
              </li>
          
          </li>

          
          <li class="nav-item">
         
              <li class="nav-item" >
                <a href="{{ url('/details_daycare') }}" class="nav-link">
                <i class="nav-icon fa-solid fa-user"></i>
                  <p>View Day Care</p>
                </a>
              </li>
          
          </li>
          
          
      </nav>
      
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>