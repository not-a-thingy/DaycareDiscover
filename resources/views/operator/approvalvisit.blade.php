@extends('layouts.nav_operator')
@section('content')

<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<script src="https://kit.fontawesome.com/bc8e231302.js" crossorigin="anonymous"></script>


<!-- Main Sidebar Container -->



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="height: 100px; margin:0; background-image: url('/img/bg.jpg'); background-size: 900px; background-repeat: repeat;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Appointment</h1>
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
@if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        @endif
  <div class="card-header">Approval Booking
  <span class="float-right">
                    <a class="btn btn-primary" href="{{ url('approvevisit') }}">Back</a>
                </span>
  </div>
  <div class="card-body">
      
      <form action="{{route('approvalvisit',$id)}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method('PUT')
        <label for="Book_Date" class="form-label">Date</label>
        <select class="form-select" name="date" id="date" aria-label="Default select example" disabled>
             <option selected="true" value="{{$books->date}}">{{$books->date}}</option>
        </select><br>

        <label for="Book_Time" class="form-label">Time</label>
        <select class="form-select" name="time" id="time" aria-label="Default select example" disabled>
            <option selected="true" value="{{$books->time}}">{{$books->time}}</option>
        </select><br>

        <label for="Approval" class="form-label">Status</label>
        <select class="form-select" name="status" id="status" aria-label="Default select example">
            <option selected="true" value="{{$books->status}}">{{$books->status}}</option>
            <option value="Approval">approve</option>
            <option value="Decline">decline</option>
        </select><br>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

  </div>
</div></div>
@stop