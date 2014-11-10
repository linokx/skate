<?php namespace Lib\Validation;

class CommentCreateValidator extends BaseValidator {

    public function __construct()
	{
		$this->regles = array(
			'content' => 'required|max:400',
			'spot' => 'required|exists:spots,id'
		);
	}

}