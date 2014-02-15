@extends('layouts.master')

@section('content')
    {{ $app['form']->open(['route' => 'posts.index']) }}

    {{ $app['form']->close() }}
@stop
