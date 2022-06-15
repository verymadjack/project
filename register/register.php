<?php
session_start();
require_once '../shared/db.php';

// validate form fields
$emailAddress = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['password'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['birthday'];
$email_pattern = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
preg_match($email_pattern, $emailAddress, $email_matches);
if(empty($email_matches)){
    $_SESSION['register_email'] = "Bad email";
    header("Location: http://travel.local/register/index.php");
    exit();
} else {
    unset($_SESSION['register_email']);
}
//die($age);
//die($gender);
//die(var_dump(strlen($phone)));
//die('before');
//$phonePattern = '/^\+[0-9]{1,2}-[0-9]{3}-[0-9]{7}$/';
//preg_match($phonePattern, $phone, $phoneMatches);
if(strlen($phone)<1){
    $_SESSION['register_phone'] = "Provide a phone number";
    //die('if');
    header("Location: http://travel.local/register/index.php");
    exit();
}
else{
    //  die('else');
    unset($_SESSION['register_phone']);
    
}

if(strlen($pass)<1){
    $_SESSION['register_pass'] = "Provide a password";
    //die('if');
    header("Location: http://travel.local/register/index.php");
    exit();
}
else{
    //  die('else');
    unset($_SESSION['register_pass']);
    
}

if(strlen($name)<1){
    $_SESSION['register_name'] = "Provide a name";
    //die('if');
    header("Location: http://travel.local/register/index.php");
    exit();
}
else{
    //  die('else');
    unset($_SESSION['register_name']);
    
}

if(!($gender == "Female" || $gender == "Male" || $gender == "Other")){
    $_SESSION['register_gender'] = "Provide a gender";
    //die('if');
    header("Location: http://travel.local/register/index.php");
    exit();
}
else{
    //  die('else');
    unset($_SESSION['register_gender']);
    
}



/* $bday = new DateTime($_POST['birthday']->intime);  
$bday->add(new DateInterval("P18Y")); //adds time interval of 18 years to bday  
//compare the added years to the current date  
if($bday < new DateTime()){   
    //  die('else');
    unset($_SESSION['register_age']); 
}else{  
    $_SESSION['register_age'] = "Must be over 18";
    //die('if');
    header("Location: http://travel.local/register/index.php");
    exit();
} */



$query = 'INSERT INTO user (`name`, email, gender, birth_date, phone_number, `password`)
        VALUES (?,?,?,?,?,?)';
try {
    $date = DateTime::createFromFormat('d/m/Y', $_POST['birthday']);

    $stmt = $pdo->prepare($query)
    ->execute([
        $_POST['name'],
        $_POST['email'],
        $_POST['gender'],
        $date->format('Y-m-d'),
        $_POST['phone'],
        $_POST['password'],
    ]);
} catch (Throwable $e) {
    die(var_dump($e));
}


header("Location: http://travel.local/");
