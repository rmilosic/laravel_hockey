<?php

class Goal extends Base {


	protected $guarded = array('');

	
	


    //protected $fillable = ['name'];

	public function game()
    {
        return $this->belongsTo('Game');

    }
}

