<?php

@include 'Config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:http://localhost/Gruda%20gaming/Login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="Dashboard.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hi, <span>admin</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>This is an admin page</p>
      <a href="http://localhost/Gruda%20gaming/Login.php" class="btn">Login</a>
      <a href="http://localhost/Gruda%20gaming/Register.php" class="btn">Register</a>
      <a href="http://localhost/Gruda%20gaming/Logout.php" class="btn">Logout</a>
   </div>

</div>

</body>
</html>