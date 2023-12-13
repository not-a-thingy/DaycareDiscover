@extends('layout')
@section('title', 'Approval Visit')
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

        <h5 class="card-header">Approval Booking</h5>
            <div class="card-body">
                <form action="{{route('approvalvisit',$id)}}" method="POST" class="ms-auto me-auto" style="width: 500px">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="Book_Date" class="form-label">Date</label>
                        <select class="form-select" name="date" id="date" aria-label="Default select example" disabled>
                            <option selected="true" value="{{$books->date}}">{{$books->date}}</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Book_Time" class="form-label">Time</label>
                        <select class="form-select" name="time" id="time" aria-label="Default select example" disabled>
                            <option selected="true" value="{{$books->time}}">{{$books->time}}</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Approval" class="form-label">Status</label>
                        <select class="form-select" name="status" id="status" aria-label="Default select example">
                          <option selected="true" value="{{$books->status}}">{{$books->status}}</option>
                          <option value="Approval">approve</option>
                          <option value="Decline">decline</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection