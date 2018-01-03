@extends('admin.master')

@section('title')
	Create Tag
@endsection

@section('mainContent')
	<br>
<div id="page-wrapper"><br>
    <h3 class="text-center text-primary"> Create New Tag</h3>
<div class="row">
        <div class="col-lg-12">
            <h4 class="text-center text-success">{{Session::get('message')}}</h4>     

        <div class="well">
            {!! Form::open(['url'=>'/tag/save','method'=>'POST','class'=>'form-horizontal']) !!}
            {{csrf_field()}}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Tag Name</label>
            <div class="col-sm-10">
                <input name="tagName" type="text" class="form-control" required="">
            </div>
          </div><hr>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-block btn-success" name="sub">Create Tag</button>
            </div>
          </div>
        {!! Form::close() !!}
            
        </div>
        </div>
    </div>
</div>
@endsection