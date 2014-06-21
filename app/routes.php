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

Route::get('/', array(
	'as' => 'home',
	'uses'=> 'HomeController@home'));

/* Teams */

Route::get('/teams', array(
	'as' => 'teams',
	'uses'=> 'TeamsController@index'));

Route::pattern('team_id', '[0-9]+');
Route::get('teams/{team_id}', array(
	'as' => 'team',
	'uses' => 'TeamsController@view'));


Route::get('teams/new', array(
	'as' => 'new_team',
	'uses' => 'TeamsController@newTeam'));

Route::post('teams/create', array(
	'uses' => 'TeamsController@createTeam'));


/* Leagues */

Route::get('/leagues', array(
	'as' => 'leagues',
	'uses'=> 'LeaguesController@index'));


Route::pattern('league_id', '[0-9]+');
Route::get('/leagues/{league_id}', array(
	'as' => 'league',
	'uses'=> 'LeaguesController@view'));

Route::get('leagues/new', array(
	'as' => 'new_league',
	'uses' => 'LeaguesController@newLeague'));

Route::post('leagues/create', array(
	'uses' => 'LeaguesController@createLeague'));