<?php
session_start();
include 'config.php';
$msg=$_POST['msg'];
$name=$_SESSION['username'];
$sql="insert into posts(msg,name)values('$msg','$name')";
$result=$conn->query($sql);
header("location: home.php");
?>