<?php
require("connect.php");

$email=$_POST["email"];
$password=$_POST["password"];

$query="SELECT password FROM users WHERE email='$email'";

$rs=mysqli_query($connection,$query);

$result=mysqli_fetch_array($rs);

if(password_verify($password, $result["password"])){

   echo "<h1>you entered correct credentials!</h1> ";
}else{
    echo "<h2>Invalid email or password!</h2>".mysqli_error($connection);
}

?>