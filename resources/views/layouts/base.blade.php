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
    @if(Request::hasSession() && (Request::session()->has('success') || Request::session()->has('info')
    || Request::session()->has('warning') || Request::session()->has('danger')))
        <div class="row justify-content-md-center">
            <div class="col-8">
                @foreach(['success', 'info', 'warning', 'danger'] as $type)
                    @if(Request::session()->has($type))
                        <div class="alert alert-{{ $type }}">
                            {!! Request::session()->get($type) !!}
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    @endif
    @if(isset($errors) and $errors->count() > 0)
        <div class="row justify-content-md-center">
            <div class="col-8">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
    @yield('body')
</main>

@include('layouts.partials.footer')

</body>
</html>
