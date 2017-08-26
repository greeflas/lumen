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

/*
| Route for controller
| http://lumen-app.dev/news/category/1
| http://lumen-app.dev/news/category/1/json
| http://lumen-app.dev/news/article/2
| http://lumen-app.dev/news/article/2/json
*/
$app->group(['prefix' => 'news'], function () use ($app) {

    $app->get('index', ['uses' => 'NewsController@index', 'as' => 'news']);

    $app->get('category/{id:\d+}', ['uses' => 'NewsController@category', 'as' => 'category']);

    $app->get('category/{id:\d+}/json', function ($id) {
        return \App\Models\Entities\NewsCategory::findOrFail($id);
    });

    $app->get('article/{id:\d+}', ['uses' => 'NewsController@article', 'as' => 'article']);

    $app->get('article/{id:\d+}/json', function ($id) {
        return \App\Models\Entities\NewsArticle::findOrFail($id);
    });

    $app->post('create-category', ['uses' => 'NewsController@createCategory', 'as' => 'create-category']);

    $app->post('create-article', ['uses' => 'NewsController@createArticle', 'as' => 'create-article']);

    $app->get('create', 'NewsController@create');
});
