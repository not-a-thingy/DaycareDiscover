@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
<script src="https://kit.fontawesome.com/bc8e231302.js" crossorigin="anonymous"></script>


<!-- Main Sidebar Container -->
@include('layouts.sidebar_operator')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="height: 100px; background-image: url('img/bg.jpg'); background-size: 900px; background-repeat: repeat;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Schedule Info</h1>
        </div><!-- /.col -->
        <div class="col-sm-10">
          <ol class="breadcrumb float-sm-right">

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
    <div class="container" style="margin: left 60px; width:100%">
        
        <div class="row" style="width:100%">
            <div class="col-md-9" style="width:100%">
                <div class="card" style="width:100%">
                    <div class="card-header">Day Care</div>
                    <div class="card-body">
                        <a href="{{ url('addvisit') }}" class="btn btn-success btn-sm" title="Add New Schedule">
                       
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br>
                        <div class="table-responsive">
                            <table id="ListCourse" class="table">
                                <thead>
                                    <tr>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Daycare</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                @foreach($visits as $row)
                                    <tr>
                                    <td>{{$row['date']}}</td>
                                    <td>{{$row['time']}}</td>
                                    <td>{{$row['name']}}</td>
                                    <td><a href="{{route('editvisit',$row['id'])}}">
                                      <button class="btn btn-primary btn-sm">
                                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modify
                                     </button>
                                    </a></td>
                                    </tr>
                                @endforeach
                               
                           
                            
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

<script>

$(document).ready(function() {
    $('#ListCourse').DataTable();
} );
</script>


@endsection