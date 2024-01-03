@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<script src="https://kit.fontawesome.com/bc8e231302.js" crossorigin="anonymous"></script>

<style>
  h5{
    margin-bottom: 20px;
  }
  </style>
<!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin: 0; height: cover; background-image: url('/img/bg.jpg'); background-size: 900px; background-repeat: repeat;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
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
  <div class="container" style= "width:100%;">
<div class="card" style="width:100%;">
  <div class="card-header">Day Care View Page
  <span class="float-right">
                    <a class="btn btn-primary" href="{{ url('/details_daycare') }}">Back</a>
                </span>
  </div>
  </div>
  
  <div class="card" style="width:100%;">

    <div class="card" style="width:100%;">
      <div class="card-header">
        @if (Auth::user()->role == '0')
        <span class="float-right">
          <a class="btn btn-primary" href="{{ url('/bookvisit/' . $course->id) }}">Book a visit</a>
        </span>
        @endif
      </div>
    </div>
  
        <div class="card-body">
          <div class="img-box" style="height:50%; width:50%; display: block; margin-left: auto; margin-right: auto;">	      
            <img style="width:100%; height:100%; object-fit:cover; " src="{{ Storage::url($course->img)  }}" class="img-fluid" alt="">	
          </div>
          <div class="card-line" style="border-bottom: 2px solid black; padding: 10px;"> </div>       
            <h5 class="card-text">Name: {{ $course->name }}</h5>
            <h5 class="card-text">Email: {{ $course->email }}</h5>
            <h5 class="card-text">Contact: {{ $course->contact }}</h5>
            <h5 class="card-text">Address: {{ $course->address }}</h5>
            <h5 class="card-text">Facility: {{ $course->facilities }}</h5>
            <h5 class="card-text">Rating: {{ $course->rating }}</h5>


  </div>
  
  </div>
</div>
</div>
@stop
