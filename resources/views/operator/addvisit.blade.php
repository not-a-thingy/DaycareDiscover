@extends('layouts.nav_operator')
@section('content')

<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<script src="https://kit.fontawesome.com/bc8e231302.js" crossorigin="anonymous"></script>


<!-- Main Sidebar Container -->
<div> 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="height: 100px; margin:0; background-image: url('/img/bg.jpg'); background-size: 900px; background-repeat: repeat;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-10">
          <ol class="breadcrumb float-sm-right">

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <div class="container" style= "margin: left 50;">
<div class="card">
  <div class="card-header">Create Schedule
  <span class="float-right">
                    <a class="btn btn-primary" href="{{ url('/daycare') }}">Back</a>
                </span>
  </div>
  <div class="card-body">
      
      <form action="{{route('addvisit.post')}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}

        <label for="Visit_Date" class="form-label">Date</label>
        <input type="date" id="date" name="date" class="form-control" required><br>

        <label for="Visit_Time" class="form-label">Time</label>
        <input type="time" name="time" id="time" class="form-control" required><br>

        <label for="Approval" class="form-label">Daycare</label>
        <select class="form-select" name="daycare" id="daycare" aria-label="Default select example" required>
        @foreach($availDaycare as $row1)
        <option value="{{$row1['id']}}">{{$row1['name']}}</option>
        @endforeach
        </select><br>

      <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
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
  </div>
</div></div>
</body>

@stop