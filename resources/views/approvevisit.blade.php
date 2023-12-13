@extends('layout')
@section('title', 'Approve Visit')
@section('content')
    <div class="container mt-3">
      @if($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{$message}}</p>
      </div>
      @endif
        <div class="card">
            <h5 class="card-header">Manage Visit Daycare Facility </h5>
            <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>status</th>
                    <th>Action</th>
                </tr>
                @foreach($books as $row)
                <tr>
                    <td>{{$row['date']}}</td>
                    <td>{{$row['time']}}</td>
                    <td>{{$row['status']}}</td>
                    <td><a href="{{route('approvalvisit',$row['id'])}}" class="btn btn-success">Action</a></td>
                </tr>
                @endforeach
            </table>
            </div>
        </div>
    </div>
@endsection