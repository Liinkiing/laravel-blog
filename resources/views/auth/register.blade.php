@extends('layouts.base')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="panel panel-default">
                    <div class="panel-heading">S'inscrire</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="control-label">Nom</label>

                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                       required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="username">Nom d'utilisateur</label>
                                <input type="text" class="form-control" id="username"
                                       placeholder="Entrez votre nom d'utilisateur" required name="username" value="{{ old('username') }}">
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label">Adresse mail</label>

                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="password" class="control-label">Mot de passe</label>

                                <input id="password" type="password" class="form-control" name="password" required>

                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="control-label">Confirmer le mot de
                                    passe</label>

                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    S'inscrire
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
