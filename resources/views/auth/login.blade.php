@extends('layouts.base')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Se connecter</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="email" class="control-label">Nom d'utilisateur</label>
                                <input id="email" type="text" class="form-control" name="username"
                                       value="{{ old('username') }}" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="password" class="control-label">Mot de passe</label>

                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"
                                                   name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir
                                            de moi
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Se connecter
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Mot de passe oublié ?
                                    </a>
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        Pas de compte ? S'inscrire
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
