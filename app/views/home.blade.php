@extends('layouts.homepage')



@section('content')


	<h1> This is INDEX page </h1>


@stop 

@section('sidebar')
	
	<table class="table table-hover">
 		<thead>
 			<th>#</th>
 			<th>Ekipa</th>
 			<th>GP</th>
 			<th>W</th>
 			<th>T</th>
 			<th>L</th>
 			<th>±</th>
 			<th><strong>PTS<strong></th>
 		</thead>

 		<tbody>
 		@foreach($teams as $team)
 			<tr>
 				<td> {{ $team->name }}</td>
 				<td>{{ $team->abbr }}</td>
 				<td>3</td>
 				<td>3</td>
 				<td>0</td>
 				<td>0</td>
 				<td>17</td>
 				<td>16</td>
 			</tr>
		@endforeach
 		</tbody>
	</table>
	
@stop