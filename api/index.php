<?php
require 'Slim/Slim.php';
require 'makeup_db.php';
require 'database.php';
use Slim\Slim;
\Slim\Slim::registerAutoloader();

$app = new Slim();
$app->get('/products', 'getProducts');
$app->get('/products/:id',  'getProduct');
$app->get('/products/search/:query', 'findByID');

// Update, delete, post methods route needs to be added 
//$app->post('/products', 'addProduct');
//$app->update('/products', 'updateProduct');
//$app->delete('/products', 'deleteProduct');

$app->run();
?>



