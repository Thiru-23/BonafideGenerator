<?php
class Database
{   $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname ="bonafide";
    public $conn=null;
    
    
    public function __construct() {
            try {
                $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
                // set the PDO error mode to exception
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully";
            }
                
              catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
              }
          }
    }

?>