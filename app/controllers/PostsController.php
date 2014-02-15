<?php

class PostsController extends BaseController
{
    public function __construct()
    {
        $this->app = Illuminate\Support\Facades\Facade::getFacadeApplication();
    }

    public function index()
    {
        return $this->app['view']->make(
            'posts.index',
            ['posts' => Post::all(), 'app' => $this->app]
        );
    }

    public function create()
    {
        return $this->app['view']->make('posts.create', ['app' => $this->app]);
    }
}