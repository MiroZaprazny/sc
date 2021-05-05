<?php

$serverName= "localhost";
$dBUsername= "root";
$dBpassword= "";
$dBName= "project1";

$conn = mysqli_connect($serverName,$dBUsername,$dBpassword,$dBName);

if(!$conn){
  die("connection failede" . mysqli_connect_error());
}
