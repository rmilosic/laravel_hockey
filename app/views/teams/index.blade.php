@extends('layouts.frontend')



@section('content')

<div class="row">
	
	<ul>
		@foreach($teams as $team)
		<li>{{ $team->team_name }}</li>

		@endforeach 

	</ul>

</div>


@stop 