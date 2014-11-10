<?php namespace Lib\Validation;

class UserLoginValidator extends BaseValidator {

    public function __construct()
	{
		$this->regles = array(
			'pseudo' => 'required|min:4',
			'password' => 'required'
		);
	}

}