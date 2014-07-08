<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::pattern('league_id', '[0-9]*');
Route::pattern('season_id', '[0-9]*');
Route::pattern('team_id', '[0-9]*');

Route::get('/', array(
	'as' => 'home',
	'uses'=> 'HomeController@home'));

/* Teams */

Route::get('/teams', array(
	'as' => 'teams',
	'uses'=> 'TeamsController@index'));

Route::pattern('team_id', '[0-9]*');
Route::get('teams/{team_id}', array(
	'as' => 'team',
	'uses' => 'TeamsController@view'));


Route::get('/teams/new/', array(
	'as' => 'new_team',
	'uses' => 'TeamsController@newTeam'));

/* API DROPDOWN */

Route::post('teams/new/api/dropdown', function(){
    $input = Input::get('option');
    $season = Season::find($input);
	$leagues = $season->leagues();
	return Response::json($leagues->get(array('id','name')));
});    

Route::post('teams/new/api/dropdown2', function(){
	$input2 = Input::get('option2');
	$league = League::find($input2);
	$home_teams = $league->teams();
	return Response::json($home_teams->get(array('id','name')));
});   




Route::post('teams/create', array(
	'uses' => 'TeamsController@createTeam'));

Route::get('teams/{team_id}/new', array(
	'as' => 'new_player',
	'uses' => 'TeamsController@newPlayer'));

Route::post('players/{team_id}', array(
	'as' => 'create_player',
	'uses' => 'TeamsController@createPlayer'));


/* Leagues */

Route::get('/leagues', array(
	'as' => 'leagues',
	'uses'=> 'LeaguesController@index'));


Route::pattern('league_id', '[0-9]*');
Route::get('/seasons/{season_id}/{league_id}', array(
	'as' => 'league',
	'uses'=> 'LeaguesController@view'));


/*TEAMS*/

Route::get('/seasons/{season_id}/{league_id}/newteam', array(
	'as' => 'new_team',
	'uses'=> 'TeamsController@newTeam'));

Route::post('teams/create/{season_id}/{league_id}', array(
	'uses'=> 'TeamsController@createTeam'));

Route::get('leagues/new', array(
	'as' => 'new_league',
	'uses'=> 'LeaguesController@newLeague'));

Route::post('leagues/create', array(
	'uses' => 'LeaguesController@createLeague'));


/* Seasons */

Route::get('/seasons', array(
	'as' => 'seasons',
	'uses'=> 'SeasonsController@index'));

Route::get('/seasons/{season_id}', array(
	'as' => 'season',
	'uses'=> 'SeasonsController@view'));

Route::get('/seasons/new', array(
	'as' => 'new_season',
	'uses'=> 'SeasonsController@newSeason'));

Route::post('seasons/create', array(
	'as' => 'create_season',
	'uses' => 'SeasonsController@createSeason'));

Route::get('/seasons/{season_id}/edit', array(
	'as' => 'edit_season',
	'uses'=> 'SeasonsController@edit'));




/* Games */

Route::get('/seasons/{season_id}/{league_id}/newgame', array(
	'as' => 'new_game',
	'uses'=> 'GamesController@newGame'));

Route::post('games/create', array(
	'uses'=> 'GamesController@createGame'));

Route::get('game/{game_id}/fill', array(
	'as' => 'fill_game',
	'uses'=> 'GamesController@fillGame'));

/* FILL GAME */

Route::post('data/create', array(
	'uses' => 'GamesController@createData'));