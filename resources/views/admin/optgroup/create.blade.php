@extends('layouts.adminlayout')

@section('content')

<div class="page-inner ad-inr">
  
      <div class="page-title">
        <h3 class="panel-header">Add Option <b>Group</b></h3>
       <a href="{{url('/options')}}" class="cstm-btn btn btn-primary">
                                                < Back</a> 
    </div>
      <div class="inr-page-sec">
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-body">
                        @if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">×</span></button>
        <p>{{ Session::get('message') }}</p>
    </div>
    @endif
                        <form  id="optform" class="form-opt" action="javascript:void(0)"
                            enctype="" >
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Expertise Name</label>
                                        <select class="form-control select2" name="ex_id" id="ex_id">
                                        <option value="" disabled selected>Choose a diagnosis ...</option>
                                        @foreach(range('A', 'Z') as $char)
                                           @foreach($experts as $expert)
                                           @if(strtolower($expert->name[0])==strtolower($char))
                                            <option value="{{$expert->id}}" >{{$expert->name}}</option>
                                            @endif
                                            @endforeach
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Option Group</label>
                                        <input type="text" placeholder="Option Group" required name="name" id="optgroup"
                                            class="form-control ">
                                            <span class="text-danger p-1">{{ $errors->first('name') }}</span>    
                                    </div>
                                </div>
                               
                            </div>
                            
                          
                            <button type="submit" class="cstm-btn margin-top-15 " name="save" id="saveopt" value="saveadd">Add Option Group</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection


