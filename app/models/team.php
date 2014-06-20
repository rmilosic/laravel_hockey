<?php

class Team extends Eloquent {
	//public static $table = 'teams';

	protected $primaryKey = 'team_id';
	
	public function players()
    {
        return $this->hasMany('Player');
    }
}