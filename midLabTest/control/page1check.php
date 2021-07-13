<?php
    session_start(); 

    if (isset($_POST['submit'])) {

        $_SESSION["fname"] = $_POST['fname'];
        $_SESSION["lname"] = $_POST['lname'];
        $_SESSION["email"] = $_POST['email'];
        $_SESSION["uname"] = $_POST['uname'];
        $_SESSION["password"] = $_POST['password'];
        $_SESSION["web"] = $_POST['web'];
        $_SESSION["gender"] = $_POST['gender'];
    }
?>
