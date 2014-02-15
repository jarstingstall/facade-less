@extends('layouts.master')

@section('content')

    <h1>All Posts</h1>
    {{ $app['html']->linkRoute('posts.create', 'New Post') }}

    @foreach ($posts as $post)
        <h3>{{ $post->title }}</h3>
        <small>{{ $post->created_at->format('l M j, Y') }}</small>
        <p>{{ $post->body }}</p>
    @endforeach

@stop
