<?php
    require_once(__DIR__ . "/../model/config.php");
    
    //these are the post and title settings
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    
    $query = $_SESSION ["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post' ");
    
    // In line 11 to 13, it will tell you that your post was successully added
    if($query){
        echo "<p>Sucessfully inserted post: $title</p>";
    }
    else{
        echo "<p>". $_SESSION["connection"]->error . "</p>";    
    }
    