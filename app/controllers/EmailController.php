<?php

use Lib\Validation\EmailValidator as EmailValidator;

class EmailController extends BaseController {

	public function __construct(EmailValidator $validation)
	{
		parent::__construct();
		$this->validation = $validation;
	}

	public function getForm()
	{
		return View::make('email');
	}

	public function postForm()
	{
		if ($this->validation->fails()) {
		  return Redirect::to('email/form')
		  ->withErrors($this->validation->errors());
		} else {
    		$email = new Email;
			$email->email = Input::get('email');
			$email->save();
			return View::make('email_ok');
		}
	}

}