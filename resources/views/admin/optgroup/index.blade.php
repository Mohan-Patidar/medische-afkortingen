@extends('layouts.adminlayout')

@section('content')

<div class="page-inner ad-inr">
    @if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">×</span></button>
        <p>{{ Session::get('message') }}</p>
    </div>
    @endif
    <div class="page-title d-flex align-items-center justify-content-between">
        <h3 class="breadcrumb-header">Option <b>Code</b></h3>
        <a href="{{route('options.create')}}" class="cstm-btn btn btn-primary">Add Option </a>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-body">
                        <div class="add-expertise">
                            
                        </div>
                      
                        <div class="table-responsive cstm-data-table">
                            <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                <thead>
                                    <tr>
                                        <th>Expertise Name</th>
                                        <th> Option Group </th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($options as $option)
                                    <tr role="row" class="odd">
                                    @foreach($experts as $expert)
                                    @if($option->ex_id == $expert->id)
                                        <td class="sorting_1">{{$expert->name}}</td>
                                    @endif
                                    @endforeach    
                                        <td class="sorting_1">{{$option->name}}</td>
                                        <td>
                                            <div class="action-btn">
                                                <button class="btn btn-success edit-btn">
                                                    <a href="{{route('options.edit', ['option' => $option->id])}}">
                                                    
                                                        <img src="{{url('/')}}/assets/images/edit-icon.svg" alt="">
                                                    </a>
                                                </button>

                                              
                                                <button type="submit" class="btn btn-danger btn-sm delete-confirm" data-id="{{$option->id}}" data-name="{{ $option->name }}">
                                                <img src="{{url('/')}}/assets/images/trash-icon.svg" alt="">
                                                    </button>  
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
</div>
@endsection
@section('additionalscripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script>
$('.delete-confirm').click(function(event) {
      var form =  $(this).closest("form");
      var name = $(this).data("name");
      var id = $(this).data("id");
      event.preventDefault();
      swal({
          title: `Are you sure you want to delete ${name}?`,
         
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            $.ajax({
            url: "{{route('options.store')}}"+'/'+id, 
            type: "DELETE",  
            data:{id:id,
                "_token": "{{ csrf_token() }}",
            },  
            success:function(data){
               location.reload();
                
               
           }  

       });  
        }
      });
  });
</script>

@endsection