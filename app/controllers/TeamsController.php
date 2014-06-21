<?php

class TeamsController extends BaseController {


	public $restful = true;

	public function index() {
		
		return View::make('teams.index')
		->with('title', 'Teams page')
		->with('teams', Team::orderBy('team_name')->get());
	}

	
	
	public function view($team_id) {
		
		return View::make('teams.view')
		->with('title', 'Team View page')
		->with('teams', Team::orderBy('team_name')->get())
		->with('team', Team::find($team_id))
		->with('players', Player::where('team_id', '=', $team_id)->get()); 
    }

	 public function newTeam() {
			
			return View::make('teams.new')
			->with('title', 'New team');
			
	}

	public function createTeam() {
		Team::create(array(
			'team_name'=>Input::get('team_name'),
			'abbr'=>Input::get('abbr')
			));
		return Redirect::to_route('teams')
			->with('message', 'Tole je blo pa uspešno, ne');
	}




			
		
			
	
}
