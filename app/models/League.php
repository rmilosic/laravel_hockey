<?php

class League extends Base {


	protected $guarded = array('');

	
	


    //protected $fillable = ['name'];

	public function season()
    {
        return $this->belongsTo('Season');

    }

    public function teams()
    {
        return $this->hasMany('Team', 'leagues_id');

    }
}

