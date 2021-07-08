<?php
// Use this namespace
use Steampixel\Route;
// Include router class
include 'src/Steampixel/Route.php';

// Define a global basepath
define('BASEPATH','/');
define ("ALL_PATH", array ("acupuncture","home","white"));

function checkPath($path) {
    //$ALL_PATH = array("acupuncture","home","white");
    return in_array($path, ALL_PATH, TRUE);
}

Route::add('/([a-z-0-9-]*)', function($path) {
  if ($path == ""){//home page
      $path = 'acupuncture';
  }
  if(checkPath($path) == TRUE) {
     include('home.php');
  } else {//invalid path
    header('HTTP/1.0 404 Not Found');
    echo 'Error 404 :-(<br>';
    echo 'The requested path "'.$path.'" was not found!';
  }
});



// Add base route (startpage)
/****
// Add base route (startpage)
Route::add('/', function() {
     echo "<script>console.log('##0 path:' );</script>";
     $path = 'acupuncture';
     include('home.php');
});

// Add base route (startpage)
Route::add('/acupuncture', function() {
     $path = 'acupuncture';
     echo "<script>console.log('##1 path: " . $path . "' );</script>";
     include('home.php');
});
****/
// Run the Router with the given Basepath
Route::run(BASEPATH);

?>
