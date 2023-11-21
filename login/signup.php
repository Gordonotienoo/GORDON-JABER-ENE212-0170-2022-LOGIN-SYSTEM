<?php
  session_start();

  include("connection.php");
  include("function.php");
 

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
//something was posted
$user_name = $_POST['user_name'];
$password = $_POST['password'];

if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
{

//save to database
$user_id = random_num(20);
$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

 mysqli_query($con, $query);

 header("Location: login.php");
 die;
}else
{
echo"PLEASE ENTER SOME VALID INFORMATION";
}
  }
?>

<!DOCTYPE html>
<html>
<head>
     <title>Sign up</title>
</head>
<body>
<div id="box">

<form method="post">
     <div>Sign up</div> 
     <style>
        div{ font: 15px sans-serif; text-align: center; color: blue; }
    </style>

     Enter Username<br><br>
    <input id="text" type="text" name= "user_name"><br><br>
    Input password<br><br>
     <input id="text"type="password" name= "password"><br><br>

     <input id="button" type="submit" value= "Sign up"><br><br>
     
     <a href="login.php">Click to Login</a><br><br>

<form>

      
</body>
</html>