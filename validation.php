<?php

class Dbconnect {
	public function __construct($server, $login, $passwd, $database_name)
	{
		$this->_server = $server;
		$this->_login = $login;
		$this->_passwd = $passwd;
		$this->_database_name = $database_name;
	}

	/**
		* Connect to database with PDO
	**/
	public function db_connect()
	{
		try {
			$this->connexion = new PDO("mysql:host=$this->_server;dbname=$this->_database_name;", $this->_login, $this->_passwd);
			$this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo 'Connection failure: ' . $e->getMessage();
		}
	}
}

/**
	* Class to collect lead from front-end
	* Fields: email, phone, zipcode, firstname, lastname, piece_a_isoler, departement
**/
class Lead extends Dbconnect{

	public function recordLead($username, $bases)
	{
		// Get record's ip_address and created datetime
		$ip_address = $this->getIpAdress();
		$now = $this->getNow();

		// Prepare PDO request
		$req = $this->connexion->prepare(
			"INSERT INTO tm_infos(username, bases, ip_address, created_at)
			VALUES (:username, :bases, :ip_address, :created_at)"
		);
		// Bind all params with record fields variables
		$req->bindParam(':username', $username);
		$req->bindParam(':bases', $bases);

		$req->bindParam(':ip_address', $ip_address);
		$req->bindParam(':created_at', $now);

		$req->execute();
	}

	public static function controlInput($data)
	{
		$data = trim($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	public static function getIpAdress()
	{
		//whether ip is from share internet
		if (!empty($_SERVER['HTTP_CLIENT_IP']))
		  {
		    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
		  }
		//whether ip is from proxy
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		  {
		    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
		  }
		//whether ip is from remote address
		else
		  {
		    $ip_address = $_SERVER['REMOTE_ADDR'];
		  }
		return $ip_address;
	}

	public static function getNow($format = 'Y-m-d h:i:s', $timezone = 'Europe/Paris')
	{
		date_default_timezone_set($timezone);
		$date = date($format, time());
		return $date;
	}

	public function validate()
	{
		# Get JSON as a string
		$json_str = file_get_contents('php://input');
		# Get as an object
		$json_lead = json_decode($json_str);
		$this->recordLead(
			$this->controlInput($json_lead->username),
			$this->controlInput($json_lead->bases)
		);
		echo 'yes-it-works';
	}
}


$lead = new Lead('localhost', 'root', '', 'teamtool');

$lead->db_connect();
$lead->validate();
// $datas = [
// 	array('fr2kontiki@gmail.com', 'Tim', 'Kontiki', '70000', '+33123456789', 'Garage', 'Allier'),
// 	array('timmyway1990@gmail.com', 'Tim', 'Way', '75000', '+33126458784', 'Salons', 'Ardèche'),
// 	array('ainakontiki@gmail.com', 'Aina', 'Kontiki', '64800', '+33124856699', 'Murs', 'Bouches du Rhône')
// ];

// foreach ($datas as $record) {
// 	recordLead($connexion, $record[0], $record[1], $record[2], $record[3], $record[4], $record[5], $record[6]);
// }
// 2. Save record to database
