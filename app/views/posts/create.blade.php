@extends('layouts.master')

@section('content')
    <h2>Create New Post</h2>
    {{ $app['form']->open(['route' => 'posts.index']) }}

    <p>
        {{ $app['form']->label('title') }}
        {{ $app['form']->text('title') }}
        @if ($errors->has('title')) {{ $errors->first('title') }} @endif
    </p>
    <p>
        {{ $app['form']->label('body') }}
        {{ $app['form']->textarea('body') }}
        @if ($errors->has('body')) {{ $errors->first('body') }} @endif
    </p>

        {{ $app['form']->submit() }}
        {{ $app['html']->linkRoute('posts.index', 'Cancel') }}

    {{ $app['form']->close() }}
@stop
