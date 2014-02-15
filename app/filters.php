<?php

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

$app['router']->filter('csrf', function()
{
	if ($app['session.store']->token() != $app['request']->get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

/*
|--------------------------------------------------------------------------
| View Composers and Creators
|--------------------------------------------------------------------------
|
| Register your view composers and creators here.
|
*/

// This makes an instance of our Application object available in every view
$app['view']->creator('*', function($view)
{
    $view->with('app', Illuminate\Support\Facades\Facade::getFacadeApplication());
});