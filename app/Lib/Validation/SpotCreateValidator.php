<?php namespace Lib\Validation;

class SpotCreateValidator extends BaseValidator {

    public function __construct()
	{
		$this->regles = array(
			'name' => 'required|max:100',
			'address' => 'required|max:255',
			'description' => 'required',
			'lat' => 'required|numeric|min:-90|max:90',
			'lon' => 'required|numeric|min:-180|max:180',
		);
	}

}