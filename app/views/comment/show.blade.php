				@if(isset($user))
					<div class="comment">
						@if($user->photo)
							{{ HTML::image('uploads/user/thumbnail/'.$user->photo->url, "Photo de $user->pseudo", array('height'=> $user->photo->height, 'width'=>$user->photo->width)) }}
						@endif
						<p>{{$comment->content}}</p>
						{{ link_to('spot/'.$comment->spot_id, 'Voir la page') }}
					</div>
				@elseif(isset($comment))
					<div class="comment" itemprop="review" itemscope itemtype="http://schema.org/Review">
						@if($comment->user->photo)
							{{HTML::image('uploads/user/thumbnail/'.$comment->user->photo->url, "Photo de $comment->user->pseudo", array('height'=> $comment->user->photo->height, 'width'=>$comment->user->photo->width)) }}
						@endif
						<span class="author" itemprop="author">{{$comment->user->pseudo}}</span>
						<p itemprop="reviewBody">{{$comment->content}}</p>
					</div>
				@endif
