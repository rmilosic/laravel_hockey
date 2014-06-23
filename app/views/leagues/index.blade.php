@extends('layouts.frontend')

@section('content')


	<h1> This is {{$title}}  </h1>
	

	<ul>
	@foreach ($leagues as $league)
		<li> {{ link_to_route('league',   $league->name, array($league->id)) }}  </li>
	@endforeach
	</ul>


	<p> {{ link_to_route('new_league', 'Add new league')}} </p>

@stop 