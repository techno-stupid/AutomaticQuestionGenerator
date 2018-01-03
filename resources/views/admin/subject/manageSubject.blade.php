@extends('admin.master')

@section('title')
    Manage Subject
@endsection

@section('mainContent')

<div id="page-wrapper"><br>
    <h3 class="text-center text-primary">Subject List</h3>
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
                    <th>Subject Name</th>
                    <th>Subject Code</th>
                    <th>Subject Description</th>
                    <th>Publication Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $subject)
                <tr>
                    <th scope="row">{{$subject->id}}</th>
                    <td>{{$subject->subjectName}} </td>
                    <td>{{$subject->subjectCode}} </td>
                    <td>{!!$subject->subjectDescription!!} </td>
                    <td>{{$subject->publicationStatus == 1 ? 'Published' : 'Unpublished'}} </td>
                    <td>
                        <a class="btn btn-success" href="{{url('/subject/edit/'.$subject->id)}}">
                            <span class="glyphicon glyphicon-edit">  </span>
                        </a>
                        <a class="btn btn-danger" href="{{url('/subject/delete/'.$subject->id)}}" onclick="return confirm('Are you sure?')">
                            <span class="glyphicon glyphicon-trash">  </span>
                        </a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
            
        </table>
            {{$categories->links()}}
        </div>
      </div>
    </div>
</div>
<!--</div>-->

@endsection