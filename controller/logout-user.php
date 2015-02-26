<?php
    require_once(__DIR__ . "/../model/config.php");
// this is when you logged out successfully
    unset($_SESSION["authenticated"]);
    
    session_destroy();
    header("Location: " . $path . "index.php");
    
    