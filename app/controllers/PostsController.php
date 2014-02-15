<?php

class PostsController extends BaseController
{
    protected $post;
    protected $app;

    public function __construct(Post $post)
    {
        $this->post = $post;
        $this->app = Illuminate\Support\Facades\Facade::getFacadeApplication();
    }

    public function index()
    {
        return $this->app['view']->make('posts.index')->withPosts($this->post->all());
    }

    public function create()
    {
        return $this->app['view']->make('posts.create');
    }

    public function store()
    {
        $input = $this->app['request']->all();
        $rules = ['title' => 'required', 'body' => 'required'];

        $validator = $this->app['validator']->make($input, $rules);

        if ($validator->fails()) {
            return $this->app['redirect']->back()->withInput()->withErrors($validator);
        }

        $this->post->create($input);

        return $this->app['redirect']->route('posts.index');
    }

    public function show($id)
    {
        $post = $this->post->findOrFail($id);

        return $this->app['view']->make('posts.show')->withPost($post);
    }
}