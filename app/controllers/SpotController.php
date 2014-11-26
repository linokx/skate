<?php

use Lib\Validation\SpotCreateValidator as SpotCreateValidator;
use Lib\Validation\SpotUpdateValidator as SpotUpdateValidator;
use Lib\Gestion\SpotGestion as SpotGestion;
use Lib\Gestion\CommentGestion as CommentGestion;

class SpotController extends \BaseController {

	protected $create_validation;
	protected $update_validation;
	protected $spot_gestion;
	protected $comment_gestion;

	public function __construct(
		SpotCreateValidator $create_validation, 
		SpotUpdateValidator $update_validation,
		SpotGestion $spot_gestion,
		CommentGestion $comment_gestion)
	{
		parent::__construct();
		$this->create_validation = $create_validation;
		$this->update_validation = $update_validation;
		$this->spot_gestion = $spot_gestion;
		$this->comment_gestion = $comment_gestion;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('spots.index', array(
			'spots' => Spot::all(),
			'body_id'=>'spot',
			'body_class' => 'large'
			)
		);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('spots.create',array('body_class'=>'large'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if ($this->create_validation->fails()) {
		  return Redirect::route('spots.create')
		  ->withInput()
		  ->withErrors($this->create_validation->errors());
		} else {
			$this->spot_gestion->store();
			return Redirect::to('spot/')
			->with('ok','L\'utilisateur a bien été créé.');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$spot = Spot::find($id);
		if($spot):
			$comments = Comment::where('spot_id',$spot->id)->orderBy('created_at','DESC')->paginate(10);
			foreach ($comments as $key => &$comment) {
				$comment->user->photo = $this->comment_gestion->getOne($comment->id);
			}
			return View::make('spots.show', array(
				'spot' => $spot,
				'comments' => $comments,
				'body_class'=>'large'
				)
			);
		else:
			return View::make('error.spot');
		endif;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('spots.edit', array(
			'spot' => Spot::find($id)
			)
		);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if(Auth::user()){
			if ($this->update_validation->fails($id)) {
			  return Redirect::route('spots.edit', array($id))
			  ->withInput()
			  ->withErrors($this->update_validation->errors());
			} else {
				$this->spot_gestion->update($id);
				return Redirect::route('spots.index')
				->with('status','Le spot a bien été modifié.');
			}	
		}
		else{
			  return Redirect::route('spots.edit', array($id))
			  ->withInput()
			  ->with('security','Vous n\'avez pas les droits');
		}	
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function liste()
	{
		if(Request::ajax()){}

			$lat = floatval(Request::get('lat'));
			$lon = floatval(Request::get('lon'));
			$radius = floatval(Request::get('rad'));
			$key = Request::get('key');
			$list = $this->checkKey(Spot::near($lat,$lon,$radius),$key);
			$list = $this->getDistance($list,$lat,$lon);
			foreach ($list as $key => &$value) {
				$value = $this->spot_gestion->photo($value);
			}
			return Response::json($list);
		/*}
		else{
		  return Redirect::to('spot');
		}*/
	}

	private function checkKey($array,$key){
		$keyWords = explode(' ', $key);
		foreach ($array as $spot_key => &$value) {
			$value->found = 0;
			foreach ($keyWords as $word) {
				$pattern = '/'.$word.'/';
				$value->found += preg_match($pattern, $value->description);
				$value->found += preg_match($pattern, $value->name);
			}
			if($value->found <= 0){
				unset($array[$spot_key]);
			}
		}
		$sorted = $this->array_orderby($array, 'found', SORT_DESC);
		return $sorted;
	}
	private function array_orderby()
	{
	    $args = func_get_args();
	    $data = array_shift($args);
	    foreach ($args as $n => $field) {
	        if (is_string($field)) {
	            $tmp = array();
	            foreach ($data as $key => $row)
	                $tmp[$key] = $row->$field;
	            $args[$n] = $tmp;
	            }
	    }
	    $args[] = &$data;
	    call_user_func_array('array_multisort', $args);
	    return array_pop($args);
	}

	private function getDistance($list,$lat,$lon)
	{
		foreach ($list as $key => &$value) {
			$value->distance = round((6366*acos(cos(deg2rad($lat))*cos(deg2rad($value->lat))*cos(deg2rad($value->lon) -deg2rad($lon))+sin(deg2rad($lat))*sin(deg2rad($value->lat))))*1000)/1000;
		}
		return $list;
	}
}
