@extends('admin.master')

@section('title')
	Admin Profile
@endsection

@section('mainContent')
	<div id="page-wrapper"><br>
    <h3 class="text-center text-primary">Admin Profile</h3>

<div class="row">
        <div class="col-lg-12">
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>           
            <h3 class="text-center text-danger">{{Session::get('message2')}}</h3>
        <div class="well">
            <h4 class="text-primary">Admin Name: <em style="font-weight: bold;color: black">
            	{{$adminById->name}}
            </em></h4><hr>
            <h4 class="text-primary">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em style="color: black">
            	{{$adminById->email}}
            </em></h4><hr>
            <h4 class="text-primary">Admin Type:&nbsp;&nbsp;
            	@if($adminById->id<2)
            		<strong style="color:black">Super Admin </strong>
            	@else
            		<strong style="background-color: green;color: black;">Admin </strong>
            	@endif
            </h4><hr>
            <h4 class="text-primary">Admin Since: <em style="color: black">
            	{{$adminById->created_at}}
            </em></h4><hr>
            <a href="{{url('/admin/change/info/'.$adminById->id)}}" style="color: black"><button class="btn" style="background-color: #767667">Change Basic Info</button></a>
            <a href="{{url('/admin/change/pw/'.$adminById->id)}}" style="color: black"><button class="btn" style="background-color: #FF0000">Change Password</button></a><hr>
        </div>
        </div>
    </div>
</div>
@endsection