<?php
 session_start();

 include("connection.php");
 include("function.php");

$user_data = check_login($con);




?>

<!DOCTYPE html>
<html>
<head>
     <title>My website</title>
</head>
<body>

   <a href="logout.php">Log out</a>
      <h1>ISAIAH 60 ; 22 WHEN THE TIME IS RIGHT I THE LORD SHALL MAKE IT HAPPENN</h1>
      <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
      </h1>

      <br>
      Hellow <?php echo $user_data['user_name']; ?> Amka uende ufanye kazi failure!!  failure!!
</body>
</html>



