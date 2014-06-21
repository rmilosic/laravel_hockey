<?php

class LeaguesController extends BaseController {

public $restful = true;

	public function index() {
		
		return View::make('leagues.index')
		->with('title', 'Leagues page')
		->with('leagues', League::orderBy('name')->get());
	}

	public function view($league_id) {
		
		return View::make('leagues.view')
		->with('title', 'Leagues view')
		->with('leagueName', League::where('league_id', '=', $league_id)->first())
		->with('leagues', League::orderBy('name')->get())
		->with('teams', Team::where('league_id', '=', $league_id)->get()); 
	}

	public function newLeague() {
			return View::make('leagues.new')
			->with('title', 'Add new league');
			
	}

	public function createLeague() {
		Team::create(array(
			'name'=>Input::get('name'),
			));

		return Redirect::to_route('leagues')
			->with('message', 'Your post was successful!');
	}

}


