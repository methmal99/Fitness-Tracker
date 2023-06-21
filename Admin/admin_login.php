<!DOCTYPE html>

<html>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../stylesheets/stylesheet.css">
  <link rel="stylesheet2" href="../stylesheets/loginstylesheet.css">

  <head>
  
    <title> Fitness Tracker </title> 

    </head> 

    <body> 
  
    <div class="topnav">
    <div class="topnav-right">
        <a href="../sign_in.php">User Sign-In</a>
    </div>
    </div>

    </body>

    <style>

  html {
    height:100%;
  }
  
  body {
    margin:0;
  }
  
  .bg {
    animation:slide 3s ease-in-out infinite alternate;
    background-image: url("../blurred1.jpg");
    bottom:0;
    left:-50%;
    opacity:.5;
    position:fixed;
    right:-50%;
    top:0;
    z-index:-1;
  }
  
  .bg2 {
    animation-direction:alternate-reverse;
    animation-duration:8s;
  }
  
  .bg3 {
    animation-duration:5s;
  }
  
  .content {
    background-color:rgba(255,255,255,.8);
    border-radius:.25em;
    box-shadow:0 0 .25em rgba(0,0,0,.25);
    box-sizing:border-box;
    left:50%;
    padding:10vmin;
    position:fixed;
    text-align:center;
    top:50%;
    transform:translate(-50%, -50%);
  }
  
  h1 {
    font-family:monospace;
  }
  
  @keyframes slide {
    0% {
      transform:translateX(-25%);
    }
    100% {
      transform:translateX(25%);
    }
  }


    </style> 

<div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

   <?php include('server_page_for_admin.php') ?>
   <head>
     <title>Admin Login</title>
     <link rel="stylesheet" type="text/css" href="../stylesheets/style.css">
   </head>
   <body>
     <div class="header">
     	<h2>Login</h2>
     </div>
   	 
     <form method="post" action="admin_login.php">
     	<?php include('../errors.php'); ?>
     	<div class="input-group">
     		<label>Admin Username: </label>
     		<input type="text" name="adminUser" placeholder="Username">
     	</div>
     	<div class="input-group">
     		<label>Admin Password: </label>
     		<input type="password" name="adminPass" placeholder="Password">
     	</div>
     	<div class="input-group">
     		<button type="submit" class="btn" name="login_user">Login</button>
     	</div>
      
   </form>

    </body>

</html>