<?php
/**
 *
 */
class ProjectUsers
{
  private $_db;
  public function __construct($db=NULL)
  {
    if(!is_object($db)) {
     // $dsn = "mysql:host=".DB_HOST.";dbname".DB_NAME;
     // $this->_db = $db;
      $url = parse_url(getenv("mysql://ba8b6aeef30ad8:5527fbb2@us-cdbr-iron-east-05.cleardb.net/heroku_8d9bd2982844ecb?reconnect=true"));
      $server = $url["us-cdbr-iron-east-05.cleardb.net"];
      $username = $url["ba8b6aeef30ad8"];
      $password = $url["5527fbb2"];
      $db_conn = substr($url["users"], 1);
      if(!($this->_db = new mysqli($server,$username,$password,$db_conn))){echo "Error connecting to Db.";}
    }
    else {
        $this->_db = $db;
    }
  }

  public function createAccount()
  {
    $u = trim($_POST['username']);
    $v = sha1(time());
    $sql = "SELECT COUNT(Username) AS theCount
    FROM users
    WHERE Username=:email";
    if($stmt = $this->_db->prepare($sql)) {
      $stmt->bindParam(":email",$u,PDO::PARAM_STR);
      $stmt->execute();
      $row=$stmt->fetch();
              if($row['theCount']!=0) {
            return "<h2> ERROR </h2>"
                  ."<p> Sorry, that email is already in use. "
                  ."Please try again </p>";
            }

    $stmt->closeCursor();
    }
    // Do something with the password yaar. add it someplace.
    // echo "inserting sql start";
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comments = $_POST['comments'];
    $sql = "INSERT INTO users (Username,Password, Email, Mobile, Comments) VALUES (:user, :pass, :email, :mobile, :comments)";
    /*
    if($stmt = $this->_db->prepare($sql)) {
    // echo "Inside the if clause";
            $stmt->bindParam(":user", $u, PDO::PARAM_STR);
            $stmt->bindParam(":pass", $pass, PDO::PARAM_STR);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->bindParam(":mobile", $mobile, PDO::PARAM_STR);
            $stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
            if($stmt->execute()){$stmt->closeCursor();


          }

        }
     */
    try{
      if(mysqli_query($this->_db,$sql) echo "inserted successfully";
      else echo "****##### COULDN'T INSERT ######******";
    }
    catch(PDOException $e)
      {
        echo "some error";
      }
  }
  public function accountLogin()
  {

    //$db2 = new PDO('mysql:host=127.0.0.1;dbname=sep;charset=utf8mb4', 'root', '');
    $url = parse_url(getenv("mysql://ba8b6aeef30ad8:5527fbb2@us-cdbr-iron-east-05.cleardb.net/heroku_8d9bd2982844ecb?reconnect=true"));
    $server = $url["us-cdbr-iron-east-05.cleardb.net"];
    $username = $url["ba8b6aeef30ad8"];
    $password = $url["5527fbb2"];
    $db_conn = substr($url["users"], 1);
    $db2 = new mysqli($server,$username,$password,$db_conn);  
  //$db2=$this->_db;
    $user1 = $_POST['username'];
      $pass1 = $_POST['password'];
      $sql = "SELECT Username FROM users WHERE Username=? AND Password=?";
      try
      {
        $stmt = $db2->prepare($sql);
        $stmt->bind_param("ss", $user1, $pass1);
        /*
        $stmt->bindParam(1, $user1, PDO::PARAM_STR);
        $stmt->bindParam(2, $pass1, PDO::PARAM_STR);
        */
        $stmt->execute();

        $count=0;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $count = $count + 1;
        }

        if(!$stmt->rowCount())
        {
        echo " - not recognised - ";
        echo $count;
        return FALSE;
        }
        else
      {
        $_SESSION['Username'] = htmlentities($_POST['username'], ENT_QUOTES);
        $_SESSION['LoggedIn'] = 1;
        return TRUE;
      }
      }
      catch(PDOException $e)
      {
        echo "some error";
        return FALSE;
      }
  }


}

 ?>
