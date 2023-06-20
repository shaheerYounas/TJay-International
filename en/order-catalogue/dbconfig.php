<?php
class Database
{
     
    private $host = "localhost";
    private $db_name = "jvglgksy_order_catalogue";
    private $username = "jvglgksy_order_catalogue";
    private $password = "Vt;)oZ1pM,$^";
    public $conn;
     
    public function dbConnection()
	{
     
	    $this->conn = null;    
        try
		{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        }
		catch(PDOException $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }
         
        return $this->conn;
    }
}

$connection = mysqli_connect('localhost', 'jvglgksy_order_catalogue', 'Vt;)oZ1pM,$^');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'jvglgksy_order_catalogue');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

?>