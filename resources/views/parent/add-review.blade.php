@extends('layouts.app')
@section('title', 'Add Review')
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
  <div class="content-wrapper" style="margin:0; height: cover; width:cover; background-image: url('/img/bg.jpg'); background-size: cover; background-repeat: repeat;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Review</h1>
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
  <div class="card-header">Day Care:<b> {{$daycare->name}} </b>
  <span class="float-right">
                    <a class="btn btn-primary" href="{{ url('/details_daycare/' . $daycare->id . '/show') }}">Back</a>
                </span>
  </div>
</div>
  
  <div class="card" style="width:100%;">
        
            <div class="card-body">
                <h5 class="card-text">Name: {{ $daycare->name }}</h5>
                <h5 class="card-text">Email: {{ $daycare->email }}</h5>
                <h5 class="card-text">Contact: {{ $daycare->contact }}</h5>
                <h5 class="card-text">Address: {{ $daycare->address }}</h5>
                <h5 class="card-text">Facility: {{ $daycare->facilities }}</h5>
                <h5 class="card-text">Rating: {{ $daycare->rating }}</h5>
        
        
            </div>
            <form class="card-footer" method="POST" action="{{ route('parent.add_review') }}">
                @csrf
                @method('POST')
                <input type="hidden" value="{{ Auth::user()->id }}" name="parent_id">
                <input type="hidden" value="{{ $daycare->id }}" name="daycare_id">
                <div class="form-group ">
                    <textarea name="review_comment" id="remember-me" class="w-100" rows="3" 
                    placeholder="Review comment"> Review comment
                    </textarea>
                </div>
                <input type="submit" value="Submit" class="btn btn-primary">
            </form>

  </div>

  </div>
</div></div>
@stop