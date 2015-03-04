<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/custom.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/custom.css">
        <title>Blog</title>
    </head>
    <body>
        <!-- navbar -->
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <a href="Index.html" class="navbar-brand">Blog</a>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navHeaderCollapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Blog</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="post.php">Create Post</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="controller/logout-user.php">Logout</a></li>
                    </ul>

                </div>
            </div>
        </div>
        <!--jumbotron -->
        <div class="jumbotron">
            <img src="images/blog.jpg" alt="Blog" vspace="20" class="center-block" class="img-responsive"/>
            <center><h1>My Blog</h1>
                <p>Welcome to my Blog!</p>
        </div>
    </body>
</html>