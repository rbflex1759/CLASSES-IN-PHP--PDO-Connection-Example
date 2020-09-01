<?php
//Database Connection Class
class DbConfig
{
	private $MYSQL_Server = "localhost";
	private $MYSQL_Username = "root";
	private $MYSQL_Password = "";
	private $MYSQL_Database = "bukipa";
	public $con;

	
	public function openGate()
	{
		
		$this->con = null;
		try
		{
			$this->con = new PDO("mysql:host=$this->MYSQL_Server;dbname=$this->MYSQL_Database;charset=utf8", "$this->MYSQL_Username", "$this->MYSQL_Password");	
				
		}
		catch(PDOException $exception)
		{
			echo "Connection error: " . $exception->getMessage();
			
		}
		
		
		return $this->con;
	}
	
	public function closeGate() {
     $this->con = null;
  }


}
?>