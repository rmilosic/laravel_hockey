<?php

class Game extends Base {


	protected $guarded = array('');

	
	


    //protected $fillable = ['name'];

	public function league()
    {
        return $this->belongsTo('League');
    }

    public function goals()
    {
        return $this->hasMany('Goals');
    }
}

