<?php
session_start();
require_once './shared/db.php';

if (isset($_SESSION['userLoggedIn'])) {
    $query = 'INSERT INTO booking (`name`, surname, email, travel_date, package, priority, `message`)
        VALUES (?,?,?,?,?,?,?)';
    try {
        //$date = DateTime::createFromFormat('d/m/Y', $_POST['trip']);

        $stmt = $pdo->prepare($query)
            ->execute([
                $_POST['name'],
                $_POST['surname'],
                $_POST['email'],
                $_POST['trip'],
                //$date->format('Y-m-d'),
                $_POST['package'],
                $_POST['priority'],
                $_POST['message'],
            ]);
    } catch (Throwable $e) {
        die(var_dump($e));
    }
    unset($_SESSION['bookingerr']);
    header("Location: http://travel.local/");
    //die(var_dump($stmt));
    /*
$name = $_POST['name'];
$surname = $_POST['surname'];

 $nameSurnamePattern = '^[a-zA-Z0-9]{4,10}$';
preg_match($nameSurnamePattern, $name, $nameMatches);
if(empty($nameMatches)){
    $_SESSION['name_error'] = "No special characters like /,'";
    header("Location: http://travel.local/register/index.php");
    exit();
} else {
    unset($_SESSION['name_error']);
}

preg_match($nameSurnamePattern, $surname, $surnameMatches);
if(empty($surnameMatches)){
    $_SESSION['surname_error'] = "No special characters like /,'";
    header("Location: http://travel.local/register/index.php");
    exit();
} else {
    unset($_SESSION['surname_error']);
} */
}
else{
    $_SESSION['bookingerr'] = "You must log in before procceeding!";
    header("Location: http://travel.local/Listing_peru.php");
}
