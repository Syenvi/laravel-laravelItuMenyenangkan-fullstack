@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article>
                    <h2>{{ $post->title }}</h2>
                    <p>By : <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}"> {{ $post->category->name }}</a></p>
                    {{-- <h5>{{ $post->author }}</h5> --}}
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->title }}" class="img-fluid">
                    <div class="my-3">
                        {!! $post->body !!}

                    </div>
                </article>
                <a href="/posts">Back to Post</a>

            </div>
        </div>
    </div>
@endsection

