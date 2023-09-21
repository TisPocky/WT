<?php
    setcookie("username","John",time()+86400*30,'/');
    $username=$_COOKIE["username"];
    echo("Welcome back,$username!");
    ?>