<div class="blog-post">
    <h2 class="blog-post-title">{{ $title or "Default title" }}</h2>
    @if(isset($comments_count)) <div class="comment-count"> {{ !strcmp($comments_count->__toString(), "0") ? 'Aucun' : $comments_count  }} commentaires</div> @endif
    <p class="blog-post-meta">{{ $date or new Carbon\Carbon() }}, par <a href="#">{{ $author }}</a></p>
    {{ $slot }}
</div>
