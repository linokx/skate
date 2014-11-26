<?php

use Lib\Validation\UserCreateValidator as UserCreateValidator;
use Lib\Validation\UserUpdateValidator as UserUpdateValidator;
use Lib\Validation\PhotoValidator as PhotoValidator;
use Lib\Gestion\PhotoGestion as PhotoGestion;
use Lib\Gestion\UserGestion as UserGestion;

class UserController extends BaseController {

    protected $create_validation;
	protected $update_validation;
	protected $user_gestion;
	protected $user = '';

	public function __construct(
		UserCreateValidator $create_validation, 
		UserUpdateValidator $update_validation,
		PhotoValidator $validation, 
		PhotoGestion $photogestion,
		UserGestion $user_gestion)
	{
		parent::__construct();
		//$this->beforeFilter('auth');
		$this->create_validation = $create_validation;
		$this->update_validation = $update_validation;
		$this->user_gestion = $user_gestion;
		$this->photoValidation = $validation;
		$this->photogestion = $photogestion;
		if(Auth::check()){
			$this->user = Auth::user();
		}
	}

	public function index()
	{
		return View::make('user.index', $this->user_gestion->index(4));
	}

	public function create()
	{
		return View::make('user.create');
	}

	public function store()
	{
		if ($this->create_validation->fails()) {
		  return Redirect::to('user/create')
		  ->withInput()
		  ->withErrors($this->create_validation->errors());
		} else {
			$this->user_gestion->store();
			return Redirect::to('/');
		}		
	}

	public function show($id)
	{
		if($user = $this->user_gestion->show($id)){
			return View::make('user.show',$user);
		}
		else{
			return Redirect::to('/');
		}
	}

	public function edit(){
		if(Auth::user()){
			return View::make('user.edit',  $this->user_gestion->show(Auth::user()->id));
		}
	}

    public function profil()
	{
		if(Auth::check()){
			$id = $this->user->id;
			return View::make('user.profil',  $this->user_gestion->show($id));
		}
	}
	public function update()
	{
		if(Auth::user()){
			$id = Auth::user()->id;
			if(Input::file('image') != null){
				if ($this->photoValidation->fails()) {
		    		return Redirect::to('profil/edit')
            		->withErrors($this->validation->errors());
				} else {
					$photo = $this->photogestion->save(Input::file('image'),'user');
					$this->user_gestion->updatePhoto($id,$photo);
					 
				}
			}
			if ($this->update_validation->fails($id)) {
			  return Redirect::to('profil/edit')
			  ->withInput()
			  ->withErrors($this->update_validation->errors());
			} else {
				$this->user_gestion->update($id);
				return Redirect::to('profil')
				->with('status','L\'utilisateur a bien été modifié.');
			}	
		}
		else{
			  return Redirect::to('profil')
			  ->withInput()
			  ->with('security','Vous n\'avez pas les droits');
		}	
	}

	public function destroy($id)
	{
		$this->user_gestion->destroy($id);
		return Redirect::back();
	}

	public function photo($id = null ){
		if($id == null and $this->user != null){
			$id = $this->user->id;
		}
		return View::make('user.page_photo',  $this->user_gestion->photo($id));
	}


}