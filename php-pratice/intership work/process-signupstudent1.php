<?php


if (empty($_POST["susername"])) {
    die("Name is required");
}

if ( ! filter_var($_POST["semail"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["spassword"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["spassword"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["spassword"])) {
    die("Password must contain at least one number");
}

$password_hash = password_hash($_POST["spassword"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ ."/configstudent.php";

$sql = "INSERT INTO users (susername, semail, password_hash)
        VALUES (?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                  $_POST["susername"],
                  $_POST["semail"],
                  $password_hash);
                  
if($stmt->execute()){
    header("Location: sidebar.php");
    exit;
}
else{
    if($mysqli->errno==1062){
        die("email already taken");
    }else{
    die($mysqli->error." ".$mysqli->errno);
    }
}

?>