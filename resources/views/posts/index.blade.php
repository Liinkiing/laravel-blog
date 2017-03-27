@extends('layouts.base', ['subtitle' => 'La page des blogs'])

@section('body')

    <div class="row">
        <div class="col-10">
            @forelse($posts as $post)
                @component('components.post')
                    @slot('title') {{ $post->title }} @endslot
                    @slot('author') {{ $post->author->name }} @endslot
                    {{ $post->content }}
                    @slot('date') {{ $post->created_at->diffForHumans() }} @endslot
                @endcomponent
            @empty
                <h2>Aucuns articles disponibles</h2>
            @endforelse
        </div>
        <div class="col">
            <h2>Archives</h2>
            <div class="archives">

            </div>
        </div>
    </div>

    {{ $posts->links('vendor.pagination.bootstrap-4') }}

@endsection