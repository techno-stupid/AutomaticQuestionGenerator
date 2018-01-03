@extends('admin.master')

@section('title')
    Manage Broad Questions
@endsection

@section('mainContent')

<div id="page-wrapper"><br>
    <h3 class="text-center text-primary">Broad Question List</h3>
<h3 class="text-center text-success">{{Session::get('message')}}</h3>
<h3 class="text-center text-danger">{{Session::get('message2')}}</h3>  
<hr/>
<!--<div class="container">-->
    <div class="row">
      <div class="col-lg-12">
        <div class="well">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th>Subject</th>
                    <th>Publication Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($questions as $question)
                <tr>
                    @if($question->publicationStatus == 1)
                    <th scope="row" style="background-color: #228B22;  border-radius: 10px;">{{$question->id}}</th>
                    @else 
                    <th scope="row" style="background-color: #ff0000 ; border-radius: 10px;">{{$question->id}}</th>
                    @endif
                    <td>{!!$question->questionTitle!!} </td>
                    <td>{!!$question->subjectName!!} </td>
                    <td>{{$question->publicationStatus == 1 ? 'Published' : 'Unpublished'}} </td>
                    <td>
                        <a class="btn btn-info" href="{{url('/broad-question/view/'.$question->id)}}" title="Question Details">
                             <span class="glyphicon glyphicon-info-sign">  </span>
                        </a>
                        <a class="btn btn-success" href="{{url('/broad-question/edit/'.$question->id)}}" title="Edit">
                            <span class="glyphicon glyphicon-edit">  </span>
                        </a>
                        <a class="btn btn-danger" href="{{url('/broad-question/delete/'.$question->id)}}" title="Delete" onclick="return confirm('Are you sure?')">
                            <span class="glyphicon glyphicon-trash">  </span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
            {{$questions->links()}}
        </div>
      </div>
    </div>
</div>
<!--</div>-->

@endsection