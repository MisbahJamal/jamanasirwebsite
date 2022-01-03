<?php 
	class DbConnect {
		private $host = 'remotemysql.com';
		private $dbName = 'ScXOT9qkQA';
		private $user = 'ScXOT9qkQA';
		private $pass = '92K0YuDfAj';

		public function connect() {
			try {
				$conn = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbName, $this->user, $this->pass);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conn;
			} catch( PDOException $e) {
				echo 'Database Error: ' . $e->getMessage();
			}
		}
	}
 ?>