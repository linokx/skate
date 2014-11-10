<?php namespace Lib\Validation;

class UserCreateValidator extends BaseValidator {

    public function __construct()
	{
		$this->regles = array(
			'pseudo' => 'required|min:4|max:30|unique:users',
			'email' => 'required|email|unique:users',
			'password' => 'required|min:6|same:password_confirmation',
		);
	}

}