@extends('layouts.frontend')



@section('content')



	<h1> Add new season </h1>
	
	
	 {{ Form::open(array('method' => 'POST', 'route' => array('create_season', $league->id ))) }}
	
	<p>
			{{ Form::label('year', 'Leto sezone:') }}
			{{ Form::text('year', '', array( 'autofocus' => 'autofocus')) }} </br>
	</p>

		{{ Form::submit('Add season') }}
	</p>
		
			
	{{ Form::close() }}
	
@stop 