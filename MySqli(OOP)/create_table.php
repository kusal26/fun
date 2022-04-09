<?php
$servername="localhost";
$username="root";
$password="";
$database="newdb";

//connect connection

$conn=new mysqli($servername,$username,$password,$database);
//check connection
if($conn->connect_error)
{
    die("connection failed ".$conn->connect_error);
}
else
echo "connection succesfully";

$sql = "CREATE TABLE myguests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

    if($conn->query($sql)===TRUE)
    echo "created successfully";
    else
    echo "error creating table";


?>