<?php

$host = "localhost";
$user = "root";
$password = "";
$db_name = "stock";
$db_port = 3306;

$connect = mysqli_connect($host, $user, $password, $db_name, $db_port);

if ($connect) {
  // echo "Succesfully Connected!";
} else {
  echo "Connection Failed".mysqli_connect_error();
}

?>