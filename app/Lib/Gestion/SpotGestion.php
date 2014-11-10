<?php namespace Lib\Gestion;

use Spot;
use Photo;
use Auth;
use Input;
use Hash;

class SpotGestion implements SpotGestionInterface {

    private function save($spot)
	{
		$spot->name = Input::get('name');
		$spot->address = Input::get('address');
		$spot->lat = round(10000000*Input::get('lat'))/10000000;
		$spot->lon = round(10000000*Input::get('lon'))/10000000;
		$spot->user_id = Auth::user()->id;
		$spot->save();
	}

	public function index($n)
	{
		$spot = Spot::paginate($n);
		return compact('spot');
	}

	public function store()
	{
		$spot = new Spot;
		$this->save($spot);
	}

	public function show($id)
	{
		$spot = Spot::find($id);
		$spot->photo = Photo::find($spot->photo);
		return compact('spot');
	}

	public function edit($id)
	{
		$spot = Spot::find($id);
		return compact('spot');
	}

	public function update($id)
	{
		$spot = Spot::find($id);
		$this->save($spot);
	}

	public function destroy($id)
	{
		Spot::find($id)->delete();
	}

	public function photo($spot){
		$spot->photo = Photo::find($spot->photo);
		return $spot;
	}

}