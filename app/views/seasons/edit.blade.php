@extends('layouts.frontend')

@section('content')

	{{ render('common.seasonErrors', array('season' => $season_id)) }}

	<h1>Editing Season {{ $season->year }} </h1>

	{{ Form::open('season/update', 'PUT') }}

	<p>
		{{ Form::label('year', 'Leto sezone:') }}
		{{ Form::text('year', $season->year, array( 'autofocus' => 'autofocus')) }} </br>
	</p>

	{{ Form::hidden('id', $season->id) }}
	
	<p>
	{{Form::submit('Update Season') }}
	</p>
	{{Form::close()}}

@stop