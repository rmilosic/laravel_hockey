@extends('layouts.frontend')



@section('content')


	<h1> {{ $title }} </h1>

	<div class="container-fluid">

		<ul class="nav navbar-nav">
			@foreach($teams as $team1)
				<li> {{ link_to_route('team', $team1->team_name, array($team1->team_id)) }}  </li>
			@endforeach 
		</ul> 
		


	</div>

	<h2> {{ $team->team_name }} </h2>

	<ul> 
		<h3>Players</h3>
		@foreach ($players as $player)
			<li>{{ $player->first_name }} {{ $player->last_name }} </li>
		@endforeach 

	</ul>





@stop 