@extends('layouts.frontend')



@section('content')



	<h1> Add new league </h1>
	
	
	 {{ Form::open(array('url' => 'leagues/create', 'method' => 'POST')) }}
	
	<p>
			{{ Form::label('name', 'Ime lige:') }}
			{{ Form::text('name') }}</br>
	</p>

		{{ Form::submit('Add league') }}
	</p>
		
			
	{{ Form::close() }}
	




@stop 