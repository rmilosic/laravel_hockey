<?php

class TeamsController extends BaseController {


	public $restful = true;

	public function index() {
		
		return View::make('teamsView');
	}


}
