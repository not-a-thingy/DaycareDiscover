@extends('layouts.app')
@section('content')

<style>
  .fa-eye{
        position: absolute;
        top: 35%;
        right: 5%;
        cursor: pointer;
        color: lightgray;
        
    }
  </style>
<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="height: 100px; background-image: url('/img/bg.jpg'); background-size: 900px; background-repeat: repeat;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div style="margin-left: 35px" class="col-sm-6">
          <h1 class="m-0">Change Password</h1>
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
            <div class="card-header">Change Password
                <span class="float-right">
                    <a style="float:right" class="btn btn-primary" href="{{ route('users.index') }}">Back</a>
                </span>
            </div>
<!-- ... your existing content ... -->

<div class="card-body" width="100%">
    <form method="POST" action="{{ route('users.change', $user->id) }}">
        @csrf
        @method('PATCH')

        <div style="margin-top:20px" class="form-group">
            <label for="password">New Password:</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="New Password (Minimum 8 characters)">
            <span class="fa-regular fa-eye" id="show-password" onclick="togglePasswordVisibility()"></span>
        </div>

        <div style="margin-top:20px" class="form-group">
            <label for="password_confirmation">Confirm New Password:</label>
            <input type="password" id="password" name="password_confirmation" class="form-control" placeholder="Confirm New Password">
             <i class="fa fa-eye" id="show-password" onclick="toggleConfirmPasswordVisibility()"></I>
        </div>

        <button style="margin-top:20px" type="submit" class="btn btn-primary">Update Password</button>
    </form>
</div>
<script src="https://kit.fontawesome.com/bc8e231302.js" crossorigin="anonymous"></script>
<script>
  function togglePasswordVisibility() {
        var passwordInput = document.getElementById('password');
        var eyeIcon = document.getElementById('show-password');

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        } else {
            passwordInput.type = "password";
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    }
    function toggleConfirmPasswordVisibility() {
        var passwordInput = document.getElementById('password-confirm');
        var eyeIcon = document.getElementById('show-password');

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');    
        } else {
            passwordInput.type = "password";
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    }
</script>
<br><br>

@endsection
