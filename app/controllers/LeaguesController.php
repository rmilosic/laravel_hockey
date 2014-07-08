<?php

class LeaguesController extends BaseController {

public $restful = true;

	public function index() {
		
		return View::make('leagues.index')
		->with('title', 'Leagues page')
		->with('leagues', League::orderBy('name')->get());
	}

	public function view($season_id, $league_id) {
		
		return View::make('leagues.view')
		->with('title', 'League view')
		->with('seasons', Season::orderBy('year', 'DES')->get())
		->with('leagues', League::all())
		->with('league', League::where('id', '=', $league_id)->first())
		->with('teams', Team::where('leagues_id', '=', $league_id)->orderBy('name')->get())
		->with('season', Season::find($season_id)->first())
		->with('games', Game::where('leagues_id', '=', $league_id)->orderBy('date')->get());
	}

	public function newLeague() {
			return View::make('leagues.new')
			->with('title', 'Add new league')
			->with('seasonsList', Season::lists('year', 'id'));	
	}

	public function newTeam($season_id, $league_id) {
			return View::make('teams.new')
			->with('title', 'Add new team');	
	}

	public function createLeague() {
		League::create(array(
			'name'=>Input::get('name'),
			'seasons_id'=>Input::get('seasons_id')
			));

		return Redirect::route('leagues')
			->with('message', 'Your post was successful!');
	}
	
}


