<?php
$server= "localhost";
$u_name= "root";
$password= "";
$db= "inter_db";

$conn= mysqli_connect($server,$u_name,$password,$db);
if ($conn){
  //  echo "Connection Establish Successfully";
}else{
    die("Connection not establish");
}