<?php

class Database extends PDO
{

	private $conn;

	public function __construct()
	{

		try {
			$this->conn = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);

			//Set PDO to throw exception on error
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			if (ENV === 'development') {
				echo "<pre>Database connection Error: {$e->getMessage()}</pre>";
			}
			die();
		}
	}

	private function setParams($statement, $parameters = array())
	{

		foreach ($parameters as $key => $value) {

			$this->setParam($statement, $key, $value);
		}
	}

	private function setParam($statement, $key, $value)
	{

		$statement->bindParam($key, $value);
	}

	public function run_query($rawQuery, $params = array())
	{

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;
	}

	public function select($rawQuery, $params = array()): array
	{

		$stmt = $this->run_query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}
