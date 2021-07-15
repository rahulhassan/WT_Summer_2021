<?php
class db{
 
function OpenCon()
 {

$sinfo="";
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
    return $result;
 }
 function CheckUser1($conn,$table,$username)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."'");
    return $result;
 }

 function ShowAll($conn,$table)
 {
    $result = $conn->query("SELECT * FROM  $table");
    return $result;
 }

 function UpdateUser($conn,$table,$username,$firstname,$email,$dob,$gender)
 {
     $sql = "UPDATE $table SET firstname='$firstname', email='$email', dob = '$dob', gender='$gender' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }
function searchUser($conn,$table,$susername)
{
    $sql = "SELECT * FROM ". $table." WHERE username='". $susername."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    
        while($row = $result->fetch_assoc()) {
        }
    } else {
        $sinfo= "0 results";
    }

}

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>