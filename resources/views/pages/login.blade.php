@extends('layouts.app')

@section('title', 'Connexion | CP Euphrate')

@section('content')
<div class="react-login-page react-signup-page pt---120 pb---120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="login-right-form">

                    @if(session('success'))
                        <div class="alert alert-success" style="padding:15px;margin-bottom:20px;background-color:#d4edda;color:#155724;border:1px solid #c3e6cb;border-radius:4px;">
                            <strong>Succès!</strong> Connexion réussie.
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger" style="padding:15px;margin-bottom:20px;background-color:#f8d7da;color:#721c24;border:1px solid #f5c6cb;border-radius:4px;">
                            <strong>Erreur!</strong>
                            <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login.process') }}">
                        @csrf
                        <div class="login-top">
                            <h3>Connexion</h3>
                            <p>Pas encore de compte? <a href="{{ route('register') }}">Inscrivez-vous gratuitement</a></p>
                        </div>

                        <p>
                            <label>Email</label>
                            <input placeholder="Votre email" type="email" id="email" name="email" value="{{ old('email') }}" required>
                        </p>

                        <p>
                            <label>Mot de passe</label>
                            <input placeholder="Votre mot de passe" type="password" id="pass" name="password" required>
                        </p>

                        <div class="back-check-box">
                            <input type="checkbox" id="box-1" name="remember"> Se souvenir de moi
                        </div>

                        <button type="submit" id="button" name="submit">
                            Se connecter
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </button>

                        <span class="back-or"> ........ ou se connecter avec ........ </span>

                        <ul class="social-links">
                            <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                            <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                            <li><a href="#"><span aria-hidden="true" class="social_google"></span></a></li>
                        </ul>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
