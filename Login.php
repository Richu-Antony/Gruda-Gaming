<?php

@include 'Config.php';

session_start();

if(isset($_POST['submit']))
{
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM USERS WHERE EMAIL_ID = '$email' && PASSWORD = '$pass' ";
   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0)
   {
      $row = mysqli_fetch_array($result);
      if($row['USER_TYPE'] == 'admin')
      {
         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');
      }
      elseif($row['USER_TYPE'] == 'user')
      {
         $_SESSION['user_name'] = $row['name'];
         header('location:Gruda/index.html');
      }
   }
   else
   {
      $error[] = 'Incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Gruda - login form</title>
	<link rel="icon" href="Gruda/img/favicon.png" type="image/png">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="Assets/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error))
      {
         foreach($error as $error)
         {
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>Don't have an account? <a href="Register.php">Register now</a></p>
   </form>

</div>

</body>
</html>