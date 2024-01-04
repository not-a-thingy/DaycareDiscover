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
          @if($course->firstReview())
            <a href="{{ route('parent.edit_review',$course->id) }}" title="Edit Daycare" class="mr-2">
                <button class="btn btn-primary btn-sm">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Review
                </button>
            </a>
            @else
            <a href="{{ route('parent.create_review',$course->id) }}" title="View Daycare" class="mr-2">
                <button class="btn btn-info btn-sm">
                    <i class="fa fa-eye" aria-hidden="true"></i>Add Review
                </button>
            </a>
            @endif
        </span>
        @endif
      </div>
    </div>
  
        <div class="card-body">
        <h5 class="card-text">Name: {{ $course->name }}</h5>
<h5 class="card-text">Email: {{ $course->email }}</h5>
<h5 class="card-text">Contact: {{ $course->contact }}</h5>

<div><label for="License:">License: </label></div>
<img style="width:500px; 400px;" src="{{ asset(Storage::url($course->lisence)) }}" class="card-img-top" alt="..."><br>
<h5 class="card-text mt-4">landmark: {{ $course->landmark }}</h5>


<h5 class="card-text">Address: {{ $course->address }}</h5>
<h5 class="card-text">Facility: {{ $course->facilities }}</h5>
<h5 class="card-text">Rating: {{ $course->rating }}</h5>


  </div>
  
  </div>
</div>
</div>
@stop
