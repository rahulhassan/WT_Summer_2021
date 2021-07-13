<?php
$servername="localhost";
$username="root";
$password="";
$dbname="testdb";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}
$fname="Munna ";
$lname="Abdulla";
$email="cmx@gmail.com";
$age=22;
$sql="INSERT INTO student (first_name,last_name,email,age)VALUES ('$fname','$lname','$email',$age) ";
$res=$conn->query($sql);
if ($res)
{
    echo "new record inserted";
}
else
{
    echo"error occured". $conn->error;
}
$conn->close();

?>