@extends('layouts.admin')

@section('content')
	<h1>Posts</h1>
		<table class="table table-striped">
    	<thead>
      		<tr>
		        <th>Id</th>
		        <th>User</th>
		        <th>Category</th>
		        <th>Photo</th>
		        <th>Title</th>
		        <th>Body</th>
		        <th>Created</th>
		        <th>Updated</th>
		    </tr>
	    </thead>
	    <tbody>
	      @if($posts)

	      	@foreach($posts as $post)
		      <tr>
		        <td>{{$post->id}}</td>
		        <td>{{$post->user->name}}</td>
		        <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
		        <td><img height = "25" width = "50" src=" {{$post->photo ? $post->photo->file : '/images/postplaceholder.jpg'}} "></td>
		        <td><a href=" {{route('admin.posts.edit',$post->id)}} ">{{$post->title}}</a></td>
		        <td>{{$post->body}}</td>
		        <td>{{$post->created_at->diffForHumans()}}</td>
		        <td>{{$post->updated_at->diffForHumans()}}</td>
		      </tr>
	      	@endforeach

	      @endif
	    </tbody>
  	</table>

@stop