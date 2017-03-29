@extends('layouts.base', ['subtitle' => 'La page des blogs'])

@section('body')

    <div class="row">
        <div class="col-10">
            @forelse($posts as $post)
                @component('components.post')
                    @slot('title')<a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>@endslot
                    @slot('comments_count'){{ $post->comments->count() }}@endslot
                    @slot('author'){{ $post->author->name }}@endslot
                    @slot('date'){{ $post->created_at->diffForHumans() }}@endslot
                    {{ $post->content }}
                @endcomponent
            @empty
                <h2>Aucuns articles disponibles</h2>
            @endforelse
        </div>
        <div class="col">
            @include('layouts.partials.sidebar')
        </div>
    </div>

    {{ $posts->links('vendor.pagination.bootstrap-4') }}

@endsection