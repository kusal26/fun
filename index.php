<?php
$name = $_POST['name'];
$email = $_POST['email'];
$contact =$_POST['contact'];


$con = new mysqli('localhost','root','','form');
if($con->connect_error)
{
    die('connection failed : '.$con->connect_error);

}
else
{
    $stmt = $con->prepare("insert into registration(name,email,contact)values(?,?,?)");
    $stmt->bind_param("ssi",$name,$email,$contact);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $con->close();
}

?>