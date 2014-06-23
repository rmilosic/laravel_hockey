<?php

class Season extends Base {
	//public static $table = 'teams';

	protected $guarded = array('');
	
	public function seasons()
    {
        return $this->belongsTo('League');
    }
}