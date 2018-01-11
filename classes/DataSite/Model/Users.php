<?php

/*
$username = $_GET["username"];
$comment_id = $_GET["comment_id"];
$session_user_id = $_SESSION["user"]["id"];
$type = $_GET["type"];
*/

namespace DataSite\Model;
use mysqli;

class Users
{
  //private $dbcon;

  public function __construct()
  {
    /*
    if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'mysqli_init does not exist';
  } else {
  echo 'mysqli_init exists';
}
*/
//$this->$dbcon = new mysqli("localhost", "root", "kjr17ww97", "database1");
}

public function authenticateUser($username, $password)
{
  $dbcon = new mysqli("localhost", "root", "kjr17ww97", "database1");

  // echo 'hello'  . htmlspecialchars($_GET["username"]);
  if ($result = $dbcon->query('SELECT * FROM credentials WHERE username = "' . $_GET["username"] . '" AND  password= "' . $_GET["password"] .'"'))
  {
    //var_dump($result->fetch_assoc());
    $_SESSION["user"] = $result->fetch_assoc(); //->fetch_assoc()
  }

  $dbcon->close();


}
}
