<?php
  
  	Class conDB {
			
			$mysqli = new mysqli("localhost","root","","rgform");
			If (mysqli_connect_error()){
				die('Error connection(' mysqli_connect_errno() . ')' . mysqli_connect_error()); 
			} else {
				echo 'Connection is good...' $mysqli->host_info . "\n";
				$mysqli->close();
		}
	}

	Class Form extends conDB {

		public function __construct(){
		
		$result = $this->db->query("SELECT * FROM users");
		}
	}

	$object = new conDB;












?>
