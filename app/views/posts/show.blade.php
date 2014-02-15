@extends('layouts.master')

@section('content')


    {{ $app['html']->linkRoute('posts.index', 'All Posts') }}


        <h3>{{ $post->title }}</h3>
        <small>{{ $post->created_at->format('l M j, Y') }}</small>
        <p>{{ $post->body }}</p>
        {{ $app['html']->linkRoute('posts.edit', 'Edit', $post->id) }}

        {{ $app['form']->open(['route' => ['posts.update', $post->id], 'method' => 'delete']) }}
            {{ $app['form']->submit('Delete') }}
        {{ $app['form']->close() }}

@stop
