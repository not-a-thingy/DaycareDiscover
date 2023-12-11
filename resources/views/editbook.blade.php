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

        <h5 class="card-header">Edit Booking</h5>
            <div class="card-body">
                <form action="{{route('updatebook',$id)}}" method="POST" class="ms-auto me-auto" style="width: 500px">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="Book_Date" class="form-label">Date</label>
                        <select class="form-select" name="date" id="date" aria-label="Default select example">
                            <option selected="true" value="{{$books->date}}">{{$books->date}}</option>
                            <option value="20-12-2023">20-12-2023</option>
                            <option value="21-12-2023">21-12-2023</option>
                            <option value="22-12-2023">22-12-2023</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Book_Time" class="form-label">Time</label>
                        <select class="form-select" name="time" id="time" aria-label="Default select example">
                            <option selected="true" value="{{$books->time}}">{{$books->time}}</option>
                            <option value="8:00am">8:00am</option>
                            <option value="9:00am">9:00am</option>
                            <option value="10:00am">10:00am</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>                    
                </form>
            </div>
        </div>
    </div>
@endsection