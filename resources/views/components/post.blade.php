<div class="blog-post">
    <h2 class="blog-post-title">{{ $title or "Default title" }}</h2>
    <p class="blog-post-meta">{{ $date or new Carbon\Carbon() }}, par <a href="#">{{ $author }}</a></p>
    {{ $slot }}
</div>
