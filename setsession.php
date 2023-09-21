<?php
    session_start();
    $_SESSION["username"]="May";
    $username=$_SESSION['username'];
    echo("Welcome back,$username!<br>");
    if(isset($_SESSION['John'])){
        echo'User exists';
    }
    else {
        echo'User doesnt exist';
        session_unset();
        session_destroy();
    }
    ?>
    