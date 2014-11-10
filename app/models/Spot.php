<?php
class Spot extends Eloquent{
	
	protected $table = 'spots';

	

	public function comments() 
	{
    	return $this->hasMany('Comment');
	}

	public function photos() 
	{
    	return $this->hasMany('Photo');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}

	static public function near($lat,$lon,$radius){
		$spots = DB::table('spots')
				->whereRaw('(6366*acos(cos(radians('.$lat.'))*cos(radians(`lat`))*cos(radians(`lon`) -radians('.$lon.'))+sin(radians('.$lat.'))*sin(radians(`lat`)))) <= '.$radius)
				->get();
			return $spots;
	}
}