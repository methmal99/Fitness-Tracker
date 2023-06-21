<?php
session_start();

$username = "";
$unitID= "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'fitness_tracker');

if (isset($_POST['login_user'])) 
{
   
  $username = mysqli_real_escape_string($db, $_POST['adminUser']);
  $password = mysqli_real_escape_string($db, $_POST['adminPass']);

  if (empty($username)) 
  {
  	array_push($errors, "Admin Username is Required");
  }
  
  if (empty($password)) 
  {
  	array_push($errors, "Admin Password is Required");
  }

  if (count($errors) == 0) 
  {
  
   	$password = md5($password);
    
   	if ($username == "admin123" && $password = "admin123") 
      {
   	     header('location: admin_article_control.php');
      }
      
    else 
      {
         array_push($errors, "Wrong username/password combination");
      }
  }
  
}

?>

