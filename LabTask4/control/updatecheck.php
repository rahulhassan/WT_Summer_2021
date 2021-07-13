<?php
include('../model/db.php');


$error="";

if (isset($_POST['update'])) {
    if (empty($_POST['firstname']) || empty($_POST['email'])) {
    $error = "Input given is invalid";
    }
    else
    {
        $connection = new db();
        $conobj=$connection->OpenCon();
        $userQuery=$connection->UpdateUser($conobj,"student",$_SESSION["username"],$_POST['firstname'],$_POST['email'], $_POST['dob'],$_POST['gender']);
        if($userQuery==TRUE)
        {
            echo "Update successful"; 
        }
        else
        {
            echo "Could not update";    
        }
        $connection->CloseCon($conobj);

    }
}
else if (isset($_POST['search'])) {
    if (empty($_POST['srch_username'])) {
    $error = "Username not found";
    }
    else
    {
    $connection = new db();
    $conobj=$connection->OpenCon();
    
    $userQuery=$connection->searchUser($conobj,"student",$_POST['srch_username']);
    
    $connection->CloseCon($conobj);
    }
}
?>
