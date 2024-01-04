@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<script src="https://kit.fontawesome.com/bc8e231302.js" crossorigin="anonymous"></script>


<!-- Main Sidebar Container -->
@include('layouts.sidebar_operator')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="height: 100px; background-image: url('/img/bg.jpg'); background-size: 900px; background-repeat: repeat;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Schedule</h1>
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
  <div class="card-header">Update Schedule
  <span class="float-right">
                    <a class="btn btn-primary" href="{{ url('/viewvisit') }}">Back</a>
                </span>
  </div>
  <div class="card-body">
      
      <form action="{{route('updatevisit',$id)}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method('PUT')
        <label for="Visit_Date" class="form-label">Date</label>
        <input type="date" id="date" name="date" class="form-control" value="{{$visits->date}}" required><br>

        <label for="Visit_Time" class="form-label">Time</label>
        <input type="time" name="time" id="time" class="form-control" value="{{$visits->time}}" required><br>

        <label for="Approval" class="form-label">Daycare</label>
        <select class="form-select" name="daycare" id="daycare" aria-label="Default select example" disabled>
        @foreach($daycare as $row1)
        <option value="{{$row1['id']}}">{{$row1['name']}}</option>
        @endforeach
        </select><br>

      <input type="submit" value="Edit" class="btn btn-success"></br>
    </form>
    <form method="post" class="delete_form" action="{{route('deletevisit',$id)}}">
      @csrf
      <button type="submit" class="btn btn-danger" onclick="return confirm('Do you really want to delete it?')">Delete</button>
    </form>

  </div>
</div></div>
@stop