<?php
$servername="localhost";
$username="root";
$password="";
$db="newdb";

//connect connection
$conn=new mysqli($servername,$username,$password,$db);

//INsert into database
$sql="INSERT INTO myguests(firstname,lastname,email)VALUES('kusal','thapa','tksal85@gmail.com')";

if($conn->query($sql)===TRUE)
{
    echo "data inserted succcesfully";
}
else
echo "error".$sql . "<br> ". $conn->error;


?>