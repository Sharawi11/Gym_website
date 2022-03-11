<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "project";

$dsn = "mysql:host=$host;dbname=$db";
$conn;
  try
  {
  $conn = new PDO($dsn, $user, $password);
  echo ("you have connected to database <br>");
  }
  catch (PDOException $e)
  {
	  $err_message = $e->getMessage();
	  echo $err_message;
	  exit();
  }

if (isset($_POST['name'])) {

  $name=$_POST['name'];
  $password = $_POST['pass'];
  $sql = "SELECT * FROM `users` WHERE name = '$name' AND pass = '$password' limit 1";
  $result = $conn->query($sql);
  if($result->rowCount() == 1){
    echo "you have Succesfully logged in";
    $wrongPass = false;
    exit();
  }else{
    $wrongPass = true;
    exit();
  }
}

?>
