<?php
    //this is the base php file
 ?>
<?php
 // Set the error reporting level
error_reporting(E_ALL);
ini_set("display_errors", 1);
// Start a PHP session
session_start();
// Include site constants
include_once "inc/constant.inc.php";
// Create a database object
try {
  $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
  $server = $url["127.0.0.1"];
  $username = $url["root"];
  $password = $url[""];
  $db_conn = substr($url["sep"], 1);
  if(!($db = new mysqli($server,$username,$password,$db_conn))){echo "Error connecting to Db.";}
  
  $sql = "SELECT 1 from 'users'";
  $val=$db->query($sql);
  if($val!==TRUE)
  {
    $sql1 = "CREATE TABLE `users` (`Username` VARCHAR(30) NOT NULL, `Password` VARCHAR(30) NOT NULL, `Email` VARCHAR(40) NOT NULL, `Mobile` INT(10) NOT NULL, `Comments` VARCHAR(100) NOT NULL)";
    if ($db->query($sql1) === TRUE) {
        echo "Table users created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
  }
}
catch (Exception $e) {
  echo 'Connection failed: ' . $e->getMessage();
  exit;
}
?>
