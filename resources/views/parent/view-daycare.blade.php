@extends('parent.parent-base')
@section('title','Day Care | Parent Dashboard')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="height: 100px; width: 80%; ">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
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
<div class="container" style="margin: left 60px; width:100%">
        
    <div class="row" style="width:100%; ">
        <div class="col-md-9" style="width:100%">
            <div class="card" style="width:100%;">
                <div class="card-header">Day Care</div>
                <div class="card-body" style="">
                    {{-- <a href="{{ url('/daycare/create') }}" class="btn btn-success btn-sm" title="Add New Day Care">
                   
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a> --}}
                    <br/>
                    <br>
                    <div class="table-responsive">
                        <table id="ListCourse" class="table">
                            <thead>
                                <tr>
                                
                                <th> Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th width="170px">Address</th>
                               
                                <th>Rate</th> 
                                <th>Verify</th>               
                                <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                             
                            @foreach($daycares as $item)
                                <tr>
                                    
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->contact }}</td>
                                    <td width="170px">{{ $item->address }}</td>
                                      
                                    <td>{{$item->rating}}</td>
                                    <td> <div class="action-buttons d-flex">
                                        <?php if($item->verify == '0'){
                                            $data = 'Pending';
                                        }else if($item->verify == "1"){
                                            $data = "Verfied";
                                        } else{
                                            $data = "Rejected";
                                        }?>
        <button class="btn btn-sm  <?php if($data == 'Rejected'){
            echo ' btn-warning';
        }else if($data == 'Pending'){
            echo 'btn-info';
        }else{
            echo ' btn-success';
        }
   ?> "><?php echo $data?></button>
    </div></td>
                                   
                                   <td> <div class="action-buttons d-flex">
          
            @if($item->firstReview())
            <a href="{{ route('parent.edit_review',$item->id) }}" title="Edit Daycare" class="mr-2">
                <button class="btn btn-primary btn-sm">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Review
                </button>
            </a>
            <form method="POST" action="{{ route('parent.delete_review',$item->firstReview()->id)}}" accept-charset="UTF-8" style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-sm" title="Delete Daycare" onclick="return confirm(&quot;Confirm delete?&quot;)">
                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                </button>
            </form>
            @else
            <a href="{{ route('parent.create_review',$item->id) }}" title="View Daycare" class="mr-2">
                <button class="btn btn-info btn-sm">
                    <i class="fa fa-eye" aria-hidden="true"></i>Add Review
                </button>
            </a>
            @endif
           
        </div>
                                    </td>
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
@endsection