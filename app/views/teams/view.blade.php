@extends('layouts.frontend')



@section('content')


	<h1> {{ $title }} </h1>

	

	<h2> {{ $team->name }} </h2>

	<ul> 
		<h3>Players</h3>
		@foreach ($players as $player)
			<li>{{ $player->first_name }} {{ $player->last_name }} </li>
		@endforeach 
	</ul>

	{{ link_to_route('new_player', 'Add players', array($team->id)) }}
	






@stop 