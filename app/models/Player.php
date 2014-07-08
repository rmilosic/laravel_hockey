<?php

class Player extends Base {
	//public static $table = 'teams';


	protected $guarded = array();

	public function team()
    {
        return $this->belongsTo('Team');
    }
	
}