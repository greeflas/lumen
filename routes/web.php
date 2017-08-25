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
| Basic route
| http://lumen-app.dev/
*/
$app->get('/', function () use ($app) {
    return $app->version();
});

/*
| Basic route
| http://lumen-app.dev/hello
*/
$app->get('hello', function () {
    return 'Hello, World!';
});

/*
| Route with param
| http://lumen-app.dev/say-hello/greeflas
*/
$app->get('say-hello/{username}', function ($username) {
    return 'Hello, ' . ucfirst($username);
});

/*
| Route with optional param
| http://lumen-app.dev/welcome
| http://lumen-app.dev/welcome/greeflas
*/
$app->get('welcome[/{username}]', function ($username = null) {
    return 'Welcome, ' . ($username == null ? 'Guest' : ucfirst($username));
});

/*
| Route with regexp param
| http://lumen-app.dev/say/some-text
*/
$app->get('say/{text:\w+}', function ($text) {
    return $text;
});

/*
| Routes group
| http://lumen-app.dev/blog/category/1
| http://lumen-app.dev/blog/article/2
*/
$app->group(['prefix' => 'blog'], function () use ($app) {

    $app->get('category/{id:\d+}', function ($id) {
        return 'Blog category #' . $id;
    });

    $app->get('article/{id:\d+}', function ($id) {
        return 'Blog article #' . $id;
    });
});