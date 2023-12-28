@extends('layouts.app')
@section('title', 'Book Visit')
@section('content')

<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<script src="https://kit.fontawesome.com/bc8e231302.js" crossorigin="anonymous"></script>

<style>
  h5{
    margin-bottom: 20px;
  }
  </style>
<!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin:0; height: 100px; width:100%;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Day Care Info</h1>
        </div><!-- /.col -->
        <div class="col-sm-10">
          <ol class="breadcrumb float-sm-right">

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <div class="container" style= "width:100%;">
<div class="card" style="width:100%;">
  <div class="card-header">Day Care View Page
  <span class="float-right">
                    <a class="btn btn-primary" href="{{ url('') }}">Back</a>
                </span>
  </div>
  </div>
  
  <div class="card-body">
  
        <div class="card-body">

            <div class="container mt-3">
                <div class="card">
                    <h5 class="card-header">Book To Visit Daycare Facility </h5>
                    <div class="card-body">
                        <form action="{{ route('bookvisit.post') }}" method="POST" id="book_visit" class="ms-auto me-auto" style="width: 500px">
                            @csrf
                            <div class="mb-3">
                                <label for="VisitDate" class="form-label">Date</label>
                                <select class="form-select" name="date" id="date" aria-label="Default select example">
                                    <option selected="true" disabled="disabled">Select a date</option>
                                    @foreach($availDate as $row1)
                                    <option value="{{$row1['date']}}">{{$row1['date']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="time" class="form-label">Time</label>
                                <select class="form-select" name="time" id="time" aria-label="Default select example">
                                    <option selected="true" disabled="disabled">Please select a date first</option>                           
                                    <option value="time"><div id="times"></div></option>                   
                                </select>
                            </div>
        
                            <button type="submit" form="book_visit" class="btn btn-primary">Submit</button>
                        </form>
        
                        <script>
                            document.getElementById('date').addEventListener('change', function() {
                                var date = this.value;
                                fetch('/availTime', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                                    },
                                    body: JSON.stringify({ date: date })
                                })
                                .then(response => response.json())
                                .then(data => {
                                    var timeSelect = document.getElementById('time');
                                    timeSelect.innerHTML = '';
                                    data.times.forEach(function(time) {
                                        var option = document.createElement('option');
                                        option.value = time;
                                        option.textContent = time;
                                        timeSelect.appendChild(option);
                                    });
                                });
                            });
                            </script>
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
                    <h5 class="card-header">Your Booking Status</h5>
                    <div class="card-body">
        
                        <table class="table table-bordered">
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Cancel Booking</th>
                            </tr>
                            @foreach($books as $row)
                            <tr>
                                <td>{{$row['date']}}</td>
                                <td>{{$row['time']}}</td>
                                <td>{{$row['status']}}</td>
                                @if ($row['status']!='pending')
                                    <td></td>
                                
                                @elseif($row['status']=='pending')
                                <td><a href="{{route('editbook',$row['id'])}}" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a></td>
                                <td><form method="POST" id="delete_form_{{$row['id']}}" class="delete_form" action="{{route('cancelbook',$row['id'])}}">
                                    @csrf
                                    
                                    <button type="submit" form="delete_form_{{$row['id']}}" class="btn btn-danger" onclick="return confirm('Do you really want to cancel it?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Cancel</button>                   
                                </td></form>
                                @endif
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

  </div>

  </div>
</div></div>
@stop