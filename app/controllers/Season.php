<?php

class Season extends Eloquent {
	//public static $table = 'teams';

	protected $primaryKey = 'season_id';
	
	public function seasons()
    {
        return $this->belongsTo('League');
    }
}