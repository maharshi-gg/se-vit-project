<?php
//require "config.php";
try{
    //$connection = new PDO("mysql:host=$host",$username,$password,$options);
    
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = $url["127.0.0.1"];
    $username = $url["root"];
    $password = $url[""];
    //$db_conn = substr($url["sep"], 1);
    if(!($db = new mysqli($server,$username,$password))){echo "Error connecting to Db.";}
    $sql=file_get_contents("data/init.sql");
    $db->exec($sql);
   echo "Database and table users created successfully.";
}
catch(PDOException $error)
{
  echo $sql . "<br>" . $error->getMessage();
}
?>
