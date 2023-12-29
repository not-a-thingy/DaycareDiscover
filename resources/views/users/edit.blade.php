@extends('layouts.app')
@section('content')




<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<script src="https://kit.fontawesome.com/bc8e231302.js" crossorigin="anonymous"></script>


<!-- Main Sidebar Container -->



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="height: 100px; margin:0;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div style="margin-left: 60px" class="col-sm-6">
          <h1 class="m-0">Profile</h1>
        </div><!-- /.col -->
        <div class="col-sm-10">
          <ol class="breadcrumb float-sm-right">

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<div class="nav_head" width=100%;>
<div class="container" >
    <div class="justify-content-center">
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
            <div class="card-header">Create user
                <span class="float-right">
                    <a style="float:right" class="btn btn-primary" href="{{ route('users.index') }}">Back</a>
                </span>
            </div>

   <div class="card-body">
    <form method="POST" action="{{ route('users.update1', $user->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-3">
          <label for="profile_image">Profile Image:</label>
          <img src="{{Storage::url($user->image)}}" alt="Profile Image" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
        </div>

        <!-- New image upload -->
        <div style="margin-top:20px" class="form-group">
            <label for="profile_image">Change Profile Image:</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div style="margin-top:20px" class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" placeholder="Name">
        </div>
        <div style="margin-top:20px" class="form-group">
            <label for="name">Contact:</label>
            <input type="text" name="contact" value="{{ old('contact', $user->contact) }}" class="form-control" placeholder="Contact">
        </div>

        <div style="margin-top:20px" class="form-group">
            <label for="name">Address:</label>
            <input type="text" name="address" value="{{ old('address', $user->address) }}" class="form-control" placeholder="Address">
        </div>
        <!-- <div style="margin-top:20px" class="form-group">
            <label for="ap_date">Appoinment Date:</label>
            <input type="date" name="ap_date" value="{{ old('ap_date', $user->ap_date) }}" class="form-control" placeholder="Appointment Date">
        </div> -->
       

        <div style="margin-top:20px" class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" value="{{ old('email', $user->email) }}" class="form-control" placeholder="Email">
        </div>


        <button style="margin-top:20px" type="submit" class="btn btn-primary">Submit</button>
    </form>

    
</div>
        </div><br><br><br>
    </div>
</div>
</div>
@endsection