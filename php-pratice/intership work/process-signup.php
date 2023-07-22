<?php

if (empty($_POST["fusername"])) {
    die("Name is required");
}

if ( ! filter_var($_POST["femail"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["fpassword"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["fpassword"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["fpassword"])) {
    die("Password must contain at least one number");
}
$password_hash = password_hash($_POST["fpassword"], PASSWORD_DEFAULT);


$mysqli = require __DIR__ ."/config.php";

$sql = "INSERT INTO users (fusername, femail, password_hash)
        VALUES (?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                  $_POST["fusername"],
                  $_POST["femail"],
                  $password_hash);
                  
if($stmt->execute()){
    header("Location: sidebar.php");
    exit;
   

}else{
    if($mysqli->errnon == 1062){
        die("email already taken");
    }else{
    die($mysqli->error." ".$mysqli->errno);
    }
}
?>