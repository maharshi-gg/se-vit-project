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
  $server = $url["DB_HOST"];
  $username = $url["DB_NAME"];
  $password = $url[""];
  $db_conn = substr($url["DB_NAME"], 1);
  //$dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
  //$db = new PDO($dsn, DB_USER, DB_PASS);
  $db = new mysqli($server,$username,$password,$db_conn);
}
catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
  exit;
}
?>
