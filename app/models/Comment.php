<?php
class Comment extends Eloquent{

	protected $fillable = array('titre','contenu','user_id');
	public $timestamps = true;

	public function user() 
	{
		return $this->belongsTo('User');
	}

	public function spot() 
	{
		return $this->belongsTo('Spot');
	}

}