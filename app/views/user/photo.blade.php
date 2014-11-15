<div class="clearfix">
	@foreach ($user->photos as $photo)
		@if($photo->spot_id > 0 OR (Auth::check() and $user->id == Auth::user()->id))
			{{ HTML::image('uploads/user/thumbnail/'.$photo->url, "", array('height'=> $photo->height, 'width'=>$photo->width, 'class'=>'thumbnail')) }}
		@endif
	@endforeach
</div>