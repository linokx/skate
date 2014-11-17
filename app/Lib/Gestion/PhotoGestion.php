<?php namespace Lib\Gestion;

use Photo;
use Auth;
use Str;
use Config;
use Input;
use Image;

class PhotoGestion implements PhotoGestionInterface {

   	private function saveFile($image, $folder){

		list($width, $height) = getimagesize($image);
		$chemin = Config::get('image.path').'/'. $folder;
		$extension = $image->getClientOriginalExtension();
		do {
			$name = Str::random(10) . '.' . $extension;
		} while(file_exists($chemin . '/' . $name)); 

		$img = Image::make($image);

		if( $img->save($chemin . '/large/' . $name) && 
			$img->fit(200, 200)->save($chemin . '/thumbnail/' . $name)
			)
		{
			return array('name'=>$name,'width'=> $width,'height'=> $height);
		}
		else{
			return false;
		}
	}
	public function save($image,$folder, $spot_id = null){
		if($data = $this->saveFile($image, $folder)){
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