
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

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
    @yield('body')
</main>

@include('layouts.partials.footer')

</body>
</html>
