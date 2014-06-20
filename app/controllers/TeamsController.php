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
		->with('team', Team::find($team_id))
		->with('players', Player::where($team_id = $team_id));

	}



}
