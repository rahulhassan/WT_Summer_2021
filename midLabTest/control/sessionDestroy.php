<?php
session_start();

    if(session_destroy()) // Destroying All Sessions
    {
    header("Location: ../view/page1.php"); // Redirecting To Home Page
    }
?>