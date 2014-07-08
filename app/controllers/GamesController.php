<?php

class GamesController extends BaseController {

public $restful = true;

public function newGame($season_id, $league_id) {
		
		return View::make('games.new')
		->with('title', 'Add new game')
		->with('league', League::find($league_id)->first())
		->with('teamList', Team::where('leagues_id', '=', $league_id)->lists('name', 'id'));
		
	}

	public function createGame() {
		$game = Game::create(array(
				'type'=>Input::get('type'),
				'location'=>Input::get('location'),
				'date'=>Input::get('date'),
				'time'=>Input::get('time'),
				'referee1'=>Input::get('referee1'),
				'referee2'=>Input::get('referee2'),
				'home_id'=>Input::get('home_id'),
				'away_id'=>Input::get('away_id'),
				'leagues_id'=>Input::get('leagues_id')	
				));

		

		//return Redirect::route('fill_game', array($game->id))->withInput();
		return Redirect::action('GamesController@fillGame', array($game->id))->withInput();
	}

	public function fillGame($game_id) {

		$home_id = Game::find($game_id)->pluck('home_id');
		$away_id = Game::find($game_id)->pluck('away_id');
		$leagues_id = Game::find($game_id)->pluck('leagues_id');

		return View::make('games.fill')
		->with('title', 'Add new game')
		->with('game', Game::find($game_id))
		->with('league', League::find($leagues_id)->first())
		->with('homePlayers', Player::where('team_id', '=', $home_id)->lists('jersey', 'id'))
		->with('awayPlayers', Player::where('team_id', '=', $away_id)->lists('jersey', 'id'))
		->with('homeTeam', Team::find($home_id))
		->with('awayTeam', Team::find($away_id));
	}

	public function createData() {
	}
		

}