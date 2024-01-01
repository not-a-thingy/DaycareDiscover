@extends('layouts.app')

@section('content')
<style>
    body {
        background: url('img/bg.jpg');
    }
    .card{
        display: flex;
        align-items:center;
        justify-content:center;
    }
    .card-footer{
        border:none;
        background-color:transparent;
    }
    </style>
<div class="container" style="max-width:600px">
    <div class="card mt-4">
       
        <img src="{{ Storage::url($user->image)  }}" alt="User Image" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover; margin-bottom: 15px; margin-top: 15px;  margin-left:20px;">


        <div class="card-body">
            <div class="mb-3">
                <strong>Name:</strong> {{ $user->name }}
            </div>
            <div class="mb-3">
                <strong>Email:</strong> {{ $user->email }}
            </div>
            <div class="mb-3">
                <strong>Contact:</strong> {{ $user->contact }}
            </div>
            <div class="mb-3">
                <strong>Address:</strong> {{ $user->address }}
            </div>
            <div class="mb-3">
    <?php if ($user->role == 0): ?>
        <strong>Appointment Date:</strong> <?php echo $user->ap_date ?: 'Not Available'; ?>
    <?php endif; ?>
</div>

<div class="mb-3">
    <strong>Role:</strong>
    <?php
    if ($user->role == 1) {
        echo 'Admin';
    } elseif ($user->role == 2) {
        echo 'Operator';
    } else {
        echo 'Parent';
    }
    ?>
</div>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('users.editt', $user->id) }}" class="btn btn-primary">Edit Profile</a>
            <a href="{{ route('users.editpass', $user->id) }}" class="btn btn-secondary">Change Password</a>
            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete Account</button>
            </form>
        </div>
    </div>
</div>

@endsection
