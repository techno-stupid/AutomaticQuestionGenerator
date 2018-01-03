@extends('admin.master')

@section('title')
	Change Password
@endsection

@section('mainContent')
	<div id="page-wrapper"><br>
    <h3 class="text-center text-primary"> Change Password</h3>

<div class="row">
        <div class="col-lg-12">
                     
        <div class="well">
                   
<h4 class="text-center text-danger">{{Session::get('message')}}</h4> 
<h4 class="text-center text-success">{{Session::get('message2')}}</h4> 
            {!! Form::open(['url'=>'/admin/change/pw','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','name'=>'editNewsForm']) !!}
            {{csrf_field()}}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">New Password</label>
            <div class="col-sm-10">
                <input name="password" type="password" class="form-control" id="inputEmail3" required="">
                <input name="id" type="hidden" class="form-control"  required="" value="{{$adminById->id}}">
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Confirm Password</label>
            <div class="col-sm-10">
                <input name="newPassword" type="password" class="form-control" id="inputEmail3" required="">
                <span class="text-danger">{{$errors->has('password') ? $errors->first('password'):''}} </span>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-block btn-success" name="sub">Change Password</button>
            </div>
          </div>
        {!! Form::close() !!}
        
        </div>
        </div>
    </div>
</div>
@endsection