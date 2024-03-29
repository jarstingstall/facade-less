@extends('layouts.master')

@section('content')

    <h1>All Posts</h1>
    {{ $app['html']->linkRoute('posts.create', 'New Post') }}

    @foreach ($posts as $post)
        <h3>{{ $app['html']->linkRoute('posts.show', $post->title, $post->id) }}</h3>
        <small>{{ $post->created_at->format('l M j, Y') }}</small>
        <p>{{ $post->body }}</p>
    @endforeach

@stop
