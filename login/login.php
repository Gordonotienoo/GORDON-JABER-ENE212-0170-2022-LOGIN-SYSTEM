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

//read from database
$query = "select * from users where user_name = '$user_name' limit 1";
$result = mysqli_query($con, $query);

if($result)
{
    if($result && mysqli_num_rows($result) > 0)
        {

            $user_data = mysqli_fetch_assoc($result);

            if($user_data['password'] === $password)
            {
               
                $id = $_SESSION["user_id"] = $user_data['user_id'];
                header("Location: index.php");
                die;
            }
        }
}

echo"Wrong Username or Password";

}else
{
    echo"Wrong Username or Password";
}
}
?>



<!DOCTYPE html>
<html>
<head>
     <title>Login</title>
</head>
<body>
<div id="box">

<form method="post">
     <div>Login</div>
     Enter Username<br><br>
    <input id="text" type="text" name= "user_name"><br><br>
    Input password<br><br>
     <input id="text"type="password" name= "password"><br><br>

     <input id="button" type="submit" value= "Login"><br><br>

     <a href="signup.php">Click to sign up</a><br><br>

<form>
<style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>

      
</body>
</html>