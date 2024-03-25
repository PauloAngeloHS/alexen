<?php
require_once '../db/connection.php';
class Cart
{
	function cartSearch($search)
	{
		$cart = array();
		try {
			$conn = Connection::getInstance();
			$sql = "SELECT * FROM produtos WHERE pro_nome LIKE :search OR pro_id = :search ORDER BY pro_nome ASC LIMIT 5;";
			$stmt = $conn->prepare($sql);
			$stmt->bindValue(':search', $search);
			$stmt->execute();
			$products = $stmt->fetchAll(PDO::FETCH_OBJ);
			if (!empty($products)) {
				foreach ($products as $product) :
					array_push($cart, $product);
				endforeach;
			} else {
				$cart = '0 dados encontrados';
			}
		} catch (Exception $e) {
			$cart = '0 dados encontrados';
		}
		print_r(json_encode($cart));
	}

	function savecart($json)
	{
		$obj_sold = json_decode($json);
		try {
		} catch (Exception $e) {
		}
	}
}
