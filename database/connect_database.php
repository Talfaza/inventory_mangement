<?php

class Connection{

private $servername="localhost";
private $username="root";
private $password="";

public $conn;

public function __construct(){ 
$this->conn = new mysqli($this->servername, $this->username, $this->password);

// Check connection
if (!$this->conn) {
die("Connection failed: " . mysqli_connect_error());
}


}


public function getConnection() {
    
        return $this->conn;
}




function createDatabase($dbname){
    //creating a database with the conn in the class ($this->conn)
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($this->conn, $sql)) {
echo "Database created successfully";
} else {
echo "Error creating database: " . mysqli_error($this->conn);
}

}

function selectDatabase($dbname){
    
    mysqli_select_db( $this->conn,$dbname);
}

function createTable($query){
    
    if (mysqli_query($this->conn, $query)) {
        echo "Table Clients created successfully";
        } else {
        echo "Error creating table: " . mysqli_error($this->conn);
        }
        
}

function admin_add(){
    
    $query = "SELECT id FROM INVENTORY.USER WHERE id='1'";
    $result =$this->conn->query($query);
    $row = mysqli_fetch_array($result);

    if (!$row[0] == '1') {
      $sql = "INSERT INTO INVENTORY.USER (user, email, pass)
      VALUES ('admin', 'admin@admin.com', 'admin')";

      if ($this->conn->query($sql) === TRUE) {
      echo "New record created successfully" . "<br>";
      } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
      }
    }



}



}

?>
