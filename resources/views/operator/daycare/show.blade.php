<!--@extends('layouts.nav_operator')-->
@section('content')
<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
<script src="https://kit.fontawesome.com/bc8e231302.js" crossorigin="anonymous"></script>

<!-- Main Sidebar Container -->



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="height: 100px; background-image: url('/img/bg.jpg'); background-size: 900px; background-repeat: repeat; margin:0;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Daycare Info</h1>
        </div><!-- /.col -->
        <div class="col-sm-10">
          <ol class="breadcrumb float-sm-right">

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <div class="container" style= "margin: left 50;">
<div class="card">
  <div class="card-header">Daycare View Page
  <span class="float-right">
                    <a class="btn btn-primary" href="{{ url('/daycare') }}">Back</a>
                </span>
  </div>
  </div>
   <div class="contain mb-3 mx-auto" style="width: 75%; margin-bottom:30px;">
  <div class="card mx-auto" style="width:75%px; margin:auto; padding:30px">
  <img src="{{ asset(Storage::url($course->img)) }}" class="card-img-top" alt="Daycare images" style="max-width: 50%; height: auto;">
        <div class="card-body"  style="width: 75%">
       
        <h5 class="card-title"><Strong>Name:</strong> {{ $course->name }}</h5>
<h5 class="card-text"><Strong>Email:</strong> {{ $course->email }}</h5>
<h5 class="card-text"><Strong>Landmark:</strong> {{ $course->landmark }}</h5>
<h5 class="card-text"><Strong>Contact:</strong> {{ $course->contact }}</h5>
<h5 class="card-text"><Strong>Address:</strong> {{ $course->address }}</h5>
<h5 class="card-text"><Strong>Facility:</strong> {{ $course->facilities }}</h5>
<label for="License:"><Strong>License:</strong> </label><br>
<img src="{{ asset(Storage::url($course->lisence)) }}" class="card-img-top" alt="Daycare Liscense" style="max-width: 50%; height: auto;">

  </div> 
    </hr>
  </div>
</div></div>
</div>

<br><br>

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
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

<script>

$(document).ready(function() {
    $('#ListCourse').DataTable();
} );
</script>
    



@endsection


