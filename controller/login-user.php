<?php
    require_once(__DIR__ . "/../model/config.php");
    //username and password settings to login to your account
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    
    $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
    // it tells you if your login was sucessful or invalid
    if($query->num_rows == 1) {
        $row = $query->fetch_array();
        
        if($row["password"] === crypt($password, $row["salt"])) {
            $_SESSION["authenticated"] = true; 
            echo "<p>Login Successful!</p>";
        }
        else{
            echo "<p>Invalid username and password</p>";
        }
    }
    else{
        echo "<p>Invalid username and password</p>";
    }