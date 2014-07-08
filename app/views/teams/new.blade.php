@extends('layouts.frontend')



@section('content')

	<p>Dodaj ekipo v ligo {{ $league->name }} </p>

	<h1> Add a new team </h1>
	
	
	 {{ Form::open(array('url' => '/teams/create/', 'method' => 'POST', 'files' => 'true')) }}
	
	<p>
			{{ Form::label('name', 'Ime ekipe:') }}
			{{ Form::text('name') }}
	</p>

	<p>
			{{ Form::label('abbr', 'Kratica:') }}
			{{ Form::text('abbr') }} 	
	</p>
	

	<p>
			{{ Form::label('email', 'Email:') }}
			{{ Form::text('email') }} 	
	</p>

	<p>
			{{ Form::label('phone', 'Telefon:') }}
			{{ Form::text('phone') }} 	
	</p>
	
			{{ Form::hidden('leagues_id', $league->id) }}

	

	<p>
		{{ Form::submit('Add team') }}
	</p>
		
			
	{{ Form::close() }}
	




@stop 