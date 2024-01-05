@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<script src="https://kit.fontawesome.com/bc8e231302.js" crossorigin="anonymous"></script>


<!-- Main Sidebar Container -->
@include('layouts.sidebar_operator')
<body> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="height: 100px; background-image: url('/img/bg.jpg'); background-size: 900px; background-repeat: repeat;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add New Daycare</h1>
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
  <div class="card-header">Edit Day Care Info
  <span class="float-right">
                    <a class="btn btn-primary" href="{{ url('/daycare') }}">Back</a>
                </span>
  </div>
  <div class="card-body">
      
  <form action="{{ route('operator.daycare.store') }}" method="post" enctype="multipart/form-data">


        {!! csrf_field() !!}

        <label>Images</label><br>
<input type="file" name="img" id="img" class="form-control" multiple required><br>


  <label>Name</label><br>
<input type="text" name="name" id="name" class="form-control" required><br>

<label>Email</label><br>
<input type="email" name="email" id="email" class="form-control" required><br>

<label>Contact</label><br>
<input type="text" name="contact" id="contact" class="form-control" required><br>

<label>Address</label><br>
<input type="text" name="address" id="address" class="form-control" required><br>



<label>Daycare Landmark/Website</label><br>
<input type="text" name="landmark" id="address2" class="form-control" required><br>

<label>Facility</label><br>
<textarea rows="2" name="facilities" id="facilities" class="form-control" required></textarea>



<!--<label>Rating</label><br>
<input type="number" name="rating" min="1" max="5" default="5" id="rating" class="form-control" required><br>-->
<br>

<label>Daycare License</label><br>
<input type="file"  accept="image/*" name="lisence" id="address1" class="form-control" required><br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div></div>

</body>
@stop