<?php
	class Database{
		protected $dbHost;
		protected $dbUser;
		protected $dbPass;
		protected $dbName;

		public function __Construct(){
			$this->dbHost = "localhost";
			$this->dbUser = "root";
			$this->dbPasss = "";
			$this->dbName = "spkpemilihanlaptop";
		}

		public function ConnectDB(){
			$mysqli = mysqli_connect($this->dbHost,$this->dbUser,$this->dbPass,$this->dbName)
				or die("Error 01: Connection Failed");
		}
	}
?>