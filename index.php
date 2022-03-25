<?php
require_once __DIR__ . '/vendor/autoload.php';

use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\UsersController;
use coding\app\controllers\HomeController;
use coding\app\controllers\detailsController;
use coding\app\controllers\confirmController;
use coding\app\controllers\categoriesController;
use coding\app\controllers\cartController;

$system=new AppSystem;

// Router::get('/users',[UsersController::class,'show']);

Router::get('/home',[HomeController::class,'index']);
Router::get('/details',[detailsController::class,'index']);
Router::get('/categories',[categoriesController::class,'index']);
Router::get('/cart',[cartController::class,'index']);
Router::get('/confirm',[confirmController::class,'index']);


// Router::get('/books',function(){
//   echo "books route path";
// });

Router::post('/users',[UsersController::class,'show']);
$system->start();

