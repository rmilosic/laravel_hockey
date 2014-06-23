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
		->with('players', Player::where('id', '=', $id)->get()); 
    }

	 public function newTeam() {
			
		

			return View::make('teams.new')
			->with('title', 'New team')
			->with('leagueList', League::lists('name', 'id'));
			
	}

	public function createTeam() {
		Team::create(array(
			'name'=>Input::get('name'),
			'abbr'=>Input::get('abbr')
			));
		return Redirect::route('teams')
			->with('message', 'Your post was successful!');
	}




			
		
			
	
}
