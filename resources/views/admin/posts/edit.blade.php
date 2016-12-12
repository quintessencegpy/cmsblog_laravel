@extends('layouts.admin')

@section('content')

	<h1>Update Post</h1>
	<div class="row">
		<div class="col-sm-6">
			<img src=" {{$post->photo->file}} " class = "img-responsive" >
		</div>
		<div class="col-sm-6">
			{!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true]) !!}
				<div class="form-group">
					{!! Form::label('title',"Title:") !!}
					{!! Form::text('title', null, ['class'=>'form-control']) !!}
					@if ($errors->has('title'))<p class = 'error-font'>{!!$errors->first('title')!!}</p>@endif
				</div>
				<div class="form-group">
					{!! Form::label('category_id',"Category:") !!}
					{!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
					@if ($errors->has('category_id'))<p class = 'error-font'>{!!$errors->first('category_id')!!}</p>@endif
				</div>
				<div class="form-group">
					{!! Form::label('body',"Body:") !!}
					{!! Form::textarea('body', null, ['class'=>'form-control']) !!}
					@if ($errors->has('body'))<p class = 'error-font'>{!!$errors->first('body')!!}</p>@endif
				</div>

				<div class="form-group">
					{!! Form::label('photo_id', 'File Name:') !!}
					{!! Form::file('photo_id',null,['class'=>'form-control']) !!}
					@if ($errors->has('photo_id'))<p class = 'error-font'>{!!$errors->first('photo_id')!!}</p>@endif
				</div>
				<div class="form-group">
					{!! Form::submit('Update Post', ['class'=>'btn btn-primary col-sm-6']) !!}
				</div>
			{!! Form::close() !!}

			{!! Form::open(['method'=>'DELETE','action'=>['AdminPostsController@destroy',$post->id]]) !!}

				<div class="form-group">
					{!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-sm-6']) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>


@stop