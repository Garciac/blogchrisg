<?php
    $title = filer_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filer_input(INPUT_POST, "post", FILER_SANITIZE_STRING);
    
    echo "<p>Title: $title</p>";
    echo "<p>Post: $post</p>";

    