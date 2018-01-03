@extends('admin.master')

@section('title')
	Manage Admins
@endsection

@section('mainContent')
	<div id="page-wrapper"><br>
    <h3 class="text-center text-primary">Admin List</h3>

<div class="row">
        <div class="col-lg-12">
            <h4 class="text-center text-danger">{{Session::get('message')}}</h4>
        <div class="well">
            
            
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>SL.</th>
                        <th>Admin Name</th>
                        <th>Email</th>
                        <th>Power</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                    <tr>
                        <td>{{$admin->id}} </td>
                        <td>{{$admin->name}} </td>
                        <td>{!!$admin->email!!} </td>
                        <td>
                        	@if($admin->id < 2)
                        	<strong style="background-color: #F0AD4E">Super Admin</strong>
                        	@else
                        	<strong style="background-color: #5CB85C">Admin</strong>
                        	@endif
                        </td>
                        <td>
                        	@if($admin->id > 1)
                            <a class="btn btn-danger" href="{{url('/admin/delete/'.$admin->id)}}" onclick="return confirm('Are you sure?')" title="Delete">
                                <span class="glyphicon glyphicon-trash">  </span>
                            </a>
                            @endif
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