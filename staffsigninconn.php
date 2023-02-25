<?php 
require_once('dbsample.php');
$username = $_POST['username'];
$password = $_POST['password'];
$stmt = $conn->prepare("insert into stafflogin(username, password) values(?,?)");
$stmt->bind_param("ss",$username, $password);
$stmt->execute();
$stmt->close();
$conn->close(); 
?>