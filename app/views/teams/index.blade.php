@extends('layouts.frontend')



@section('content')



	<h1> {{ $title }} </h1>
	
	<ul>
		@foreach($teams as $team)
		<li> {{ link_to_route('team', $team->team_name, array($team->team_id)) }}  </li>

		@endforeach 

	</ul>




@stop 