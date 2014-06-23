<?php

class Player extends Base {
	//public static $table = 'teams';

	protected $primaryKey = 'player_id';

	public function team()
    {
        return $this->belongsTo('Team');
    }
	
}