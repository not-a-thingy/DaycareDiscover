<aside class="main-sidebar sidebar-dark-primary elevation-4 " style = "position:fixed; height: 100%; background-color: #e2eaef;"  >

<a href="/admin/home" class="brand-link" style="text-decoration:none; font-size:20px; text-align:center; color:#000;">
      OPERATOR PANEL
      
    </a>
  
 <!-- Sidebar -->
 <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="{{ url('/users') }}" style="text-decoration:none;color: #000;" class="d-block">
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
            <a href="#" class="nav-link text-dark">
            <i class="nav-icon fa-solid fa-key"></i>
              <p>
                Day Care
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" style = "position:relative; left:15px;">
                <a href="{{ url('/daycare') }}" class="nav-link text-dark">
                <i class="nav-icon fa-solid fa-user"></i>
                  <p>Day Care Info</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item" style = "position:relative; left:15px;">
<<<<<<< HEAD
                <a href="{{ url('addvisit') }}" class="nav-link text-dark">
=======
                <a href="{{ url('/addvisit') }}" class="nav-link">
>>>>>>> e0fc50c2d4b0ff5e5e1465f7b4c53e68693fb5d8
                <i class="nav-icon fa-solid fa-user"></i>
                  <p>Create Schedule</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item" style = "position:relative; left:15px;">
<<<<<<< HEAD
                <a href="{{ url('viewvisit') }}" class="nav-link text-dark">
=======
                <a href="{{ url('/viewvisit') }}" class="nav-link">
>>>>>>> e0fc50c2d4b0ff5e5e1465f7b4c53e68693fb5d8
                <i class="nav-icon fa-solid fa-user"></i>
                  <p>View Schedule</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item" style = "position:relative; left:15px;">
<<<<<<< HEAD
                <a href="{{ url('approvevisit') }}" class="nav-link text-dark">
=======
                <a href="{{ url('/approvevisit') }}" class="nav-link">
>>>>>>> e0fc50c2d4b0ff5e5e1465f7b4c53e68693fb5d8
                <i class="nav-icon fa-solid fa-user"></i>
                  <p>Approve Visit</p>
                </a>
              </li>
            </ul>

            
          </li>

             
          <li class="nav-item">
         
              <li class="nav-item" >
                <a href="{{ url('/details_daycare') }}" class="nav-link text-dark">
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