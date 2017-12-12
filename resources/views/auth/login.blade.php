@extends('layouts.app')
@section('content')
	<form action="" method="POST">
		{{ csrf_field() }}
		<div class="row">
			<div class="col col-sm-3"></div>
			<div class="col col-sm-6">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" value="{{ Request::input('username') }}">
					<span class="error">{{ $errors->first('username') }}</span>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control">
					<span class="error">{{ $errors->first('password') }}</span>
				</div>
				<div class="form-group">
					<button class="btn btn-success">Login</button>
				</div>
			</div>
			<div class="col col-sm-3"></div>
		</div>
	</form>
@stop