<?php

use Lib\Validation\CommentCreateValidator as CommentCreateValidator;
use Lib\Validation\CommentUpdateValidator as CommentUpdateValidator;
use Lib\Gestion\CommentGestion as CommentGestion;

class CommentController extends \BaseController {
	
	protected $create_validation;
	protected $update_validation;
	protected $comment_gestion;

	public function __construct(
		CommentCreateValidator $create_validation, 
		CommentGestion $comment_gestion
		)
	{
		parent::__construct();
		$this->create_validation = $create_validation;
		$this->comment_gestion = $comment_gestion;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('comment.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if ($this->create_validation->fails()) {
		  return Redirect::to('/')
		  ->withInput()
		  ->withErrors($this->create_validation->errors());
		} else {
			$comment = $this->comment_gestion->store();
			return Redirect::to('spot/'.$comment->spot_id)
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
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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


}
