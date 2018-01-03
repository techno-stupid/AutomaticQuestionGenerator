@extends('admin.master')

@section('title')
    Edit Broad Question
@endsection

@section('mainContent')

<br>
<div id="page-wrapper"><br>
    <h3 class="text-center text-primary"> Edit Broad Question</h3>
<div class="row">
        <div class="col-lg-12">
            <h4 class="text-center text-success">{{Session::get('message')}}</h4>     

        <div class="well">
            <!--<h2 class="text-center text-success">Fill this form up to add new Department</h2><br>-->
            {!! Form::open(['url'=>'/broad-question/update','method'=>'POST','class'=>'form-horizontal','name'=>'editQuestionForm']) !!}
            {{csrf_field()}}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Question</label>
            <div class="col-sm-10">
                <textarea name="questionTitle" class="form-control" >{!!$question->questionTitle!!}</textarea>
                <input name="id" type="hidden" value="{!!$question->id!!}" class="form-control" >
            </div>
          </div><hr>
            <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Subject</label>
            <div class="col-sm-10">
                <select class="form-control" name="subjectId">
                    <option>...Select Subject... </option>
                    @foreach($subjects as $subject)
                    <option value="{{$subject->id}}">{{$subject->subjectName}}</option>
                    @endforeach
                </select>
            </div>
            </div>
            <hr>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Difficulty</label>
            <div class="col-sm-10">
                <input type="radio" value="1" name="questionDifficultyLevel"> Easy  &nbsp; &nbsp; &nbsp;
                <input type="radio" value="2" name="questionDifficultyLevel"> Medium  &nbsp; &nbsp; &nbsp;
                <input type="radio" value="3" name="questionDifficultyLevel"> Hard 
            </div>
          </div><hr>
            <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Marks</label>
            <div class="col-sm-10">
                <input name="questionMarks" value="{{$question->questionMarks}}" type="number" class="form-control" required="">
            </div>
          </div><hr>
            
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
            <hr>


          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Publication Status</label>
            <div class="col-sm-10">
                <select class="form-control" name="publicationStatus">
                    <option>...Select Publication Status... </option>
                    <option value="1">Published</option>
                    <option value="0">Unpublished</option>
                </select>
            </div>
          </div><hr>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-block btn-success" name="sub">Update Question</button>
            </div>
          </div>
        {!! Form::close() !!}
        </div>
        </div>
    </div>
</div>
<script>
        document.forms['editQuestionForm'].elements['publicationStatus'].value={{$question->publicationStatus}}
        document.forms['editQuestionForm'].elements['questionDifficultyLevel'].value={{$question->questionDifficultyLevel}}
        document.forms['editQuestionForm'].elements['subjectId'].value={{$question->subjectId}}
</script>
@endsection

@section('scripts')
   
@endsection