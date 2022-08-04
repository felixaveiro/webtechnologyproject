<?php
$host="127.0.0.1";
$user="root";
$password="";
$db="hospital";

$connection=mysqli_connect($host,$user,$password,$db);


if(!$connection){
    echo "DB connected".mysqli_error($connection);
}


?>