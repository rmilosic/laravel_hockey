@extends('layouts.frontend')

@section('content')


	<h1> This is {{ $leagueName->name }}  </h1>
	
	<h2> Ekipe </h2>

	<ul>
	@foreach ($teams as $team)
		<li> {{ link_to_route('team',  $team->team_name, array($team->team_id)) }}  </li>
	@endforeach
	</ul>



@stop 