<?php
require 'Slim/Slim.php';
require 'makeup_db.php';
require 'database.php';
use Slim\Slim;
\Slim\Slim::registerAutoloader();

$app = new Slim();
$app->get('/makeup', 'getProducts');
$app->get('/makeup/:id',  'getProduct');
$app->get('/makeup/search/byName/:query', 'findByName');
$app->get('/makeup/search/byCategory/:query', 'findByCategory');
$app->get('/makeup/search/byCompany/:query', 'findByCompany');

// Update, delete, post methods route needs to be added 
//$app->post('/products', 'addProduct');
//$app->update('/products', 'updateProduct');
//$app->delete('/products', 'deleteProduct');

$app->run();
?>



