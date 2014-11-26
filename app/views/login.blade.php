<div id="connexion" class="pop">	
	<div>
		<h2>Connexion</h2>
		{{ Form::open(array('url' => 'auth/login', 'method' => 'post', 'class' => 'form-horizontal panel')) }}	
			<small class="text-danger">{{ $errors->first('pseudo') }}</small>
			<div class=" {{ $errors->has('pseudo') ? 'has-error' : '' }}">
				{{ Form::text('pseudo', null, array('placeholder' => 'Nom')) }}
			</div>
			<small class="text-danger">{{ $errors->first('password') }}</small>
			<div class=" {{ $errors->has('password') ? 'has-error' : '' }}">
				{{ Form::password('password', array('placeholder' => 'Mot de passe')) }}
			</div>
			<div class="checkbox">
			 	{{ Form::checkbox('souvenir') }}
				{{ Form::label('Se rappeler de moi') }}
			</div>
			{{ Form::submit('Envoyer', array('class' => 'btn')) }}
		{{ Form::close() }}
		{{ link_to('password/remind', 'J\'ai oublié mon mot de passe !', array('class' => 'forget-pass')) }}
	</div>
	<div>	
		<h2>Inscription</h2>
			{{ Form::open(array('url' => 'user', 'method' => 'post', 'class' => 'form-horizontal panel')) }}	
				<small class="text-danger">{{ $errors->first('pseudo') }}</small>
				<div class="{{ $errors->has('pseudo') ? 'has-error has-feedback' : '' }}">
					{{ Form::text('pseudo', '', array('placeholder' => 'Pseudo')) }}
				</div>
				<small class="text-danger">{{ $errors->first('email') }}</small>
				<div class="{{ $errors->has('email') ? 'has-error has-feedback' : '' }}">
					{{ Form::text('email', '', array('placeholder' => 'Email')) }}
				</div>
				<small class="text-danger">{{ $errors->first('password') }}</small>
				<div class="{{ $errors->has('password') ? 'has-error has-feedback' : '' }}">
					{{ Form::password('password', array('placeholder' => 'Mot de passe')) }}
				</div>
				<small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
				<div class="{{ $errors->has('password_confirmation') ? 'has-error has-feedback' : '' }}">
					{{ Form::password('password_confirmation', array('placeholder' => 'Confirmation mot de passe')) }}
				</div>
				{{ Form::submit('Inscription', array('class' => 'btn')) }}
			{{ Form::close() }}
		</div>
	</div>
</div>