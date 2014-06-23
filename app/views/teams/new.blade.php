@extends('layouts.frontend')



@section('content')



	<h1> Add a new team </h1>
	
	
	 {{ Form::open(array('url' => 'teams/create', 'method' => 'POST')) }}
	
	<p>
			{{ Form::label('team_name', 'Ime ekipe:') }}
			{{ Form::text('team_name') }}</br>
	</p>

	<p>
			{{ Form::label('abbr', 'Kratica:') }}
			{{ Form::text('abbr') }} </br>
	
	</p>

	<p>
			{{ Form::label('league', 'Liga:') }}
			{{ Form::select('league', $leagueList, 0 ) }} </br>

			{{ Form::label('season', 'Sezona:') }}
			{{ Form::select('season', $leagueList, 0 ) }}


	
	</p>

	<p>
		{{ Form::submit('Add team') }}
	</p>
			{{-- Form::label('league_id', 'Kratica:') --}}
			{{-- Form::field('abbr') --}} 
			
	{{ Form::close() }}
	




@stop 