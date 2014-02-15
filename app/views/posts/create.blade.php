@extends('layouts.master')

@section('content')
    <h2>Create New Post</h2>
    {{ $app['form']->open(['route' => 'posts.index']) }}

    <p>
        {{ $app['form']->label('title') }}
        {{ $app['form']->text('title') }}
    </p>
    <p>
        {{ $app['form']->label('body') }}
        {{ $app['form']->textarea('body') }}
    </p>

        {{ $app['form']->submit() }}

    {{ $app['form']->close() }}
@stop
