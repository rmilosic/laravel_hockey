<?php

class Team extends Base {
	//public static $table = 'teams';


	protected $guarded = array('');

	public $timestamps = false;
	
	public function players()
    {
        return $this->hasMany('Player', 'team_id');
    }

    public function league()
    {
        return $this->belongsTo('League', 'leagues_id');
    }
}
