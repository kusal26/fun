<?php
$servername="localhost";
$user="root";
$password="";
//create cconnection

$conn= new mysqli($servername,$user,$password);
//check connection
if($conn->connect_error)
{
    die("connection error" . $conn->connect_error);
}
echo "connection succesfully";


?>