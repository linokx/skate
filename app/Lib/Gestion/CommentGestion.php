<?php namespace Lib\Gestion;

use Comment;
use Auth;
use Input;
use Hash;

class CommentGestion implements CommentGestionInterface {

    private function save($comment)
	{
		$comment->content = Input::get('content');
		$comment->user_id = Auth::user()->id;
		$comment->spot_id = Input::get('spot');
		$comment->save();
		
		return $comment;
	}

	public function index($n)
	{
		$comment = Comment::paginate($n);
		return compact('comment');
	}

	public function store()
	{
		$comment = new Comment;
		return $this->save($comment);

	}

	public function show($id)
	{
		$comment = Comment::find($id);
		return compact('spot');
	}

	public function edit($id)
	{
		$comment = Comment::find($id);
		return compact('spot');
	}

	public function update($id)
	{
		$comment = Comment::find($id);
		$this->save($comment);
	}

	public function destroy($id)
	{
		Comment::find($id)->delete();
	}

}