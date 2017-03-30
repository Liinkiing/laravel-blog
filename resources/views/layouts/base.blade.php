<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

@include('layouts.partials.header')

<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">{{ $title or "Blog" }}</h1>
        <p class="lead blog-description">{{ $subtitle or "Je suis un sous titre de ce magnifique site" }}</p>
    </div>
</div>

<main class="container">
    @if(Request::hasSession() && (Session::has('errors') || Session::has('success') || Session::has('info')
    || Session::has('warning') || Session::has('danger')))
        <div class="row justify-content-md-center">
            <div class="col-8">
                @if(Session::has('errors'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach(Session::get('errors')->all() as $error)
                                <li>{!! $error !!}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @foreach(['success', 'info', 'warning', 'danger'] as $type)
                    @if(Session::has($type))
                        <div class="alert alert-{{ $type }}">
                            {!! Session::get($type) !!}
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    @endif
    @yield('body')
</main>

@include('layouts.partials.footer')

</body>
</html>
