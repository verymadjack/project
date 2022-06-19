<?php 

session_start();
if($_SESSION['userLoggedIn']){
    session_unset();
//die(var_dump($_SESSION['userLoggedIn']));
session_destroy();
//die(var_dump($_SESSION['userLoggedIn']));
header("Location: index.php");
}
else{
    header("Location: index.php");
}