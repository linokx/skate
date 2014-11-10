<?php namespace Lib\Gestion;

use Photo;
use Auth;
use Str;
use Config;
use Input;

class PhotoGestion implements PhotoGestionInterface {

   	private function saveFile($image){
		list($width, $height) = getimagesize($image);
		$chemin = Config::get('image.path');
		$extension = $image->getClientOriginalExtension();
		do {
			$name = Str::random(10) . '.' . $extension;
		} while(file_exists($chemin . '/' . $name)); 
		if($image->move($chemin, $name)){
			return array('name'=>$name,'width'=> $width,'height'=> $height);
		}
		else{
			return false;
		}
	}
	public function save($image,$spot_id = null){
		if($data = $this->saveFile($image)){
			$photo = new Photo;
			$photo->url = $data['name'];
			$photo->width = $data['width'];
			$photo->height = $data['height'];
			$photo->user_id = Auth::user()->id;
			$photo->spot_id = ($spot_id != null)?$spot_id:'';
			$photo->save();

			return $photo;
		}
		else{
			return false;
		}
	}

}