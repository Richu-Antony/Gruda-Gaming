<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:http://localhost/Gruda%20gaming/Login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="/Assets/Style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hi, <span>user</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>This is an user page</p>
      <a href="http://localhost/Gruda%20gaming/Login.php" class="btn">login</a>
      <a href="http://localhost/Gruda%20gaming/Register.php" class="btn">Register</a>
      <a href="http://localhost/Gruda%20gaming/Logout.php" class="btn">Logout</a>
   </div>

</div>

</body>
</html>