@extends('layouts.admin')

@section('content')

	<h1>Create Post</h1>
	{!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}
		<div class="form-group">
			{!! Form::label('title',"Title:") !!}
			{!! Form::text('title', null, ['class'=>'form-control']) !!}
			@if ($errors->has('title'))<p class = 'error-font'>{!!$errors->first('title')!!}</p>@endif
		</div>
		<div class="form-group">
			{!! Form::label('category_id',"Category:") !!}
			{!! Form::select('category_id', [''=>'Choose Options'] + $categories, null, ['class'=>'form-control']) !!}
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
		<div class="form-group"> {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}

@stop