<?php
require_once '../db/connection.php';

function auth($pass, $id = null)
{
	if (isset($id)) {
		$sql = "SELECT * FROM users WHERE id = :id";
		$stmt = Connection::getInstance()->prepare($sql);
		$stmt->bindParam(':id', intval($id));
	} else {
	}
}
if (isset($_POST['login']) && isset($_POST['password'])) {
	header('Location: ../dashboard/index.php');
	die();
}
