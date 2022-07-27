<?php


/**$app = [];
$app['config'] = require('config.php'); 
$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));**/
App::bind('config', require('config.php'));
App::bind('database',new QueryBuilder(Connection::make(App::get('config')['database'])));
function view($view, $data=[]) {
extract($data);
return require "views/{$view}.view.php";
}
function redirect($path){
 return  header('Location: /users');
}