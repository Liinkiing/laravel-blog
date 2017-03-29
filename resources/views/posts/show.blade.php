@extends('layouts.base', ['subtitle' => 'Affichage d\'un article'])

@section('body')

    @component('components.post')
        @slot('title') {{ $post->title }} @endslot
        @slot('author') {{ $post->author->name }} @endslot
        @slot('date') {{ $post->created_at->diffForHumans() }} @endslot
        {{ $post->content }}
    @endcomponent
    <div class="comments">
        @forelse($post->comments as $comment)
            @component('components.comment')
                @slot('author') {{ $comment->author->name }} ({{ $comment->author->email }}) @endslot
                {{ $comment->content }}
            @endcomponent
        @empty
            <h2>Aucun commentaires</h2>
        @endforelse
    </div>

@endsection