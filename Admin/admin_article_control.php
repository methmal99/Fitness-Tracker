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
        <a href="admin_monthly_challenge_control.php">Monthly Challenge Control</a>
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
       <h2>Add New Article</h2><hr>
   </div>
     
   <form method="post" action="Admin/admin_article_control.php">
    
    <?php include('../errors.php'); ?>
    <link rel="stylesheet" type="text/css" href="../stylesheets/style.css">
       
    <br><div class="input-group">
         <label>Enter Article Title: *</label>
         <input type="text" name="ArticleTitle" size="20"> 
    </div>

    <br><div class="input-group">
         <label>Enter Primary Author Name: *</label>
         <input type="text" name="ArticleAuthors">
    </div>

    <br><div class="input-group">
         <label> (Optional) Enter Topic 1: </label>
         <input type="text" name="ArticleTopic_1">
    </div>

    <br><div class="input-group">
         <label> (Optional) Enter Topic 2: </label>
         <input type="text" name="ArticleTopic_2">
    </div>

    <br><div class="input-group">
         <label> (Optional) Enter Topic 3: </label>
         <input type="text" name="ArticleTopic_3">
    </div>

    <br><div class="input-group">
         <label> (Optional)Enter Tag 1: </label>
         <input type="text" name="ArticleTag_1">
    </div>

    <br><div class="input-group">
         <label> (Optional) Enter Tag 2: </label>
         <input type="text" name="ArticleTag_2">
    </div>

    <br><div class="input-group">
         <label> (Optional) Enter Tag 3: </label>
         <input type="text" name="ArticleTag_3">
    </div>

    <br><div class="input-group">
         <label> (Optional) Enter Tag 4: </label>
         <input type="text" name="ArticleTag_4">
    </div>

    <br><div class="input-group">
         <label>Enter URL: * </label>
         <input type="text" name="urls">
    </div>

    <br>

       <div class="input-group">
         <button type="submit" class="btn" name="add_bookmark">Add</button>
       </div>
   </form>
   <p>

    <br>
    <br>

    <div class="container">

    <br>
    <div class="header">
          <h2>Articles in the Database </h2><hr>
   </div>
   
   <table class="table table-bordered" border="1" bgcolor="#FFFFFF">
    <thead>
    <tr>
    <th>Title</th>
    <th>URL</th>
    <th>Author</th>
    <th>URL</th>
    <th>Delete</th>
 
     </tr>
    </thead>
    <tbody>
    <tr>


    <?php

   $db = mysqli_connect('localhost', 'root', '', 'wellness');

   $user_check_query = "SELECT *  FROM articles";
   $result = mysqli_query($db, $user_check_query);

   if (!$result)
   {
      echo "<div style=\"text-align:center\">";
      echo "You do not have any articles bookmarked currently. Please add them.";
      return;
   }
 
   echo "<br>";
   while ($row = $result -> fetch_assoc())
   {
    
    echo '<tr>';
    echo '<td>' . $row['article_ID'] . '</td>';
    echo '<td>' . $row['ArticleTitle'] . '</td>';
    echo '<td>' . $row['ArticleAuthors'] . '</td>';
  
    echo "<td>";
    echo "<a href='{$row['urls']}' target='_new'> {$row['urls']} </a>";
    echo "</td>";
   
    echo "<form action='../server.php' method='post'>";
    echo '<td><button type="submit" formaction="../server.php" name = "delete_url" value =' . $row['urls'] . '>Delete</button></td>';
    echo "</form>";
    echo '</tr>';

   }
   
   
   ?>
    </table>

  <br>
  <br>
  <br>
  
    </body>

</html>