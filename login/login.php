<?php

if(isset($_POST['Login'])){

if(strtolower($_POST["username"])=="ChangeThis" && $_POST["password"]=="ChangeThis"){
session_start();
$_SESSION['logged_in'] = TRUE;
header("Location: ./new.php");

}else {
$error= "Login failed !";
}
}
//print"version3<br>";
//print"username=".$_POST["username"]."<br>";
//print"password=".$_POST["username"];
?>