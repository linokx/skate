<?php
class Photo extends Eloquent{
	
	protected $table = 'photos';
	
	public function user() 
	{
		return $this->belongsTo('User');
	}
	
	public function spot() 
	{
		return $this->belongsTo('Spot');
	}

}