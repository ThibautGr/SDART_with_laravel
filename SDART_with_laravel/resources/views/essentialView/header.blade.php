<!doctype html>
<html lang="en">
<head>
    <!--favicon--->
    <link rel="icon" type="image/png" href="{{ URL::asset('img/logoNatif/logoSation_artist.png') }}" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('style/style.css') }}">
    <script src="https://kit.fontawesome.com/0ad3f97360.js" crossorigin="anonymous"></script>
    <title>S-DART</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body >
<!------------------header pareil à toutes les pages---------------->
<header class="littleHead">
    <!----------------first zone : nav 1------------------>
    <nav class=" navbar firsnavbar">
        <!--logo-->
        <div class="col-3 hideAndShowAccueil">
            <a href="#"  class="undeco"><img src="{{ URL::asset('img/logoNatif/Station_d_artiste_full_size_logo.png')}}"></a>
        </div>
        <!----->
        <!-- Search form -->
        <input class="form-control col-5" type="text" placeholder="Search" aria-label="Search">
        <!---------------------------------->
        <!-- boutique, connextion, inscription-->
        <div class="col-3 esapce">
            <!--écran vous etes connecter-->
            <!--menu backDOWN profil-->
            @if (Route::has('login'))
                @auth
                    <div class="dropdown show">
                        <?php $logoProfile = resource_path('img/imgIconeUser/'.Auth::user()->inconLink)?>
                        <a title="" class="hideAndShowMyShop " href="#"> <i class="fas fa-shopping-cart undeco"> (0)</i></a>
                        <a  class=" undeco dropdown-toggle" id="dropdownMenuCo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"> {{Auth::user()->pseudo}} <img class=" logoConnecter" src="{{ URL::asset('img/imgIconeUser/'.Auth::user()->inconLink.'') }} "></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuCo">
                            <a id="" class=" dropdown-item" href="#">Mes message(s) (0)</a>
                            <a id="" class=" dropdown-item" href="{{url('esapaceUserCo/'.Auth::user()->id)}}">mon profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                @else
                    <a title="" class="hideAndShowMyShop " href="#"> <i class="fas fa-shopping-cart undeco"> (0)</i></a>
                    @if (Route::has('register'))
                        <a title=""  href="{{url('userInscription')}}" class="" >S'inscire</a>
                    @endif
                    <a title="" href="#" class="  btn btn-primary"  data-toggle="modal" data-target=".bd-connextion-modal-sm"> <i class="fas fa-sign-in-alt"></i>Ce connecter</a>
                @endauth
            @endif
        </div>
    </nav>

        <!---MODAL CE CONNECTER-->
        <div class="modal fade bd-connextion-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <form class="formConnextion" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group ">
                            <label for="email">votre Identifiant</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label  for="hAsConnecteur">votre mots de passe</label>
                            <!---zone de dev-->
                            <div class="input-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--zon de dev-->
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" id="connextionShow" value="Ce Connecter">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
    @endif

    <!---------------second zone nav 2------------------->
    <nav class="nav seconNavbar ">
        <a class="hideAndShowAccueil col-2 show active fade  AACTIVE" title="retour vers accueil" href="{{url('accueil')}}"> Accueil</a>
        <a class="hideAndShowActualite col-2" title="voir les dernieres actu" href="#"> Actualité</a>
        <!-- dropdown-->
        <div class="dropdown col-2">
            <a  href="#" class="btn btn-secondary dropdown-toggle  artChangeur" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > Arts</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach ($typeart as $tart)
                <a id="" class="dropdown-item" href="{{url('typeart/'.$tart->id)}}">{{$tart->name}}</a>
            @endforeach
            </div>
        </div>
        <a class=" col-2" title="retour vers accueil" href="{{url('job')}}"> Job</a>
        <!-- dropdown fin-->
        <a class=" col-2" title="retour vers accueil" href="#"> Market</a>
        <a class=" col-2" title="retour vers accueil" href="#"> Leçon</a>
    </nav>
    <!---------------------------------->
</header>
