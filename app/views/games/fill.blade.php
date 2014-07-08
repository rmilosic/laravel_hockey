@extends('layouts.frontend')

@section('content')


	<h2> {{ $homeTeam->name }} : {{ $awayTeam->name }} </h2>

	<div class="row">
		<div class="col-md-10">
			<table class="table table-condensed table-striped">
				<thead>
					<tr>
						<th class="col-sm-1">Type</th>
						<th class="col-sm-1">Location</th>
						<th class="col-sm-1">Date</th>
						<th class="col-sm-1">Time</th>
						<th class="col-sm-1">Referee 1</th>
						<th class="col-sm-1">Referee 2</th>
						<th class="col-sm-1">Home Team</th>
						<th class="col-sm-1">Away Team</th>
						<th class="col-sm-1">League</th>
					</tr>
				</thead>
				<tbody >
					<tr>
						<td> {{ $game->type }}</td>
						<td> {{ $game->location }}</td>
						<td> {{ $game->date }}</td>
						<td> {{ $game->time }}</td>
						<td> {{ $game->referee1 }}</td>
						<td> {{ $game->referee2 }}</td>
						<td> {{ $homeTeam->name }}</td>
						<td> {{ $awayTeam->name }}</td>
						<td> {{ $league->name }}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>


	{{ Form::open(array('url' => 'data/create', 'method' => 'POST'))}}

	<!-- HOME GOALS TABLE -->
	<div class="row">
		<div class="col-md-6">
		<h2> Goals - home </h2>
			<table id="homeTable" class="table table-condensed table-striped">
				<thead>
					<tr>
						<th class="col-sm-1">Period</th>
						<th class="col-sm-1">Time </th>
						<th class="col-sm-1">Scorer</th>
						<th class="col-sm-1">Assist1</th>
						<th class="col-sm-1">Assist2</th>
						<th class="col-sm-1">tip</th>
					</tr>
				</thead>
				<tbody >
					<tr class="home_clone">
						<td>{{ Form::select('period', array('1', '2', '3', '4'), '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::text('goalTime', '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::select('scorer', $homePlayers, '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::select('assist1', $homePlayers, '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::select('assist2', $homePlayers, '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::select('tip', array('REG' => 'REG', 'PP' => 'PP', 'SH' => 'SH'), 'REG', array('class' => 'form-control'))}}</td>
					</tr>
				</tbody>
			</table>

				<button type="button" id="home-clone-add" class="btn btn-default">Add a row</button> <button type="button" class="hide btn btn-default home-remove">Remove</button>
		</div>


		<!-- HOME PENALTIES TABLE -->
		<div class="col-md-6">
		<h2> Penalties - home </h2>
			<table id="homePenTable" class="table table-condensed table-striped">
				<thead>
					<tr>
						<th class="col-sm-1">Period</th>
						<th class="col-sm-1">Time </th>
						<th class="col-sm-1">Player</th>
						<th class="col-sm-1">Length</th>
						<th class="col-sm-1">Code</th>
					</tr>
				</thead>
				<tbody >
					<tr class="home_clone">
						<td>{{ Form::select('period', array('1', '2', '3', '4'), '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::text('penTime', '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::select('penplayer', $homePlayers, '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::text('length', '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::text('code', '', array('class' => 'form-control'))}}</td>
					</tr>
				</tbody>
			</table>

				<button type="button" id="home-pen-add" class="btn btn-default">Add a row</button> <button type="button" class="hide btn btn-default pen-remove">Remove</button>
		</div>

	</div>


	<!-- AWAY GOALS TABLE -->

	<div class="row">

		<div class="col-md-6">
		<h2> Goals - away </h2>
			<table id="awayTable" class="table table-condensed table-striped">
				<thead>
					<tr>
						<th class="col-sm-1">Period</th>
						<th class="col-sm-1">Time </th>
						<th class="col-sm-1">Scorer</th>
						<th class="col-sm-1">Assist1</th>
						<th class="col-sm-1">Assist2</th>
						<th class="col-sm-1">tip</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>{{ Form::select('period', array('1', '2', '3', '4'), '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::text('goalTime', '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::select('scorer', $awayPlayers, '', array('class' => 'form-control scorer'))}}</td>
						<td>{{ Form::select('assist1', $awayPlayers, '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::select('assist2', $awayPlayers, '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::select('tip', array('REG' => 'REG', 'PP' => 'PP', 'SH' => 'SH'), 'REG', array('class' => 'form-control'))}}</td>
					</tr>
				</tbody>
			</table>
			<button type="button" id="away-clone-add" class="btn btn-default">Add a row</button> <button type="button" class="hide btn btn-default away-remove">Remove</button>
		</div>
		
		<!-- AWAY PENALTIES TABLE -->
		<div class="col-md-6">
		<h2> Penalties - away </h2>
			<table id="awayPenTable" class="table table-condensed table-striped">
				<thead>
					<tr>
						<th class="col-sm-1">Period</th>
						<th class="col-sm-1">Time </th>
						<th class="col-sm-1">Player</th>
						<th class="col-sm-1">Length</th>
						<th class="col-sm-1">Code</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>{{ Form::select('period', array('1', '2', '3', '4'), '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::text('penTime', '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::select('penplayer', $awayPlayers, '', array('class' => 'form-control scorer'))}}</td>
						<td>{{ Form::text('length', '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::text('code', '', array('class' => 'form-control'))}}</td>
					</tr>
				</tbody>
			</table>
			<button type="button" id="away-pen-add" class="btn btn-default">Add a row</button> <button type="button" class="hide btn btn-default awayPen-remove">Remove</button>
		</div>
	</div>

<div class="row">
	<div class="col-md-2">
	</br>
		<p> {{ Form::submit('Add data') }} </p>
	</div>
</div>


@stop