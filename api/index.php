<?php
require 'Slim/Slim.php';
require 'makeup_db.php';
require 'database.php';
use Slim\Slim;
\Slim\Slim::registerAutoloader();

$app = new Slim();

/**
makeupInventory table CRUD
**/
$app->get('/makeup', 'getProducts');
$app->get('/makeup/:id',  'getProduct');
// Search product by name/category/company route
$app->get('/makeup/search/byName/:query', 'findByName');
$app->get('/makeup/search/byCategory/:query', 'findByCategory');
$app->get('/makeup/search/byCompany/:query', 'findByCompany');
// Add product route 
$app->post('/makeup', 'addProduct');
// Update product route
$app->put('/makeup/:productID', 'updateProduct');
// Delete product route
$app->delete('/makeup/:productID', 'deleteProduct');


/**
users table CRUD
**/
$app->get('/users', 'getUsers');
$app->get('/users/:id',  'getUser');
$app->get('/users/search/byName/:query', 'searchByName');
$app->post('/users', 'addUser');
$app->put('/users/:userID', 'updateUser');
$app->delete('/users/:userID', 'deleteUser');



$app->run();
?>



