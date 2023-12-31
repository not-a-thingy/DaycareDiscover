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
          <h1 class="m-0">Day Care Info</h1>
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
            <div class="card-header">Day Care 
                
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('admin.verify.verify') }}">Back</a>
                    </span>
              
            </div>
            <div class="card-body">
  
  <div class="card-body">
  <h5 class="card-title">Name: {{ $user->name }}</h5>
<h5 class="card-text">Email: {{ $user->email }}</h5>
<h5 class="card-text">Contact: {{ $user->contact }}</h5>
<h5 class="card-text">Address: {{ $user->address }}</h5>
<h5 class="card-text">Facility: {{ $user->facilities }}</h5>
<h5 class="card-text">Rating: {{ $user->rating }}</h5>
<h5 class="card-text">Rating:  <?php if($user->verify == '0'){
                                                $data = 'Pending';
                                            }else if($user->verify == "1"){
                                                $data = "Verfied";
                                            } else{
                                                $data = "Rejected";
                                            }?>
            <button class="btn btn-sm  <?php if($data == 'Rejected'){
                echo ' btn-warning';
            }else if($data == 'Pending'){
                echo 'btn-info';
            }else{
                echo ' btn-success';
            }
       ?> "><?php echo $data?></button></h5>


</div>

</hr>

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