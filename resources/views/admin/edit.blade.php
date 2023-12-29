@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<script src="https://kit.fontawesome.com/bc8e231302.js" crossorigin="anonymous"></script>

<!-- Main Sidebar Container -->
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
                    <ol class="breadcrumb float-sm-right"></ol>
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
                <div class="card-header">Edit User
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('admin.index') }}">Back</a>
                    </span>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.update', $user->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" name="email" value="{{ old('email', $user->email) }}" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
    <label for="role">Role:</label>
    <select name="role" class="form-control">
        <option value="2" {{ old('role', $user->role) == '2' ? 'selected' : '' }}>Operator</option>
        <option value="1" {{ old('role', $user->role) == '1' ? 'selected' : '' }}>Admin</option>
        <option value="0" {{ old('role', $user->role) == '0' ? 'selected' : '' }}>Parent</option>
    </select>
</div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
