<?php
    require_once(__DIR__ . "/../model/config.php");
    
    //email, username, password, salt, and hashedPassword settings
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    
    $salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
    
    $hashedPassword = crypt($password, $salt);
    
    $query = $_SESSION["connection"]->query("INSERT INTO users SET "
            . "email = '$email',"
            . "username = '$username',"
            . "password = '$hashedPassword',"
            . "salt = '$salt'");
    
    //It tells you that it added your account sucessfully
    if($query) {
        echo "Sucessfully created user: $username";
    }
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }