<?php
/*$server= "localhost";
$u_name= "root";
$password= "";
$db= "inter_db";
*/

//remort database service
$server= "remotemysql.com";
$u_name= "LNyyrkr4e4";
$password= "XDPW0wJngc";
$db= "LNyyrkr4e4";

$conn= mysqli_connect($server,$u_name,$password,$db);
if ($conn){
  //  echo "Connection Establish Successfully";
}else{
    die("Connection not establish");
}
