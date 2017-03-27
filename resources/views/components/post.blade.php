<div class="post">
    <div class="post-title">{{ $title or "Default title" }}</div>
    <div class="post-author">{{ $author }}</div>
    <div class="post-content">{{ $slot }}</div>
    <div class="post-date">{{ $date or "Default date" }}</div>
</div>