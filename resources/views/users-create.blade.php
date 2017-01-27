@extends('layout.main')

@section

	<form action="/users" method = 'POST'></form>
		{!! csrf_field()!!}
		<div class="form-group">
			<label for="">Name</label>
			<input type = 'text' name = 'name' class = 'form-control'>
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input type = 'email' name = 'email' class = 'form-control'>
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type = 'password' name = 'password' class = 'form-control'>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-block btn-warning">Create</button>
		</div>
		button
	</form>
@endsection