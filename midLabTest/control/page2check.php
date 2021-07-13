<?php
    session_start(); 

    if (isset($_POST['next'])) {

        $_SESSION["university"] = $_POST['university'];
        $_SESSION["department"] = $_POST['department'];
        $_SESSION["cgpa"] = $_POST['cgpa'];
        $_SESSION["yearcm"] = $_POST['yearcm'];
        $_SESSION["cname"] = $_POST['cname'];
        $_SESSION["yearex"] = $_POST['yearex'];
    }
 
?>