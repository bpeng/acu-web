<?php
// Use this namespace
use Steampixel\Route;
// Include router class
include 'src/Steampixel/Route.php';

// Define a global basepath
define('BASEPATH','/');

// Add base route (startpage)
Route::add('/', function() {
  include('home.php');
});

Route::add('/test', function() {
  //navi();
  echo 'You are not really on index.php ;-)';
});

Route::add('/home', function() {
  include('home.php');
});

// Run the Router with the given Basepath
Route::run(BASEPATH);

?>
