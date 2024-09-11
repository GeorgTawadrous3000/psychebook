<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');

$routes->get('/blog', "Blog::index");
$routes->get('/blog/new', "Blog::new");

$routes->post('/blog/new', "Blog::new");

$routes->get('/blog/post/(:num)', "Blog::post/$1");
$routes->get('/blog/delete/(:num)', "Blog::delete/$1");
$routes->get('/blog/edit/(:num)', "Blog::edit/$1");


$routes->post('/blog/edit/(:num)', "Blog::edit/$1");


$routes->get('/blog/posts', "Posts::index");
$routes->get('/blog/where', "Posts::where");
$routes->get('/blog/like', "Posts::like");
$routes->get('/blog/grouping', "Posts::grouping");

$routes->get('/form', "Form::index");
