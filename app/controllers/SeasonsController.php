<?php

class SeasonsController extends BaseController {

public $restful = true;

	public function index() {
			return View::make('seasons.index')
			->with('title', 'Seasons ')
			->with('seasons', Season::orderBy('year', 'DES')->get())
			->with('leagues', League::all());
					
	}

	
					
	public function newSeason() {
		
		return View::make('seasons.new')
		->with('title', 'Add new season')
		->with('seasonsList', Season::lists('year', 'id'));
		
	}

	public function createSeason() {
		$validation = Season::validate(Input::all());

		if($validation->fails()) {

		return Redirect::route('new_season')->withErrors($validation)->withInput();

		} else {

		Season::create(array(
			'year'=>Input::get('year')
			));

		return Redirect::route('seasons')
			->with('message', 'Your post was successful!');
		}

	}


		public function edit($season_id) {
		
		return View::make('seasons.edit')
		->with('title', 'Edit season')
		->with('season', Season::find($season_id));	

		$validation = Season::validate(Input::all());

		if($validation->fails()) {

		return Redirect::route('new_season')->withErrors($validation)->withInput();

		} else {

			
		}


	}

	

}
