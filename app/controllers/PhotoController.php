<?php

use Lib\Validation\PhotoValidator as PhotoValidator;
use Lib\Gestion\PhotoGestion as PhotoGestion;

class PhotoController extends BaseController {

    protected $photogestion;

	public function __construct(PhotoValidator $validation, PhotoGestion $photogestion)
	{
		parent::__construct();
		$this->validation = $validation;
		$this->photogestion = $photogestion;
	}

	public function spot($id){
		if ($this->validation->fails()) {
		    return Redirect::to('spot/'.$id)
            ->withErrors($this->validation->errors());
		} else {
			if($photo = $this->photogestion->save(Input::file('image'),'spot',$id)) {
		    	return Redirect::to('spot/'.$id);
			} else {
		    	return Redirect::to('spot/'.$id)
                ->with('error','Désolé mais votre image ne peut pas être envoyée !');
			}
		}
	}
	public function getForm()
	{
		return View::make('photo');
	}

	public function postForm()
	{
		if ($this->validation->fails()) {
		    return Redirect::to('photo/form')
            ->withErrors($this->validation->errors());
		} else {
			if($this->photogestion->save(Input::file('image'))) {
				return Redirect::to('profil');
			} else {
				return Redirect::to('photo/form')
                ->with('error','Désolé mais votre image ne peut pas être envoyée !');
			}
		}
	}

}