@extends('layout')
@section('title', 'Add Visit')
@section('content')
    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header">Book To Visit Daycare Facility </h5>
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
        <div class="card mt-3">
            <h5 class="card-header">Booking Requests</h5>

        </div>
    </div>
@endsection