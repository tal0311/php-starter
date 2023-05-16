<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// dd($uri);


$routes = [
 '/bulletin-board/' => './controllers/index.php',
 '/bulletin-board/about/' => '/controllers/about.php',
 '/contact' => '/controllers/contact.php',
 '/user' => '/controllers/user.php',
 '/activities' => '/controllers/activities.php'
];

function setRoute($uri, $routes)
{

 if (array_key_exists($uri, $routes)) {
  return $routes[$uri];
 } else {
  return './views/404.php';
 }
};

include setRoute($uri, $routes);
