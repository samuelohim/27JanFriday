@extends ('layouts.main')



@section('content')


		
		@foreach ($users as $user)
			<div class="jumbotron">
				{{$user->name}}
			</div>
			
		@endforeach

@endsection