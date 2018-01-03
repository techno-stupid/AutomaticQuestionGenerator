@extends('admin.master')

@section('title')
    Edit Department
@endsection

@section('mainContent')

<div id="page-wrapper"><br>
    <h3 class="text-center text-primary"> Edit Department</h3>
<div class="row">
        <div class="col-lg-12">
            <!--<h3 class="text-center text-success">{{Session::get('message')}}</h3>-->           

        <div class="well">
            <h2 class="text-center text-success"> Edit Form </h2><br/>
            {!! Form::open(['url'=>'/department/update','method'=>'POST','class'=>'form-horizontal','name'=>'editDepartmentForm']) !!}
            {{csrf_field()}}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Department Name</label>
            <div class="col-sm-10">
                <input name="departmentName" value="{{$departmentById->departmentName}}" type="text" class="form-control" id="inputEmail3">
                <input name="id" value="{{$departmentById->id}}" type="hidden" class="form-control" id="inputEmail3">
                <span class="text-danger"> {{$errors->has('departmentName') ? $errors->first('departmentName') : ''}} </span>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Department Description</label>
            <div class="col-sm-10">
                <textarea name="departmentDescription" rows="8" class="form-control" >{{$departmentById->departmentDescription}}</textarea>
                <span class="text-danger"> {{$errors->has('departmentDescription') ? $errors->first('departmentDescription') : ''}} </span>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Publication Status</label>
            <div class="col-sm-10">
                <select class="form-control" name="publicationStatus">
                    <option>...Select Publication Status... </option>
                    <option value="1">Published</option>
                    <option value="0">Unpublished</option>
                </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-block btn-success" name="sub">Update Department Info</button>
            </div>
          </div>
        {!! Form::close() !!}
        </div>
        </div>
    </div>
    </div>
<script>
    document.forms['editDepartmentForm'].elements['publicationStatus'].value={{$departmentById->publicationStatus}}
</script>
    

@endsection