@extends('layouts.frontend')

@section('content')

<h1> {{ $title }} </h1>

<div class="row">
	<div class="col-md-4">
{{ Form::open(array('url' => 'games/create', 'method' => 'POST')) }}
	
	<p>
			{{ Form::label('type', 'Tip:') }} 
			{{ Form::select('type', array('redni' => 'redni','končnica' => 'končnica', 'razvrstitveni' => 'razvrstitveni', 'finale' => 'finale'), 'redni') }} 
	</p>
	<p>
			{{ Form::label('location', 'Lokacija:') }} 
			{{ Form::text('location') }} 
	</p>

	<p>
		{{ Form::label('date', 'Datum:') }} 
		<div id="sandbox-container">
			<div class="input-group date">
				 <input id="date" name="date" type="text" class="form-control" data-provide="datepicker" data-date-format="yyyy/mm/dd"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
			</div>
		</div>
	</p>

	<p>
		{{ Form::label('time', 'Čas:') }} 
	    <div class="input-append bootstrap-timepicker">
		<input id="time" name="time" type="text">
		<span class="add-on">
		<i class="icon-time"></i>
		</span>
		</div>
	</p>

	

	<p>
			
			{{ Form::hidden('leagues_id', $league->id) }} 
	</p>

	<p>
			{{ Form::label('home_id', 'Domači:') }}
			{{ Form::select('home_id', $teamList) }} 
	</p>

	<p>
			{{ Form::label('away_id', 'Gostje:') }}
			{{ Form::select('away_id', $teamList) }} 
	</p>
	
	

	<p>
			{{ Form::label('referee1', 'sodnik1:') }} 
			{{ Form::text('referee1') }} 
	</p>

	<p>
			{{ Form::label('referee2', 'sodnik2:') }} 
			{{ Form::text('referee2') }} 
	</p>



		{{ Form::submit('Add game') }}
	</p>
		
			
	


		{{ Form::close() }}

</div>	

	
@stop