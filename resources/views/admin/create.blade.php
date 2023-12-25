@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<script src="https://kit.fontawesome.com/bc8e231302.js" crossorigin="anonymous"></script>
@include('layouts.sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="height: 100px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
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
                <div class="card-header">Create user
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('admin.index') }}">Back</a>
                    </span>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                        <p for="profile_picture">Profile Picture</p>
                        <input style="padding:0; padding-bottom:5px;" type="file" class="form-control-file" id="profile_picture" name="image" accept="image/*">
                       </div>

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" placeholder="Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" name="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Contact:</label>
                            <input type="text" name="contact" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Address:</label>
                            <input type="text" name="address" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password:</label>
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control">
                        </div>
                        <div class="form-group">
    <label for="role">Role:</label>
    <select onchange="setname()" name="role" class="form-control">
        <option value="2" >Operator</option>
        <option value="1" >Admin</option>
        <option value="0">Parent</option>
    </select>
</div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

   function setname(){
    let name = document.getElementById('role').value;
    let username = document.getElementById('name');

    if(name == 0){
        username.placeholder = "Your Name";

    }else if(name == 2){
        username.placeholder = "Your DayCare Name";

    }}
</script>
@endsection
