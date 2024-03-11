<?php
class Connection {
	private $hostname = "localhost";
	private $database = "sw1tb";
	private $user = "root";
	private $password = "";

	private static $pdo;

	private function __construc() {}

	private static function verifyExtention() {
		$extention = 'pdo_mysql';
	}

	public static function getInstance() {
		self::verifyExtention();
		if (!isset(self::$pdo)) {
			try {
				$options = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAME UTF*');
				self::$pdo = new \PDO("mysql:host". $this->hostname . "; dbname=" . $this->database . ";", $this->user, $this->password, $options);
				self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
	
			} catch(PDOException $e) {
				print "Error:" . $e->getMessage();
			}
		}
		return self::$pdo;
	}
	public static function isConnected() {
		if (self::$pdo):
			return true;
		else:
			return false;
		endif;
	}
}
