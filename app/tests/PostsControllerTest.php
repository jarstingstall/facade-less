<?php

class PostsControllerTest extends TestCase
{
    public function testPostsIndexReturnsOk()
    {
        $postMock = Mockery::mock('Eloquent', 'Post');
        $viewFactoryMock = Mockery::mock('Illuminate\View\Environment');
        $viewMock = Mockery::mock('Illuminate\View\View');

        $postMock->shouldReceive('all')->once()->andReturn($postMock);
        $viewFactoryMock->shouldReceive('make')->once()->andReturn($viewMock);
        $viewMock->shouldReceive('withPosts')->once()->with($postMock)->andReturn('foo');

        $this->app->instance('Post', $postMock);
        $this->app->instance('view', $viewFactoryMock);

        $this->call('GET', 'posts');

    }
}