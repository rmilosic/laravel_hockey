@extends('layouts.frontend')

@section('content')

	<h1> Season {{ $season->year }} </h1>

	<h2> This is {{ $league->name }}  </h2>

		<div class="col-md-3">

		<div id="show-leagues">
			
			<ul id="seasonlist" class="nav nav-pills nav-stacked">
				@foreach ($seasons as $season)
					<li class="active seasondd">  <a href="#" class="seasondd"> {{ $season->year }} </a> 
						<ul class="hide">
							@foreach($leagues as $league)	
					   			 @if($league->seasons_id === $season->id) 
					   			 <li> {{ link_to_route('league', $league->name, array($season->id, $league->id)) }} </li>
					   			 @endif
							@endforeach 
						</ul>
					</li>
				@endforeach
			</ul>

	
		{{ link_to_route('new_season', 'Add new season')}}

		</div>
	</div>

	<div class='col-md-9'>

	<h2>Statistika</h2> <p> {{ link_to_route('new_team', 'Add new team', array($season->id, $league->id))  }} </p>
		<table class="table table-hover">
	 		<thead>
	 			<th>#</th>
	 			<th>Ekipa</th>
	 			<th>GP</th>
	 			<th>W</th>
	 			<th>T</th>
	 			<th>L</th>
	 			<th>±</th>
	 			<th><strong>PTS<strong></th>
	 		</thead>

	 		<tbody>

	 		
	 		@foreach($teams as $team) 
	 
		
	 			<tr>
	 				<td></td>
	 				<td>{{ link_to_route('team', $team->name, array($team->id)) }}</td>
	 				<td>3</td>
	 				<td>3</td>
	 				<td>0</td>
	 				<td>0</td>
	 				<td>17</td>
	 				<td>16</td>
	 			</tr>
			@endforeach		
			</tbody>
		</table>
	
	</div>


	<div class='col-md-9 col-md-offset-3'>

	<h2>Zadnje tekme</h2> <p> {{ link_to_route('new_game', 'Add new game', array($season->id, $league->id)) }} </p>
	
		<table class="table table-hover">
	 		<thead>
	 			<th>Datum</th>
	 			<th>Ura</th>
	 			<th>Lokacija</th>
	 			<th>Tip</th>
	 			<th>Domači</th>
	 			<th>Rezultat</th>
	 			<th>Gostje</th>
	 			
	 		</thead>

	 		<tbody>
	
	 		@foreach($games as $game)
	 			
	 			<tr>
	 				<td> {{ $game->date }} </td>
	 				<td> {{ $game->time }} </td>
	 				<td> {{ $game->location }} </td>
	 				<td> {{ $game->type }} </td>
 				 	<td> 
			 		@foreach($teams as $team) 
 				 		@if($team->id === $game->home_id) {{ link_to_route('team', $team->name, array($team->id)) }} 
 				 		@endif
 				 	@endforeach
 				 	</td>
	 				<td>  </td>
	 				<td>
	 				@foreach($teams as $team) 
 				 		@if($team->id === $game->away_id) {{ link_to_route('team', $team->name, array($team->id)) }} 
 				 		@endif
 				 	@endforeach </td>
	 			</tr>
			@endforeach
	 		</tbody>
		</table>

	</div>
	



	


@stop 