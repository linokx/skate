<?php namespace Lib\Gestion;

use User;
use Photo;
use Input;
use Hash;

class UserGestion implements UserGestionInterface {
	private function create($user){

		$user->email = Input::get('email');
		$user->pseudo = Input::get('pseudo');
		$user->save();
	}
    private function save($user)
	{
		$user->name = Input::get('name');
		$user->email = Input::get('email');
		$user->pseudo = Input::get('pseudo');
		$user->city = Input::get('city');
		$user->birthday = Input::get('birthday');
		$user->save();
	}

	public function index($n)
	{
		$users = User::paginate($n);
		return compact('users');
	}

	public function store()
	{
		$user = new User;		
		$user->password = Hash::make(Input::get('password'));
		$this->create($user);
	}

	public function show($id)
	{
		$user = User::find($id);
		if($user == null){
			return false;
		}
		$user->photo = Photo::find($user->photo);
		return compact('user');
	}

	public function edit($id)
	{
		$user = User::find($id);
		return compact('user');
	}

	public function update($id)
	{
		$user = User::find($id);
		$this->save($user);
	}

	public function destroy($id)
	{
		User::find($id)->delete();
	}

	public function updatePhoto($id, $photo){
		$user = User::find($id);
		$user->photo = $photo->id;
		$user->save();
	}

}