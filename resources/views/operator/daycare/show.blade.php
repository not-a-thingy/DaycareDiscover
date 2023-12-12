@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<script src="https://kit.fontawesome.com/bc8e231302.js" crossorigin="anonymous"></script>


<!-- Main Sidebar Container -->
@include('layouts.sidebar_operator')

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
  <div class="container" style= "margin: left 50;">
<div class="card">
  <div class="card-header">Day Care View Page
  <span class="float-right">
                    <a class="btn btn-primary" href="{{ url('/daycare') }}">Back</a>
                </span>
  </div>
  </div>
  
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name: {{ $course->name }}</h5>
<h5 class="card-text">Email: {{ $course->email }}</h5>
<h5 class="card-text">Contact: {{ $course->contact }}</h5>
<h5 class="card-text">Address: {{ $course->address }}</h5>
<h5 class="card-text">Facility: {{ $course->facilities }}</h5>
<h5 class="card-text">Rating: {{ $course->rating }}</h5>


  </div>
      
    </hr>
  
  </div>
</div></div>
@stop