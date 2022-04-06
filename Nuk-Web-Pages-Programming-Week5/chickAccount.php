<?php
    session_start();
    if(isset($_SESSION['login'])){
        if($_SESSION['login']=="admin"){
            header('location:/Nuk-Web-Pages-Programming-Week5/admin.php');
        }else if($_SESSION['login']=="user"){
            header('location:/Nuk-Web-Pages-Programming-Week5/register.php');
        }else{
            header('location:/Nuk-Web-Pages-Programming-Week5/error.php');
        }
    }
?>