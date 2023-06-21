<!DOCTYPE html>

<html>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylesheets/stylesheet.css">

  <head>
  
    <title> Fitness Tracker </title> 
  
  </head> 
  
  <body> 

  <div class="topnav">
    <div class="topnav-right">
      <a href="menu.php">Home</a>
      <a href="dashboard.php">Dashboard</a>
      <a href="fitness_test.php">Fitness Test</a>
      <a href="challenges.php">Monthly Challenge</a>
      <a href="fitness_track.php">Fitness Tracking</a>
      <a href="diet_track.php">Diet Tracking</a>
      <a href="sign_in.php">Sign-Out</a>
    </div>
  </div>
     
  <style>

  html {
    height:100%;
  }
  
  body {
    margin:0;
  }
  
  .bg {
    animation:slide 3s ease-in-out infinite alternate;
    background-image: url("blurred1.jpg");
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

   <style>
   
    input[type=text] 
    {
        width: 1000px;
        font-size: 20px;
        background-color: white;
        background-position: 10px 10px; 
    }

    input[type=text]:focus 
    {
       border: none; 
        width: 100%;
    }
    </style>
   
   <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

   <?php include('server.php') ?>
  
    <center>
   <div class="header">
       <h2>Search for Articles | Topics | Titles </h2><hr>
   </div>
   </center>

    <form method="post" action="newsfeed.php">

    <?php include('errors.php'); ?>
    <center>
    <div class="input-group">
        
        <input type="text" placeholder="Search" name="search" size="100%">
        
    </div>

    <div class="input-group">
        <button type="submit" name="searchButton"></button>
    </div>
    </center>
    </form>
    
    <br>
    <br>

    <?php

  $db = mysqli_connect('localhost', 'root', '', 'fitness_tracker');

  if (isset($_POST['searchButton'])){
    $search_value = $_POST['search'];
    
    error_log($search_value);

    $searchQuery = "SELECT * FROM articles WHERE ArticleTitle LIKE '%$search_value%' OR ArticleAuthors LIKE '%$search_value%' OR urls LIKE '%$search_value%' OR ArticleTopic_1 LIKE '%$search_value%' OR ArticleTopic_2 LIKE '%$search_value%' OR ArticleTopic_3 LIKE '%$search_value%' OR ArticleTag_1 LIKE '%$search_value%' OR ArticleTag_2 LIKE '%$search_value%' OR ArticleTag_3 LIKE '%$search_value%' OR ArticleTag_4 LIKE '%$search_value%'";
    $result = mysqli_query($db, $searchQuery);

    while ($row = mysqli_fetch_assoc($result)){
      echo '<tr>';
        echo '<br>';
        echo "Article ID: ";
        echo '<td>' . $row['article_ID'] . '</td>';
        echo '<br>';
        echo "Article Title: ";
        echo '<td>' . $row['ArticleTitle'] . '</td>';
        echo '<br>';
        echo "Article Authors: ";
        echo '<td>' . $row['ArticleAuthors'] . '</td>';
        echo '<br>';
        echo "URLS: ";
        echo "<a href='{$row['urls']}' target='_new'> {$row['urls']} </a><br>";
      echo '</tr>';
    }
	echo '<table>';
}
?>
    
    <body>
    
    <div class="container">

   <div class="header">
       <h2>Article Newsfeed</h2><hr>
   </div>
   
    <center>
    <table class="table table-bordered" border = "2" bgcolor = "#FFFFFF" >
    <thead>
    <tr>
    <th>ArticleID</th>
    <th>Title</th>
    <th>Authors</th>
    <th>URLS</th>

      </tr>
    </thead>
    <tbody>
    <tr>

    <?php
            $db = mysqli_connect('localhost', 'root', '', 'fitness_tracker');

            if (!$db)

            {
                die('Could not connect: ' . mysql_error());
            }
   
            $user_check_query = "SELECT article_ID, ArticleTitle, ArticleAuthors, urls FROM articles";
            $result = mysqli_query($db, $user_check_query);
            
            while ($row = $result -> fetch_assoc())
            {
              echo"<td>".$row['article_ID']."</td>";
              echo"<td>".$row['ArticleTitle']."</td>";
              echo"<td>".$row['ArticleAuthors']."</td>";
              // getting clickable links yeyy got ittt
              echo "<td>";
              echo "<a href='{$row['urls']}' target='_new'> {$row['urls']} </a>";
              echo "</td>";
              echo "</tr>";
            }
    ?>
    </table>
    </center>

            <br><br>
          
<style>
body {font-family: Arial, Helvetica, sans-serif;}

form 
{
  border: solid #f1f1f1;
  font-family: Arial;
}

.container 
{
  padding: 1px;
  
}

input[type=text], input[type=submit] 
{
  width: 100%;
  padding: 5px;
  margin: 2px 0;
  display: inline-block;
  border:  solid #ccc;
  box-sizing: border-box;
}


input[type=submit] 
{
  font-size: 25px;
  background-color: #CEE107;
  color: black;
  border: none;
  
}

input[type=submit]:hover 
{
  opacity: 0.2;
}
</style>

</html>

