<?php
/**
$host = "127.0.0.1";
$username = "root";
$password="";
$dbname="sep";
$dsn = "mysql:host=$host;$dbname=$dbname";
$options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCPETION
            );
*/
$url = parse_url(getenv("mysql://ba8b6aeef30ad8:5527fbb2@us-cdbr-iron-east-05.cleardb.net/heroku_8d9bd2982844ecb?reconnect=true"));
$server = $url["us-cdbr-iron-east-05.cleardb.net"];
$username = $url["ba8b6aeef30ad8"];
$password = $url["5527fbb2"];
$db_conn = substr($url["users"], 1);
?>
