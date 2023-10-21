<?php
function getProducts() {
	if (isset($_GET['sort'])){
		$col=$_GET['sort'];
	}
	else{
		$col="makeupID";
	}
	$query = "SELECT * FROM makeupInventory ORDER BY "."$col";
	try {
	global $db;
		$products = $db->query($query);  
		$products = $products->fetchAll(PDO::FETCH_ASSOC);
		header("Content-Type: application/json", true);
		echo '{"products": ' . json_encode($products) . '}';
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function getProduct($id) {
	$query = "SELECT * FROM makeupInventory WHERE makeupID = '$id'";
    try {
		global $db;
		$products = $db->query($query);  
		$product = $products->fetch(PDO::FETCH_ASSOC);
        header("Content-Type: application/json", true);
        echo json_encode($product);
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
}

function findByName($productName) {
	$query = "SELECT * FROM makeupInventory WHERE productName LIKE '%$productName%' ORDER BY makeupID";
	global $db;
	try {
		// Prep the query to be executed
		$products = $db->query($query);
		// Get product(s) that match the input
        $product = $products->fetchAll(PDO::FETCH_ASSOC);
        header("Content-Type: application/json", true);
		// If product doesn't exist, display message
		// === checks if values AND their data types are equal
		if (count($product) === 0) {
			echo json_encode(["Error" => "Product not found, try again."]);
		} else {
			echo json_encode($product);
		}
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
}

function findByCompany($company) {
	$query = "SELECT * FROM makeupInventory WHERE company LIKE ". '"%'.$company.'%"'." ORDER BY makeupID";
    try {
		global $db;
		$products = $db->query($query);  
		$product = $products->fetchAll(PDO::FETCH_ASSOC);
        header("Content-Type: application/json", true);
        echo json_encode($product);
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
}

function findByCategory($productCategory) {
	$query = "SELECT * FROM makeupInventory WHERE productCategory LIKE ". '"%'.$productCategory.'%"'." ORDER BY makeupID";
	try {
		global $db;
		$products = $db->query($query);  
		$product = $products->fetchAll(PDO::FETCH_ASSOC);
        header("Content-Type: application/json", true);
        echo json_encode($product);
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
}

// Insert new product 
function addProduct(){
	global $app;
	$request = $app->request();
	$makeupinventory = json_decode($request->getBody());
	$productName = $makeupinventory->productName;
	$productCategory = $makeupinventory->productCategory;
	$productDescription = $makeupinventory->productDescription;
	$company = $makeupinventory->company;
	$price = $makeupinventory->price;
	$stock = $makeupinventory->stock;
	$onSale = $makeupinventory->onSale;
	$discontinued = $makeupinventory->discontinued;
	$query = "INSERT INTO makeupinventory 
          (productName, productCategory, productDescription, company, price, stock, onSale, discontinued) 
          VALUES 
          ('$productName', '$productCategory', '$productDescription', '$company', '$price', '$stock', '$onSale', '$discontinued')";
	
	try {
		global $db;
		$db->exec($query);
		$makeupinventory->makeupID = $db->lastInsertId();
		$app->response->headers->set('Content-Type', 'application/json');
		echo '{"Success":{"message": "Product successfully added."}}';
		echo json_encode($makeupinventory);
	} catch (PDOException $e) {
		$app->response->headers->set('Content-Type', 'application/json');
		echo '{"error":{"message":"Could not add product, please try again.","details":"' . $e->getMessage() . '"}}';
	}
}

// Update product by ID
function updateProduct($id) {
	$query = "SELECT * FROM makeupinventory WHERE makeupID = $makeupID";
	
}

// Delete product by makeupID
function deleteProduct($makeupID){
	global $db;
	$query = "DELETE FROM makeupinventory WHERE makeupID = $makeupID";
	try {
		echo '{"Success":{"message": "Product with ID ' . $makeupID . ' successfully deleted."}}';
		$db->exec($query);
	} catch (PDOException $e){
		echo '{"error":{"message":"Could not delete product, please try again.","details":"' . $e->getMessage() . '"}}';
	}
}
?>