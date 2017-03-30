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
                            <label for="name" class="col-4 control-label">Nom</label>

                            <div class="col-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-4 control-label">Adresse mail</label>

                            <div class="col-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-4 control-label">Mot de passe</label>

                            <div class="col-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-4 control-label">Confirmer le mot de passe</label>

                            <div class="col-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-6 col-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    S'inscrire
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
