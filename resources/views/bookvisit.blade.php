@extends('layout')
@section('title', 'Book Visit')
@section('content')
    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header">Book To Visit Daycare Facility </h5>
            <div class="card-body">
                <form action="{{route('bookvisit.post')}}" method="POST" class="ms-auto me-auto" style="width: 500px">
                    @csrf
                    <div class="mb-3">
                        <label for="VisitDate" class="form-label">Date</label>
                        <select class="form-select" name="date" id="date" aria-label="Default select example">
                            <option selected>Select a date</option>
                            <option value="20-12-2023">20-12-2023</option>
                            <option value="21-12-2023">21-12-2023</option>
                            <option value="22-12-2023">22-12-2023</option>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="VisitTime" class="form-label">Time</label>
                        <select class="form-select" name="time" id="time" aria-label="Default select example">
                            <option selected>Select a time</option>
                            <option value="8:00am">8:00am</option>
                            <option value="9:00am">9:00am</option>
                            <option value="10:00am">10:00am</option>
                          </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="card mt-3">
            <h5 class="card-header">Your Booking Status</h5>
            <div class="card-body">
                <p>Your booking request has been  </p>
            </div>
        </div>
    </div>
@endsection