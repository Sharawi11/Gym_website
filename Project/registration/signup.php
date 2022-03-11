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

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$check_name = $conn->query("SELECT * FROM `users` WHERE name = '$name'");

if($check_name->rowCount() > 0){
    echo('Name Already exists');
} else {
    $conn->query("insert into users (name,email,pass) values ('".$name."','".$email."','".$pass."')");
    echo('Account created successfully!');
}
echo "<br>";


?>
