<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


/*
| http://lumen-app.dev/
*/
$app->get('/', function () use ($app) {
    return $app->version();
});

/*
| http://lumen-app.dev/hello
*/
$app->get('hello', function () {
    return 'Hello, World!';
});

/*
| http://lumen-app.dev/say-hello/greeflas
*/
$app->get('say-hello/{username}', function ($username) {
    return 'Hello, ' . ucfirst($username);
});