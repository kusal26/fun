<?php

$firstname= $_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];

//create connection
$conn= new mysqli("localhost","root","","newdb");
//check connection
if($conn->connect_error)
{
    die("connection error".$conn->connect_error);
}
//insert into database

$stmt=$conn->prepare("INSERT INTO myguests (firstname,lastname,email)VALUES(?,?,?)");
$stmt->bind_param("sss",$firstname,$lastname,$email);
$stmt->execute();
echo "registration complete";
$stmt->close();
$conn->close();


?>