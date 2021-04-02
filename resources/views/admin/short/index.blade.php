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
        <h3 class="breadcrumb-header">Short <b>Code</b></h3>
        <a href="{{route('shorts.create')}}" class="cstm-btn btn btn-primary">Add Short code</a>
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
                                        <th>Option Name</th>
                                       
                                        <th> Short Code</th>
                                        <th> Value</th>
                                        <th> Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $count = 0; ?>
                                @foreach($shorts as $short)
                                    <tr role="row" class="odd">
                                    @foreach($options as $option)
                                    <?php $count++; ?>
                                    @if($short->opt_id == $option->id)
                                        <td class="sorting_1">{{$option->name}}</td>
                                        <?php $count = 0; ?>
                                        @break
                                        @elseif(count($options) == $count)
                                        <td class="sorting_1"></td>
                                        <?php $count = 0; ?>
                                    @endif
                                    @endforeach    
                                        
                                        <td class="sorting_1">{{$short->short_code}}</td>
                                        <td class="sorting_1">{{$short->value}}</td>
                                        <td class="sorting_1">{{$short->description}}</td>
                                        <td>
                                            <div class="action-btn">
                                                <button class="btn btn-success edit-btn">
                                                    <a href="{{route('shorts.edit', ['short' => $short->id])}}">
                                                       
                                                        <img src="{{url('/')}}/assets/images/edit-icon.svg" alt="">
                                                    </a>
                                                </button>

                                             
                                                <button type="submit" class="btn btn-danger btn-sm delete-confirm" data-id="{{$short->id}}" data-name="{{ $short->name }}">
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
            url: "{{route('shorts.store')}}"+'/'+id, 
            type: "DELETE",  
            data:{id:id,
                "_token": "{{ csrf_token() }}"},  
            success:function(data){
               location.reload();
                
               
           }  

       });  
        }
      });
  });
</script>

@endsection