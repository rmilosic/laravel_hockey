<?php

class League extends Eloquent {
	//public static $table = 'teams';

	protected $primaryKey = 'league_id';
	protected $fillable = array('name');
	protected $guarded = array();

    //protected $fillable = ['name'];

	public function leagues()
    {
        return $this->hasMany('Season');


    }
}