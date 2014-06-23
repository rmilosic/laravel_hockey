<?php

class League extends Base {


	protected $guarded = array('');

	
	


    //protected $fillable = ['name'];

	public function leagues()
    {
        return $this->hasMany('Season');

    }
}

