<!DOCTYPE html>

<html>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../stylesheets/stylesheet.css">
  
  <head>
  
    <title> Fitness Tracker </title> 

    </head> 

    <body> 
    
    <div class="topnav">
    <div class="topnav-right">
        <a href="admin_login.php">Admin Sign-Out</a>
        <a href="admin_article_control.php">Article Control</a>
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

    <?php include('../server.php') ?>

   <center>
   <div class="header">
       <h2>Add Monthly Challenges</h2>
   </div>
     
   <form method="post" action="Admin/
   admin_monthly_challenge_control.php">
        <?php include('../errors.php'); ?>
        <link rel="stylesheet" type="text/css" href="../stylesheets/style.css">
    
    <div class="input-group">
         <label>Enter Challenge Name: * </label>
         <input type="text" name="challenge_name">
    </div>

    <div class="input-group">
         <label>Enter Challenge Description: *</label>
         <input type="text" name="challenge_description">
    </div>

    <div class="input-group">
         <label> How many points will user get to complete the task? * </label>
         <input type="int" name="points_submission">
    </div>

       <div class="input-group">
         <button type="submit" class="btn" name="add_challenge">Add</button>
       </div>
   </form>
   <p>

<div class="container">

<br>
<div class="header">
      <h2>Challenges in the Database </h2><hr>
</div>

<table class="table table-bordered" border="1" bgcolor="#FFFFFF">
<thead>
<tr>
<th><h3>Challenge Name</h3></th>
<th><h3>Challenge Description</h3></th>
<th><h3>Points Awarded</h3></th>
<th><h3>Delete</h3></th>


</tr>
</thead>
<tbody>
<tr>


    <?php

   $db = mysqli_connect('localhost', 'root', '', 'wellness');

   $user_check_query = "SELECT * FROM listOfChallenges";
   $result = mysqli_query($db, $user_check_query);

   if (!$result)
   {
      echo "<div style=\"text-align:center\">";
      echo "You do not have any challenges in the database. Please add them.";
      return;
   }
 
   while ($row = $result -> fetch_assoc())
   {
     
      echo '<tr>';
      echo '<td>' . $row['challenge_name'] . '</td>';
      echo '<td>' . $row['challenge_description'] . '</td>';
      echo '<td>' . $row['points_submission'] . '</td>';
    
      echo "<form action='../server.php' method='post'>";
      echo '<td><button type="submit" formaction="../server.php" name = "delete_challenge" value =' . $row['challenge_name'] . '>Delete</button></td>';
      echo "</form>";
      echo '</tr>';

   }
   
   ?>

    </body>

</html>