@extends('layouts.frontend')

@section('content')

<h1> {{ $title }} </h1>


<h2> {{ $league->name }} </h2>	
<h2> Season  {{$season->year }} </h2>

<h3> Ekipe </h3>

	<ul>
	@foreach ($teams as $team)
		<li> {{ link_to_route('team',  $team->name, array($team->id)) }}  </li>
	@endforeach
	</ul>
	
	{{ link_to_route('new_season', $season->year, array($season->id, $league->id))  }} 

@stop