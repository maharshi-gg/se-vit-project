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
  $url = parse_url(getenv("mysql://ba8b6aeef30ad8:5527fbb2@us-cdbr-iron-east-05.cleardb.net/heroku_8d9bd2982844ecb?reconnect=true"));
  $server = $url["us-cdbr-iron-east-05.cleardb.net"];
  $username = $url["ba8b6aeef30ad8"];
  $password = $url["5527fbb2"];
  $db_conn = substr($url["users"], 1);
  if(!($db = new mysqli($server,$username,$password,$db_conn))){echo "Error connecting to Db.";}
  /*
  $sql = "SELECT 1 from 'users'";
  $val=$db->query($sql);
  if($val!==TRUE)
  {
    $sql1 = "CREATE TABLE `users` (`Username` VARCHAR(30) NOT NULL, `Password` VARCHAR(30) NOT NULL, `Email` VARCHAR(40) NOT NULL, `Mobile` INT(10) NOT NULL, `Comments` VARCHAR(100) NOT NULL)";
      if($db->query($sql1)){
          echo "Table users created successfully";
      } else{echo "Error creating table: " . $db->error;
        }
  }
  */
}
catch (Exception $e) {
  echo 'Connection failed: ' . $e->getMessage();
  exit;
}
?>
