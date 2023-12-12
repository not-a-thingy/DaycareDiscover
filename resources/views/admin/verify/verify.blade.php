@extends('layouts.app')
@section('content')



@include('layouts.sidebar')
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
  <script src="https://kit.fontawesome.com/bc8e231302.js" crossorigin="anonymous"></script>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="height: 100px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Verify Day Care</h1>
          </div><!-- /.col -->
          <div class="col-sm-10">
            <ol class="breadcrumb float-sm-right">

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="container" >
  
    <div class="justify-content-center">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <br>
        <div class="card">
         
            <div  class="card-body">
                <table id="ListUser" class="table">
                    <thead class="thead-dark">
                        <tr>
                           
                            <th>Name</th>
                            <th>Email</th>        
                            <th>Facility</th>
                            <th>Verify</th>
                            
                            <th width="150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $user)
                            <tr>
                                
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->facilities }}</td>
                                <td>
                                <div class="action-buttons d-flex">
                                            <?php if($user->verify == '0'){
                                                $data = 'Pending';
                                            }else if($user->verify == "1"){
                                                $data = "Verfied";
                                            } else{
                                                $data = "Rejected";
                                            }?>
            <button class="btn btn-sm  <?php if($data == 'Rejected'){
                echo ' btn-danger';
            }else if($data == 'Pending'){
                echo 'btn-info';
            }else{
                echo ' btn-success';
            }
       ?> "><?php echo $data?></button>
        </div>
                                </td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('admin.verify.show',$user->id) }}">Show</a>
                                    
                     
                                    <a class="btn btn-primary" href="{{ route('admin.verify.edit',$user->id) }}">Verify</a>
                                    
                                  
     
           
                                  
                                     
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
               
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
    $('#ListUser').DataTable();
} );
</script>
@endsection
