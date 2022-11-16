<?php
$uname ="root";
$password="";
$host="localhost";
$dbname="php_crud";

$conn = mysqli_connect($host,$uname,$password,$dbname);
if(!$conn)
{
    die("Error :".mysqli_error());
}
else{
    echo"Connection Successfully.........";
}
?>
