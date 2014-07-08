<?php

class TeamsController extends BaseController {


	public $restful = true;

	public function index() {
		
		return View::make('teams.index')
		->with('title', 'Teams page')
		->with('teams', Team::orderBy('name')->get());
	}

	
	
	public function view($id) {
		
		return View::make('teams.view')
		->with('title', 'Team View page')
		->with('teams', Team::orderBy('name')->get())
		->with('team', Team::find($id))
		->with('players', Player::where('team_id', '=', $id)->get()); 
    }

	 public function newTeam($season_id, $league_id) {
			
			return View::make('teams.new')
			->with('title', 'New team')
			->with('league', League::find($league_id)->first());
			
	}

	public function createTeam() {
		Team::create(array(
			'name'=>Input::get('name'),
			'abbr'=>Input::get('abbr'),
			'logo'=>Input::file('logo'),
			'email'=>Input::get('email'),
			'phone'=>Input::get('phone'),
			'leagues_id'=>Input::get('leagues_id')
			));
		return Redirect::route('seasons')
			->with('message', 'Your post was successful!');
	}


	public function newPlayer($team_id) {
			
			return View::make('teams.newPlayer')
			->with('team', Team::find($team_id))
			->with('players', Player::where('team_id', '=', $team_id)->get())
			->with('title', 'New Player');

	}
			
	public function createPlayer($team_id) {
		Player::create(array(
			'first_name'=>Input::get('first_name'),
			'last_name'=>Input::get('last_name'),
			'position'=>Input::get('position'),
			'jersey'=>Input::get('jersey'),
			'team_id'=> $team_id
			));
		return Redirect::route('new_player', array($team_id))
			->with('message', 'Player was added!');
	}


			
		
			
	
}
