<?php

class DatabaseConnection{

	public function __construct(){

		$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

		if($con->connect_error){
			die("<h1>DATABSE CONNECTION FAILED</h1>");
		}

		return $this->con = $con;
	}
}
?>