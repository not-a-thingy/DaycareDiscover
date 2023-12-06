@extends('layout')
@section('title', 'Add Visit')
@section('content')
    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header">Create Schedule </h5>
            <div class="card-body">
                <form action="{{route('addvisit.post')}}" method="POST" class="ms-auto me-auto" style="width: 500px">
                    @csrf
                    <div class="mb-3">
                        <label for="Visit_Date" class="form-label">Date</label>
                        <input type="date" id="date" name="date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Visit_Time" class="form-label">Time</label>
                        <input type="time" name="time" id="time" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        @if($message = Session::get('success'))
        <br>
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        <br>
        @elseif($message = Session::get('error'))
        <br>
        <div class="alert alert-error">
            <p>{{$message}}</p>
            </div>
        <br>
        @endif
        <div class="card mt-3">
            <h5 class="card-header">Visit Schedule</h5>
            <table class="table table-bordered">
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($visits as $row)
                <tr>
                    <td>{{$row['date']}}</td>
                    <td>{{$row['time']}}</td>
                    <td><a href="{{route('editvisit',$row['id'])}}" class="btn btn-success">Edit</a></td>
                    <td><form method="post" class="delete_form" action="{{route('deletevisit',$row['id'])}}">
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Do you really want to delete it?')">Delete</button>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection