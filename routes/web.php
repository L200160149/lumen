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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Generate Api Key
$router->get('/key', 'ExampleController@generateKey');

$router->post('/foo', 'ExampleController@fooExample');

$router->get('/user/{id}', 'ExampleController@getUser');
$router->get('/post/cat1/{cat1}/cat2/{cat2}', 'ExampleController@getPost');

$router->get('profile', ['as' => 'profile', 'uses' => 'ExampleController@getProfile']);
$router->get('profile/action', ['as' => 'profile.action', 'uses' => 'ExampleController@getProfileAction']);



$router->get('/id/{id}', function($id) {
    return 'user id :' .$id;
});

$router->get('/post/{id}/comments/{comments}', function($id, $comments) {
    return 'id user : '. $id .' comments : ' .$comments;
});

// optional (tidak akan terjadi error jika tidak ada value argumen)
$router->get('/optional[/{param}]', function($param = null) {
    return $param;
});


// // redirect
//     $router->get('profile', function() {
//         return redirect()->route('route.profile');
//     });
    
//     $router->get('profile/idstack', ['as' => 'route.profile', function() {
//         return 'Route IDStack';
//     }]);


// // mengembalikan nama domain
// $router->get('domain/idstack', ['as' => 'route.domain', function() {
//     return route('route.domain');
// }]);


// $router->group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => ''], function() use ($router) {
//     $router->get('home', function() {
//         return 'Home Admin';
//     });

//     $router->get('profile', function() {
//         return 'Profile Admin';
//     });
// });



// auth
$router->get('/admin/home', ['middleware' => 'age', function() {
    return 'Old Enough';
}]);

$router->get('/fail', function() {
    return 'Not yet';
});


$router->get('foo/bar', 'ExampleController@fooBar');
$router->post('bar/foo', 'ExampleController@fooBar');

$router->post('/user/profile/request', 'ExampleController@userProfile');

$router->get('/response', 'ExampleController@response');