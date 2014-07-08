<?php

class Season extends Base {
	//public static $table = 'teams';

	protected $guarded = array('');
	
	public function leagues()
    {
        return $this->hasMany('League', 'seasons_id');
    }


    public static $rules = array(
    	'year' => 'required|min:7'
    	);

    public static function validate($data){
    	return Validator::make($data, static::$rules);
    }
}