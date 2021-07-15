<?php
    include('../model/db.php');


    $errorinfo="";
    $radio1=$radio2=$radio3="";
    $firstname=$email=$dob="";

    if (isset($_POST['update'])) {
        if (empty($_POST['firstname']) || empty($_POST['email'])) {
            $errorinfo = "Input given is invalid";
        }
        else
        {
            $connection = new db();
            $conobj=$connection->OpenCon();
            $userQuery=$connection->UpdateUser($conobj,"student",$_POST["username"],$_POST['firstname'],$_POST['email'], $_POST['dob'],$_POST['gender']);
            if($userQuery==TRUE)
            {
                $errorinfo= "Update successful"; 
            }
            else
            {
                $errorinfo= "Could not update";    
            }
            $connection->CloseCon($conobj);

        }
    }
        
    if(isset($_POST['search'])){
        if (empty($_POST['srch_username'])) {
            $errorinfo = "Please provide a username";
        }else{
            
            $connection = new db();
            $conobj=$connection->OpenCon();

            $userQuery1=$connection->SearchUser($conobj,"student",$_POST["srch_username"]);

            if ($userQuery1->num_rows!=null) {
                if ($userQuery1->num_rows > 0) {
                    while($row = $userQuery1->fetch_assoc()) {
                    $username = $row["username"];
                    $firstname=$row["firstname"];
                    $email=$row["email"];
                    $dob =$row["dob"];
                    if(  $row["gender"]=="female" )
                    { $radio1="checked"; }
                    else if($row["gender"]=="male")
                    { $radio2="checked"; }
                    else{$radio3="checked";}  
                    } 
                }
            }else{
                $errorinfo= "No result found";
            }
        
        }
    }
?>
