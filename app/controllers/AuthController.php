<?php

use Lib\Validation\UserLoginValidator as UserLoginValidator;

class AuthController extends BaseController {

    protected $login_validation;

	public function __construct(UserLoginValidator $login_validation)
	{
		parent::__construct();
		$this->login_validation = $login_validation;
	}

	public function getLogin()
	{
		  return Redirect::to('/');
	}

	public function postLogin()
	{
		if ($this->login_validation->fails()) {
		  return Redirect::to('/')
		  ->withErrors($this->login_validation->errors())
		  ->withInput();
		} else {
			$user = array(
				'pseudo' => Input::get('pseudo'), 
				'password' => Input::get('password')
			);
			if(Auth::attempt($user, Input::get('souvenir'))) {
				return Redirect::back();
			}
		    return Redirect::to('/')
		    ->with('pass', 'Le mot de passe n\'est pas correct !')
		    ->withInput();
		}
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

}