@extends('admin.master')

@section('title')
	Change Basic Information
@endsection

@section('mainContent')
	<div id="page-wrapper"><br>
    <h3 class="text-center text-primary"> Change Basic Info</h3>

<div class="row">
        <div class="col-lg-12">
            <h4 class="text-center text-success">{{Session::get('message')}}</h4>         
        <div class="well">
                   
<h3 class="text-center text-success">{{Session::get('message')}}</h3>  
            {!! Form::open(['url'=>'/admin/change/info','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','name'=>'editNewsForm']) !!}
            {{csrf_field()}}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Admin Name</label>
            <div class="col-sm-10">
                <input name="name" value="{{$adminById->name}}" type="text" class="form-control" id="inputEmail3" required="">
                <input name="id" type="hidden" class="form-control"  required="" value="{{$adminById->id}}">
                <span class="text-danger">{{$errors->has('name') ? $errors->first('name'):''}} </span>
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input name="email" value="{{$adminById->email}}" type="text" class="form-control" id="inputEmail3" required="">
                <span class="text-danger">{{$errors->has('email') ? $errors->first('email'):''}} </span>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-block btn-success" name="sub">Update Basic Info</button>
            </div>
          </div>
        {!! Form::close() !!}
        
        </div>
        </div>
    </div>
</div>
@endsection