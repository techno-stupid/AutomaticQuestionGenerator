@extends('admin.master')

@section('title')
    Manage Broad Questions
@endsection

@section('mainContent')

<div id="page-wrapper"><br>
    <h3 class="text-center text-primary">Tag Keyword List</h3>
<h4 class="text-center text-danger">{{Session::get('message')}}</h4>
<hr/>
<!--<div class="container">-->
    <div class="row">
      <div class="col-lg-12">
        <div class="well">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tag Name</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tags as $tag)
                <tr>
                    <td style="width:10%">{!!$tag->id!!}. </td>
                    <td style="width:80%">{!!$tag->tagName!!} </td>
                    <td>
                        <a class="btn btn-danger" href="{{url('/tag/delete/'.$tag->id)}}" title="Delete" onclick="return confirm('Are you sure?')">
                            <span class="glyphicon glyphicon-trash">  </span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
            {{$tags->links()}}
        </div>
      </div>
    </div>
</div>
<!--</div>-->

@endsection