@extends('layouts.frontend')

@section('content')


	<h2>  {{ $title }} </h2>

	<div class="col-md-3">

		<div id="show-leagues">
			
			<ul>
				@foreach ($seasons as $season)
					<li> {{ link_to_route('season', $season->year, array($season->id) ) }} </li>
						
						<ul>
							@foreach($leagues as $league)	
					   			 @if($league->seasons_id === $season->id) <li> {{ link_to_route('league', $league->name, array($season->id, $league->id)) }} </li>
					   			 @endif
							@endforeach
						</ul>

				@endforeach
			</ul>

	
		{{ link_to_route('new_season', 'Add new season')}}

		</div>
							

	</div>


	<div class="col-md-9">

		<div>
			
			
			
		</div>
							

	</div>
	


 @stop