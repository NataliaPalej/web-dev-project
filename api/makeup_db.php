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
		# Prep the query to be executed
		$products = $db->query($query);
		# Get product(s) that match the input
        $product = $products->fetchAll(PDO::FETCH_ASSOC);
        header("Content-Type: application/json", true);
		# If product doesn't exist, display message
		# === checks if values AND their data types are equal
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



// Create methods to post, update and delete product
function updateProduct($id) {
$query = "SELECT * FROM makeupinventory WHERE makeupID LIKE ". '"%'.$id.'%"'." ORDER BY makeupID";
            try {
                global $db;
        
            } catch (Exception $ex) {

            }
}
?>