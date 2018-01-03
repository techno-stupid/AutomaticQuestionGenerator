@extends('admin.master')

@section('mainContent')
<div id="page-wrapper"><br>
    <div class="row">
      <div class="col-lg-12">
        <div class="well">
<table class="table table-bordered table-hover">
<tr>
    <th style="width:200px;">Question ID</th>
    <th>{{$question->id}}</th>
</tr>
<tr>
    <th>Question</th>
    <td>{!!$question->questionTitle!!}</td>
</tr>
<tr>
    <th>Subject Name</th>
    <td>{{$question->subjectName}}</td>
</tr>
<tr>
    <th>Question Difficulty</th>
    
    @if ($question->questionDifficultyLevel === 1)
       <td> Easy</td>
    @elseif ($question->questionDifficultyLevel == 2)
      <td> Medium</td>
    @else
      <td> Hard</td>
    @endif
    
</tr>
<tr>
    <th>Marks</th>
    <td>{{$question->questionMarks}}</td>
</tr>
<tr>
    <th>Tags</th>
    <td>
    @foreach ($tags as $tag)
        {{$tag->tagName}},
    @endforeach
    </td>
</tr>

<tr>
    <th>Publication Status</th>
    <td>{{$question->publicationStatus == 1 ? 'Published' : 'Unpublished'}}</td>
</tr>

</table>
        </div></div></div></div>
@endsection