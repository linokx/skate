<?php

class HomeController extends BaseController {

	protected $layout = 'template';

	public function index()
	{
		return View::make('hello',array('body_id'=>'home'));
	}

}
