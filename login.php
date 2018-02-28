<?php 
if(isset($_POST['submit'])) {

$username = $_POST['username'];
$password = $_POST['password'];
   
   /* if($username && $password) {
        echo $username;
        echo $password;
    } else {
        echo "Give me a password.";
    } */
    
$connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');
    
    if($connection) {
     echo "we're connected";   
    } else {
        die("no connection");
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
   
    <div class="col-sx-6">
      <form action"login.php" method="post">
       <div class="form-group">
       <label for="username">Username</label>
           <input type="text" name="username" class="form-control"></div>
          
       <div class="form-group">
       <label for="password">Password</label>
       <input type="password" name="password" class="form-control">
       </div>
       
       <input class="btn btn-primary" type="submit" name="submit" value="Submit">
       
       </form>  
       
         
    </div>
</body>
</html>