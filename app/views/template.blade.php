<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skate</title>
    {{ HTML::style('/css/bootstrap.min.css') }}
    {{ HTML::style('/css/screen.css') }}
    <!--[if lt IE 9]>
      {{ HTML::style('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
      {{ HTML::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
    <![endif]-->
  </head>
    <body {{{ isset($body_id) ? 'id='.$body_id : '' }}}>
    <header>
      <h1>
          {{ link_to('/', 'Logo') }}</h1>
      <form class="search" id="top-search">
        <input name="place" class="place" />
        <input name="key" class="key-word"/>
        <input type="submit" value="Go" />
        <a class="geoloc getPosition">GéoLoc</a>
      </form>
      <div id="user-space">
        @if(Auth::check())
          {{ link_to('spot/create', 'Ajouter un spot') }}
          {{ link_to('profil', 'Profil') }}
          {{ link_to('auth/logout', 'Deconnexion') }}
        @else
          {{ link_to('auth/login', 'Connexion', array('class'=>'connexion')) }} | {{ link_to('user/create', 'Inscription') }}
          @include('login')
        @endif
      </div>
    </header>
    <div id="content">
      @yield('contenu')
    </div>

    {{ HTML::script('http://maps.googleapis.com/maps/api/js?key=AIzaSyDp9rhTUfZDGTY4p6X0JCxL2tHt8KKk1Y0&sensor=false') }}
    {{ HTML::script('/js/jquery.js') }}
    {{ HTML::script('/js/box.js') }}
    {{ HTML::script('/js/infobox.js') }}
    {{ HTML::script('/js/script.js') }}
  </body>
</html>