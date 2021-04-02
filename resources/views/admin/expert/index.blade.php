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
    <div class="page-title">
        <h3 class="breadcrumb-header"> Expertise <b>area</b></h3>
        <a href="{{route('experts.create')}}" class="cstm-btn btn btn-primary">Add Expert Area</a>
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
                                        <th> Name</th>
                                        <th> Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($experts as $expert)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{$expert->name}}</td>
                                        <td class="sorting_1">{!! $expert->description !!}</td>
                                        <td>
                                            <div class="action-btn">
                                                <button class="btn btn-success edit-btn">


                                                    <a class=""
                                                        href="{{route('experts.edit', ['expert' => $expert->id])}}">
                                                     
                                                        <img src="{{url('/')}}/assets/images/edit-icon.svg" alt="">
                                                    </a>
                                                </button>

                                              
                                                <button type="submit" class="btn btn-danger btn-sm delete-confirm" data-id="{{$expert->id}}" data-name="{{ $expert->name }}"> 
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
            url: "{{route('experts.store')}}"+'/'+id, 
            type: "DELETE", 
            data:{id:id,
                "_token": "{{ csrf_token() }}",},  
            success:function(data){
               location.reload();
                
                
           }  

       });  
        }
      });
  });
</script>
@endsection