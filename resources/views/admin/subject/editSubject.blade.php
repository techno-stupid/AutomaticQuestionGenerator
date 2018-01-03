@extends('admin.master')

@section('title')
    Edit Subject
@endsection

@section('mainContent')

<div id="page-wrapper"><br>
    <h3 class="text-center text-primary"> Edit Subject</h3>
<div class="row">
        <div class="col-lg-12">
            <!--<h3 class="text-center text-success">{{Session::get('message')}}</h3>-->           

        <div class="well">
            <h2 class="text-center text-success"> Edit Form </h2><br/>
            {!! Form::open(['url'=>'/subject/update','method'=>'POST','class'=>'form-horizontal','name'=>'editSubjectForm']) !!}
            {{csrf_field()}}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Subject Name</label>
            <div class="col-sm-10">
                <input name="subjectName" value="{{$subjectById->subjectName}}" type="text" class="form-control" id="inputEmail3">
                <input name="id" value="{{$subjectById->id}}" type="hidden" class="form-control" id="inputEmail3">
                <span class="text-danger"> {{$errors->has('subjectName') ? $errors->first('subjectName') : ''}} </span>
            </div>
          </div>
            <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Subject Code</label>
            <div class="col-sm-10">
                <input name="subjectCode" value="{{$subjectById->subjectCode}}" type="text" class="form-control" id="inputEmail3">
                
                <span class="text-danger"> {{$errors->has('subjectCode') ? $errors->first('subjectCode') : ''}} </span>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Subject Description</label>
            <div class="col-sm-10">
                <textarea name="subjectDescription" rows="8" class="form-control" >{{$subjectById->subjectDescription}}</textarea>
                <span class="text-danger"> {{$errors->has('subjectDescription') ? $errors->first('subjectDescription') : ''}} </span>
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
                <button type="submit" class="btn btn-block btn-success" name="sub">Update Subject Info</button>
            </div>
          </div>
        {!! Form::close() !!}
        </div>
        </div>
    </div>
    </div>
<script>
    document.forms['editSubjectForm'].elements['publicationStatus'].value={{$subjectById->publicationStatus}}
</script>
    

@endsection