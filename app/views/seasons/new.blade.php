@extends('layouts.frontend')



@section('content')

	

	<h1> Add new season </h1>
	

	@include('common.seasonErrors')
	
	 {{ Form::open(array('method' => 'POST', 'route' => 'create_season' )) }}
	
	<p>
			{{ Form::label('year', 'Leto sezone:') }}
			{{ Form::text('year', Input::old('year'), array( 'autofocus' => 'autofocus')) }} </br>
	</p>

		{{ Form::submit('Add season') }}
	</p>
		
			
	{{ Form::close() }}
	
@stop 