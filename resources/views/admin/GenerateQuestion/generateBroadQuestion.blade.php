@extends('admin.master')

@section('mainContent')
	<div id="page-wrapper">
	<hr>
	<h3 class="text-center text-primary"><i class="fa fa-hand-o-down fa-fw"></i> Exam Details <i class="fa fa-hand-o-down fa-fw"></i></h3>
            <div class="row">
                <div class="col-lg-12">
                </br>
                <div class="well">
            <!--<h2 class="text-center text-success">Fill this form up to add new Department</h2><br>-->
            {!! Form::open(['url'=>'/generate/broad-question','method'=>'POST','class'=>'form-horizontal']) !!}
            {{csrf_field()}}
	           <div class="form-group">
	            <label for="inputEmail3" class="col-sm-2 control-label">Institute Name</label>
	            <div class="col-sm-10">
	                <input name="instituteName" value="Daffodil International University" type="text" class="form-control" id="inputEmail3" required="">
	            </div>
	          </div>
	          <div class="form-group">
	            <label for="inputEmail3" class="col-sm-2 control-label">Semester</label>
	            <div class="col-sm-10">
	                <input name="semester" value="Spring-17" type="text" class="form-control" id="inputEmail3" required="">
	            </div>
	          </div>
	          <div class="form-group">
	            <label for="inputEmail3" class="col-sm-2 control-label">Exam Name</label>
	            <div class="col-sm-10">
	                <input name="examName" value="Semester Final Exam" type="text" class="form-control" id="inputEmail3" required="">
	            </div>
	          </div>
	          <div class="form-group">
	            <label for="inputEmail3" class="col-sm-2 control-label">Date of Exam</label>
	            <div class="col-sm-10">
	                <input name="date" type="date" class="form-control" id="inputEmail3" required="">
	            </div>
	          </div>
	          <div class="form-group">
	            <label for="inputEmail3" class="col-sm-2 control-label">Time of Exam</label>
	            <div class="col-sm-10">
	                <input name="time" type="time" class="form-control" id="inputEmail3" required="">
	            </div>
	          </div>
	          <hr>

	           <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Department</label>
            <div class="col-sm-10">
                <select class="form-control" name="department">
                    <option>...Select Department... </option>
                    @foreach($departments as $department)
                    <option value="{{$department->departmentName}}">{{$department->departmentName}}</option>
                	@endforeach
                </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Subject</label>
            <div class="col-sm-10">
                <select class="form-control" name="subject">
                    <option>...Select Subject... </option>
                    @foreach($subjects as $subject)
                    <option value="{{$subject->id}}">{{$subject->subjectName}}</option>
                	@endforeach
                </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Tags</label>
            <div class="col-sm-10">
                <select class="form-control js-example-basic-multiple" multiple="multiple" name="tags[]">
                    @foreach($publichedTags as $tag)
                    <option value="{{$tag->id}}">{{$tag->tagName}}</option>
                    @endforeach
                </select>
            </div>
            </div>
            
	          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Exam Difficulty</label>
            <div class="col-sm-10">
                <input type="radio" value="1" name="examDifficulty"> Easy  &nbsp; &nbsp; &nbsp;
                <input type="radio" value="2" name="examDifficulty"> Medium  &nbsp; &nbsp; &nbsp;
                <input type="radio" value="3" name="examDifficulty"> Hard 
            </div>
          </div>
	         <hr>

          <div class="form-group">
	            <label for="inputEmail3" class="col-sm-2 control-label">Number of Questions</label>
	            <div class="col-sm-10">
	                <input name="numberOfQuestions" type="number" class="form-control" id="inputEmail3" required="">
	            </div>
	          </div>
          <div class="form-group">
	            <label for="inputEmail3" class="col-sm-2 control-label">Note / Clarification</label>
	            <div class="col-sm-10">
	                <!-- <textarea name="note" type="text" class="form-control" id="inputEmail3"></textarea> -->
	                <input type="text" name="note" class="form-control">
	            </div>
	          </div><hr/>
	          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-block btn-primary" name="sub" value="sub">Preview </button>
            </div>
            <div class="col-sm-offset-2 col-sm-10" style="margin-top: 5px">
                <button type="submit" class="btn btn-block btn-success" name="sub" value="gub"> Save </button>
            </div>
            <div style="margin-top: 5px" class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-block btn-danger" name="sub" value="dow">Save +    Download Question Paper</button>
            </div>
          </div>
          

            {!! Form::close() !!}
            </div>
                </div>
            </div>
    </div>
	
@endsection