@extends('layouts.adminlayout')

@section('content')

@if(Session::has('message'))
<p>{{ Session::get('message') }}</p>
@endif

<div class="page-inner ad-inr">
   
        <div class="page-title">
            <h3 class="panel-header">Edit Options<b>code</b></h3>
            <a href="{{url('/options')}}" class="cstm-btn btn btn-primary">
                < Back</a>
        </div>
         <div class="inr-page-sec">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                 
                    <div class="panel panel-white">
                       
                       
                        <div class="panel-body">
                            <form  method="Post"
                                action="{{route('options.update', ['option' => $options->id])}}"
                                enctype="multipart/form-data" >
                                <input type="hidden" name="_method" value="PUT">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Expertise Name</label> 
                                            <select class="form-control select2" name="ex_id">
                                            <option value="" disabled selected>Choose a diagnosis ...</option>
                                          
                                                @foreach($experts as $expert)
                                               
                                                <option value="{{$expert->id}}" 
                                                <?php
                                                if($options->ex_id == $expert->id){ 
                                                 echo 'selected="selected"'; }?> >
                                                {{$expert->name}} </option>
                                                
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Option Group</label>
                                            <input type="text" placeholder="Option Group" name="name"
                                                id="optgroup" class="form-control" value="{{$options->name}}">
                                        </div>
                                    </div>
                                   
                                    
                                </div>
                                <button type="submit" class="cstm-btn margin-top-15">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection