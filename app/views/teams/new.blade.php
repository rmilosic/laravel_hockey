@extends('layouts.frontend')



@section('content')



	<h1> Add new author </h1>
	
	
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
		{{ Form::submit('Add team') }}
	</p>
			{{-- Form::label('league_id', 'Kratica:') --}}
			{{-- Form::field('abbr') --}} 
			
	{{ Form::close() }}
	




@stop 