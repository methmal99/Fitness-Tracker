<!DOCTYPE html>

<html>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylesheets/stylesheet.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300" type="text/css" />

  <style>
       .w3-sidebar a {font-family: "Roboto", sans-serif}
        body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
  </style>

  <head>
  
    <title> Fitness Tracker </title> 
  
  </head> 
   
  <body> 

  <div class="topnav">
    <div class="topnav-right">
      <a href="dashboard.php">Dashboard</a>
      <a href="fitness_test.php">Fitness Test</a>
      <a href="challenges.php">Monthly Challenge</a>
      <a href="newsfeed.php">Newsfeed</a>
      <a href="fitness_track.php">Fitness Tracking</a>
      <a href="diet_tracker.php">Diet Tracking</a>
      <a href="index.php">Sign Out</a>
    </div>
  </div>

  <style> 
    body {
	width: 100wh;
	height: 90vh;
	color: #fff;
	background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
	background-size: 400% 400%;
	-webkit-animation: Gradient 15s ease infinite;
	-moz-animation: Gradient 15s ease infinite;
	animation: Gradient 15s ease infinite;
}

@-webkit-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@-moz-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

h1,
h6 {
	font-family: 'Open Sans';
	font-weight: 300;
	text-align: center;
	position: absolute;
	top: 45%;
	right: 0;
	left: 0;
}

  </style>
  
  <br>
  <center>
        <div class="mySlides">
          <img id="source" src="images/healthy-lifestyle.png" width="60%" height="50%">
        </div>

        <div class="mySlides">
          <img id="source" src="images/download (3).jpg" width="60%" height="50%">
        </div>

        <div class="mySlides">
          <img id="source" src="images/images.jpg" width="60%" height="50%">
        </div>
  </center>
  
  <center>
  <h2 style="text-shadow:1px 1px 0 #444">We are here, to lead you to a healthier life!</h2>
  </center>

  <!--<button class="block"  onclick="location.href='sign in.php'">Sign-out</button>-->

  <script>
      var slideIndex = 0;
      displaySlides();

      function displaySlides() 
      {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        
        for (i = 0; i < slides.length; i++) 
        {
          slides[i].style.display = "none";  
        }
        
        slideIndex++;
        if (slideIndex > slides.length) 
        {
          slideIndex = 1  
        }    
        
        slides[slideIndex-1].style.display = "block";  
        setTimeout(displaySlides, 8000); 
      }
  </script>


<footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s5">
        <h2><b>Contact Us</b></h2>
        Questions? Go ahead.
        
        <form method = "post" action="menu.php" >
        
        <?php include('server.php') ?>
        <?php include('errors.php'); ?>

          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
          <button type="submit" name="emailForm" class="w3-button w3-block w3-black">Submit</button>

        </form>
      </div>
    
    <div class="w3-col s6 w3-center">
    <div class="w3-container w3-lobster">
    <center> <br><br><br><br><br> <h2>Keep track of your improvements and get support from experts. Enter into <b>Fitness Tracker!</b> </h2> 
    <br><br><p class="w3-xlarge"><b>Stay Healthy, Stay Fit, Stay WELL!</b></p></center>
    </div>

    </div>

</footer>

  <div class="w3-black w3-center w3-padding-24">We track. You maintain!</div>

</div>


</body>

</html>

