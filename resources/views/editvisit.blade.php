@extends('layout')
@section('title', 'Edit Visit')
@section('content')
    <div class="container mt-3">
        <div class="card">
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        @endif
            <h5 class="card-header">Edit Schedule </h5>
            <div class="card-body">
                <form action="{{route('updatevisit',$id)}}" method="POST" class="ms-auto me-auto" style="width: 500px">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="Visit_Date" class="form-label">Date</label>
                        <input type="date" id="date" name="date" class="form-control" value="{{$visits->date}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="Visit_Time" class="form-label">Time</label>
                        <input type="time" name="time" id="time" class="form-control" value="{{$visits->time}}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection