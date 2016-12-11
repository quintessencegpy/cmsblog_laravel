@extends('layouts.admin')

@section('content')

	<h1>Edit User</h1>

	<div class = "col-sm-3">
		<img src=" {{$user->photo ? $user->photo->file : '/images/placeholder.jpg'}} " class = "img-reponsive img-rounded">
	</div>
	<div class = "col-sm-9">
		{!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
			<div class="form-group">
				{!! Form::label('name',"Name:") !!}
				{!! Form::text('name', null, ['class'=>'form-control']) !!}
				@if ($errors->has('name'))<p class = 'error-font'>{!!$errors->first('name')!!}</p>@endif
			</div>
			<div class="form-group">
				{!! Form::label('email',"Email:") !!}
				{!! Form::text('email', null, ['class'=>'form-control']) !!}
				@if ($errors->has('email'))<p class = 'error-font'>{!!$errors->first('email')!!}</p>@endif
			</div>
			<div class="form-group">
				{!! Form::label('role_id',"Role:") !!}
				{!! Form::select('role_id', [''=>'Choose Options'] + $roles, null, ['class'=>'form-control']) !!}
				@if ($errors->has('role_id'))<p class = 'error-font'>{!!$errors->first('role_id')!!}</p>@endif
			</div>
			<div class="form-group">
				{!! Form::label('is_active',"Status:") !!}
				{!! Form::select('is_active',array(1=>'Active', 0=>'Not Active'), null, ['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('password',"Password:") !!}
				{!! Form::password('password', ['class'=>'form-control']) !!}
				@if ($errors->has('password'))<p class = 'error-font'>{!!$errors->first('password')!!}</p>@endif
			</div>
			<div class="form-group">
				{!! Form::label('photo_id', 'File Name:') !!}
				{!! Form::file('photo_id',null,['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
			</div>
		{!! Form::close() !!}
	</div>
@stop