@extends('admin.master')

@section('mainContent')
	<div id="page-wrapper"><br>
    <h3 class="text-center text-primary">Question Paper List</h3>
<h4 class="text-center text-danger">{{Session::get('message2')}}</h4>  
<hr/>
<!--<div class="container">-->
    <div class="row">
      <div class="col-lg-12">
        <div class="well">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>SL.</th>
                    <th>Subject</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $cut=1;?>
                @foreach($saveds as $saved)

                <tr>
                    <th scope="row"><?php echo "$cut.";$cut++;?></th>
                    <td>{!!$saved->subject!!} </td>
                    <td>{!!$saved->created_at!!} </td>
                    <td>
                        <a class="btn btn-primary" href="{{url('/download/'.$saved->id)}}">
                            <span class="fa fa-download fa-1x"> Download </span>
                        </a>
                        <a class="btn btn-danger" href="{{url('/saved/delete/'.$saved->id)}}" onclick="return confirm('Are you sure?')">
                            <span class="glyphicon glyphicon-trash"> Delete </span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       
        </div>
      </div>
    </div>
</div>
	
	
@endsection