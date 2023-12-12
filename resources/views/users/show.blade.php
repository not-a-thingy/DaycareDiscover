@extends('layouts.app')

@section('content')

<div class="container" width="100%">
    <div class="card mt-4">
        <div class="card-header bg-info text-white">
            User Profile
        </div>
        <div class="card-body">
            <div class="mb-3">
                <strong>Name:</strong> {{ $user->name }}
            </div>
            <div class="mb-3">
                <strong>Email:</strong> {{ $user->email }}
            </div>
            <div class="mb-3">
                <strong>Role:</strong>  <?php if($user->role == 1){
                                        echo 'Admin';
                                    }else if($user->role == 2) {
                                        echo 'Operator';
                                    }else{
                                        echo 'Parent';
                                    }?>
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
