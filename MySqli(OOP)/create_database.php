<?php
$servername="localhost";
$username="root";
$password="";

//create connection
$conn=new mysqli($servername,$username,$password);
//check connection
if($conn->connect_error)
{
    die("connection error" .$conn->connect_error);
}
echo "connected successfully";
//create database
$sql= "CREATE DATABASE newdb";
if($conn->query($sql)===TRUE)
{
 echo "database created succesfully";

}
else{
    echo "error creating database: ".$conn->erorr;
}



?>