<?php

class SeasonsController extends BaseController {

public $restful = true;


	public function view($league_id, $season_id) {
		
		return View::make('seasons.view')
		->with('title', 'Season view')
		->with('league', League::where('id', '=', $league_id)->first())
		->with('season', Season::find($season_id)->first())
		->with('teams', Team::where('season_id', '=', $season_id)->get());
		
	}

	public function newSeason($league_id) {
		
		return View::make('seasons.new')
		->with('league', League::where('id', '=', $league_id)->first())
		->with('title', 'Add new season');
		
	}

	public function createSeason($league_id) {
		Season::create(array(
			'year'=>Input::get('year'),
			'league_id'=> $league_id 
			));

		return Redirect::route('leagues')
			->with('message', 'Your post was successful!');
	}

}
