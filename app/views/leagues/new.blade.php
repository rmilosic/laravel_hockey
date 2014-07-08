@extends('layouts.frontend')



@section('content')



	<h1> Add new league </h1>
	
	
	 {{ Form::open(array('url' => 'leagues/create', 'method' => 'POST')) }}
	
	<p>
			{{ Form::label('seasons_id', 'Sezona:') }} 
			{{ Form::select('seasons_id', $seasonsList, 0 ) }} 
	</p>

	
	<p>
			{{ Form::label('name', 'Ime lige:') }}</br>
			{{ Form::text('name', '', array( 'autofocus' => 'autofocus')) }} 
	</p>

		{{ Form::submit('Add league') }}
	</p>
		
			
	{{ Form::close() }}
	




@stop 