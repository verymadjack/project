<?php
session_start();
require_once '../shared/db.php';

//$name = $_POST['name'];
$emailAddressLogin = $_POST['email'];
$passLogin = $_POST['password'];
$email_pattern = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
$isLoggedIn = False;
preg_match($email_pattern, $emailAddressLogin, $email_matches);
if(empty($email_matches)){
    $_SESSION['login_error'] = "Bad email";
    header("Location: http://travel.local/register/index.php");
    exit();
} else {
    unset($_SESSION['login_error']);
}

//$query = 'SELECT * FROM users WHERE email=$emailAddress AND `password`= $pass';

//$query->execute([$username]);

//$username = $_POST['username'];
//prepare the statement
$stmt = $pdo->prepare("SELECT * FROM user WHERE email=? AND `password`=?");
//execute the statement
$stmt->execute(array($emailAddressLogin, $passLogin)); 
//fetch result
$user = $stmt->fetch();

if ($user) {
    unset($_SESSION['login_error']); 
    $isLoggedIn = True;
} else {
    $_SESSION['login_error'] = "User doesn't exist";
    header("Location: http://travel.local/Login_v2/index.php");
}
//die(var_dump($_POST['password']));
/* die(var_dump($user)); */

header("Location: http://travel.local/");