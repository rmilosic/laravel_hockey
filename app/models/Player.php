<?php

class Player extends Eloquent {
	//public static $table = 'teams';

	protected $primaryKey = 'player_id';

	public function team()
    {
        return $this->belongsTo('Team');
    }
	
}