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
          <h1 class="m-0">Day Care</h1>
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
  @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
<div class="card">
  
  <div class="card-header">Day Care Edit Page
  <span class="float-right">
                    <a class="btn btn-primary" href="{{ url('/daycare') }}">Back</a>
                </span>
  </div>


  <div class="card-body">

  <form method="POST" action="{{ route('operator.daycare.update', $user->id) }}">
        @csrf
        @method('PATCH')

        @if($user->img)
            <div style="margin-top:20px" class="form-group">
                <label for="current_img">Current Image:</label>
                <img src="{{ Storage::url($user->img)  }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px; max-height: 200px;">
            </div>
        @endif

        <div style="margin-top:20px" class="form-group">
            <label for="img">Image:</label>
            <input type="file" name="img" class="form-control" placeholder="Image">
        </div>

        <div style="margin-top:20px" class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" placeholder="Name">
        </div>

        <div style="margin-top:20px" class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" placeholder="Email">
        </div>

        <div style="margin-top:20px" class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" name="contact" value="{{ old('contact', $user->contact) }}" class="form-control" placeholder="Contact">
        </div>

        <div style="margin-top:20px" class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" value="{{ old('address', $user->address) }}" class="form-control" placeholder="Address">
        </div>
        
        <div style="margin-top:20px" class="form-group">
            <label for="facilities">Facility:</label>
            <input type="text" name="facilities" value="{{ old('facilities', $user->facilities) }}" class="form-control" placeholder="Facility">
        </div>

        <div style="margin-top:20px" class="form-group">
            <label for="rating">Rating:</label>
            <input type="number" name="rating" value="{{ old('rating', $user->rating) }}" class="form-control" placeholder="Facility">
        </div>


        <button style="margin-top:20px" type="submit" class="btn btn-primary">Submit</button>
    </form>


  </div>
</div></div>
@stop
