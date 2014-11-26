<div class="clearfix">
	@foreach ($user->photosList as $photo)
		@if((Auth::check() and $user->id == Auth::user()->id))
			@if($photo->spot_id == 0)
				{{ HTML::image('uploads/user/thumbnail/'.$photo->url, "", array('height'=> $photo->height, 'width'=>$photo->width, 'class'=>'thumbnail')) }}
			@else
				{{ HTML::image('uploads/spot/thumbnail/'.$photo->url, "", array('height'=> $photo->height, 'width'=>$photo->width, 'class'=>'thumbnail')) }}
			@endif
		@endif
	@endforeach
</div>