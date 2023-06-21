<!DOCTYPE html>

<html>

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
      <a href="newsfeed.php">Newsfeed</a>
      <a href="fitness_track.php">Fitness Tracking</a>
      <a href="sign_in.php">Sign-Out</a>
    </div>
  </div>
  
     <?php 
		include('server.php');
		include('errors.php');   
	?>
  
  <form method="post" action="add_food.php">
	
		<center>
		<br> 
		<div class="input-group">
			 <label>Enter the date you want to track</label>
			 <input type="date" name="date" required>
		</div>
		<br> 
		<div class="input-group">
			 <label>How much did you weigh on that day? (kg)</label>
			 <input type="number" name="weight" required maxlength = 3 style="width: 80px;">
		</div>
		<br>
		<br>
		<div class="input-group">
			<br>
			<button type="submit" formaction = diet_track.php class="btn" 3 style="width: 80px;" name="submit_diet_info">Submit</button>
			<button type="submit" formaction = add_food.php class="btn" style="width: 220px;" name="submit_diet_info">Submit and track nutrition levels</button>
		</div>
  </form>
  
</body>

</html>