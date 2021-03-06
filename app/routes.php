<?php

$router->get('', 'App\Controllers\PagesController@home');
$router->post('', 'App\Controllers\PagesController@clearSession');
$router->get('about', 'App\Controllers\PagesController@about');
$router->get('basic', 'App\Controllers\PagesController@basic');
$router->get('contact', 'App\Controllers\PagesController@contact');
$router->get('users', 'App\Controllers\UsersController@index');
$router->post('users', 'App\Controllers\UsersController@store');
$router->get('frames', 'App\Controllers\FramesController@index');
$router->post('frames', 'App\Controllers\FramesController@changeFrame');
$router->post('cart', 'App\Controllers\CartController@addFrame');
$router->get('cart', 'App\Controllers\CartController@viewCart');