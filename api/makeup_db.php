<?php
function getProducts() {
	if (isset($_GET['sort'])){
		$col=$_GET['sort'];
	}
	else{
		$col="id";
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
	$query = "SELECT * FROM makeupInventory WHERE id = '$id'";
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

function findByID($id) {
$query = "SELECT * FROM makeupInventory WHERE id LIKE ". '"%'.$id.'%"'." ORDER BY id";
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

// Create methods to post, update and delete product
function updateProduct($id) {
$query = "SELECT * FROM makeupinventory WHERE id LIKE ". '"%'.$id.'%"'." ORDER BY id";
            try {
                global $db;
        
            } catch (Exception $ex) {

            }
}
?>