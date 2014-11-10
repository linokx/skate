
    <div id="connexion">	
		<div>
			{{ Form::open(array('url' => 'auth/login', 'method' => 'post', 'class' => 'form-horizontal panel')) }}	
				<small class="text-danger">{{ $errors->first('pseudo') }}</small>
			  <div class=" {{ $errors->has('pseudo') ? 'has-error' : '' }}">
			  	{{ Form::text('pseudo', null, array('class' => 'form-control', 'placeholder' => 'Nom')) }}
			  </div>
			  <small class="text-danger">{{ $errors->first('password') }}</small>
			  <div class=" {{ $errors->has('password') ? 'has-error' : '' }}">
			  	{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Mot de passe')) }}
			  </div>
				<div class="checkbox">
				  {{ Form::checkbox('souvenir') }}Se rappeler de moi
				</div>
				{{ Form::submit('Envoyer', array('class' => 'btn btn-primary')) }}
			{{ Form::close() }}
			{{ link_to('password/remind', 'J\'ai oublié mon mot de passe !', array('class' => 'forget-pass')) }}
			{{ link_to('user/create', 'Inscription') }}
		</div>
	</div>