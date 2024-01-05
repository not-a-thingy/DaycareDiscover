@extends('layouts.app')
@section('content')




<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<script src="https://kit.fontawesome.com/bc8e231302.js" crossorigin="anonymous"></script>


<!-- Main Sidebar Container -->
@include('layouts.sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="height: 100px;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Users</h1>
        </div><!-- /.col -->
        <div class="col-sm-10">
          <ol class="breadcrumb float-sm-right">

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header"> <strong> User </strong>
              
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('admin.index') }}">Back</a>
                    </span>
              
            </div>
            <img src="{{ Storage::url($user->image)  }}" alt="User Image" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover; margin-bottom: 15px; margin-top: 15px;  margin-left:20px;">
            <div class="card-body">
                <div class="lead">
                    <strong style="font-weight: bold;">Name:</strong>
                    {{ $user->name }}
                </div>
                <div class="lead">
                    <strong style="font-weight: bold;">Email:</strong>
                    {{ $user->email }}
                </div>
                <div class="lead">
                <strong style="font-weight: bold;">Contact:</strong> {{ $user->contact }}
            </div>
            <div class="lead">
                <strong style="font-weight: bold;">Address:</strong> {{ $user->address }}
            </div>
                <div class="lead">
                    <strong style="font-weight: bold;">Role:</strong>
                    <?php if($user->role == 1){
                                        echo 'Admin';
                                    }else if($user->role == 2) {
                                        echo 'Operator';
                                    }else{
                                        echo 'Parent';
                                    }?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

@endsection