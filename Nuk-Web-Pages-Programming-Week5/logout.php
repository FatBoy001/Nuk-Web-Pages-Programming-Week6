<?php
    session_start();
    session_destroy();
    setcookie("account",$account,time()-36);
    header('Location: /Nuk-Web-Pages-Programming-Week5/index.php');
?>