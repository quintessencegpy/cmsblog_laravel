@extends('layouts.admin')

@section('content')
	
	<h1>Users</h1>
	<table class="table table-striped">
    	<thead>
      		<tr>
		        <th>Id</th>
		        <th>Name</th>
		        <th>Email</th>
		        <th>Role</th>
		        <th>Photo</th>
		        <th>Active</th>
		        <th>Created</th>
		        <th>Updated</th>
		    </tr>
	    </thead>
	    <tbody>
	      @if($users)

	      	@foreach($users as $user)
		      <tr>
		        <td>{{$user->id}}</td>
		        <td><a href=" {{route('admin.users.edit', $user->id)}} ">{{$user->name}}</a></td>
		        <td>{{$user->email}}</td>
		        <td>{{$user->role->name}}</td>
		        <td><img height = "30" width = "30" src=" {{$user->photo ? $user->photo->file : '/images/placeholder.jpg'}} "></td>
		        <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
		        <td>{{$user->created_at->diffForHumans()}}</td>
		        <td>{{$user->updated_at->diffForHumans()}}</td>
		      </tr>
	      	@endforeach

	      @endif
	    </tbody>
  	</table>

@stop