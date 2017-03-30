<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="#">Home</a>
            @if(auth()->check())
                <a class="nav-link ml-auto" href="{{ route('profile.me') }}">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
                    <button type="submit" class="nav-link">Se déconnecter</button>
                </form>
            @else
                <a class="nav-link ml-auto" href="{{ route('register') }}">S'inscrire</a>
                <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
            @endif
        </nav>
    </div>
</div>