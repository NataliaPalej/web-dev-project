<?php
require 'Slim/Slim.php';
require 'makeup_db.php';
require 'database.php';
use Slim\Slim;
\Slim\Slim::registerAutoloader();

$app = new Slim();
$app->get('/makeup', 'getProducts');
$app->get('/makeup/:id',  'getProduct');
// Search product by name/category/company route
$app->get('/makeup/search/byName/:query', 'findByName');
$app->get('/makeup/search/byCategory/:query', 'findByCategory');
$app->get('/makeup/search/byCompany/:query', 'findByCompany');
// Add product route 
$app->post('/makeup/add', 'addProduct');
// Update product route
$app->put('/makeup/update/:makeupID', 'updateProduct');
// Delete product route
$app->delete('/makeup/delete/:makeupID', 'deleteProduct');

$app->run();
?>



