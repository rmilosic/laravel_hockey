@extends('layouts.frontend')

@section('content')


	<h3> {{ $homeTeam->name }} : {{ $awayTeam->name }} </h3>

	<div class="row">
		<div class="col-md-7">
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
				<tbody>
					<tr class="home_clone">
						<td>{{ Form::select('period', array('1', '2', '3', '4'), '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::text('goalTime', '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::select('scorer', $homePlayers, '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::select('assist1', $homePlayers, '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::select('assist2', $homePlayers, '', array('class' => 'form-control'))}}</td>
						<td>{{ Form::text('tip', '', array('class' => 'form-control'))}}</td>
					</tr>
				</tbody>
			</table>

				<button type="button" id="home-clone-add" class="btn btn-default">Add a row</button>
		</div>

	</div>

	<div class="row">

		<div class="col-md-7">
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
						<td>{{ Form::text('tip', '', array('class' => 'form-control'))}}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
@stop