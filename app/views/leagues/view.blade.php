@extends('layouts.frontend')

@section('content')


	<h1> This is {{ $league->name }}  </h1>
	
	<h2> Sezone </h2>

	@foreach ($seasons as $season)
	<ul>
		<li> {{ link_to_route('season', $season->year, array($season->id, $league->id))  }} </li>
	@endforeach
	</ul>

	
	{{ link_to_route('new_season', 'Add new season', array($league->id))  }}


@stop 