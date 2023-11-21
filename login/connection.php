<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample_dt";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

die("failed to connect!");
}