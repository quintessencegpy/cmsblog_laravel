@extends('layouts.admin')

@section('content')

	<h1>Create User</h1>
	{!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}
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
			{!! Form::select('is_active',array(1=>'Active', 0=>'Not Active'), 0, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password',"Password:") !!}
			{!! Form::password('password', ['class'=>'form-control']) !!}
			@if ($errors->has('password'))<p class = 'error-font'>{!!$errors->first('password')!!}</p>@endif
		</div>
		<div class="form-group">
			{!! Form::label('file', 'File Name:') !!}
			{!! Form::file('file',null,['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@stop