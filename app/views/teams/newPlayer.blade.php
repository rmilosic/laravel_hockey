@extends('layouts.frontend')

@section('content')


	<h2> {{ $team->name }} </h2>
<div class="row">

	<div class="col-md-4">
			<table class="table table">
				<thead>
					<th>Ime in priimek</th>
					<th>Pozicija</th>
					<th>dres</th>
				</thead>
				<tbody>
					@foreach($players as $player)
					<tr>
						<td>{{ $player->first_name }} {{ $player->last_name }} </td>
						<td>{{ $player->position }}</td>
						<td>{{ $player->jersey }}</td>
					@endforeach
					<tr>
				</tbody>
			</table>
	</div>

</div>

<div class="row">
	
		<div class="col-sm-4">
				<h3> Dodaj igralca </h3>

				{{ Form::open(array('method' => 'POST', 'route' => array('create_player', $team->id))) }}

				<p>
					{{ Form::label('first_name', 'Ime:') }}
					{{ Form::text('first_name') }}
				</p>


				<p>
					{{ Form::label('last_name', 'Priimek:') }}
					{{ Form::text('last_name') }}
				</p>

				<p>
					{{ Form::label('position', 'Izberi položaj') }}
					{{ Form::select('position', array('p' => 'igralec', 'g' => 'vratar')), '' }}
				</p>

				<p>
					{{ Form::label('jersey', '# dresa') }}
					{{ Form::selectRange('jersey', 1, 99) }}
				</p>

				{{ Form::submit('Add Player')}}

				{{ Form::close()}}

		</div>

@stop