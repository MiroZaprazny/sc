<?php
  session_start();
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>
<body style='background-color:#cccccc ;'>
<nav class="navbar navbar-default" style="background-color: rgba(66, 66, 66, 1);height: 65px; ">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

          </div>


          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
            <ul class="nav navbar-nav">
              <li><img src="logo.jpg"  style="height:62px; width: 62px;margin-left: 315px;border: solid;color: white;"></li>
              <li  style="margin-left: 10px;"><a href="home.php" style="background-color:rgba(97, 58, 182, 1);border: solid;text-align: center;color: white;width: 120px;margin-top:3px ;margin-right: 2px;">Home</a></li>
              <li><a href="librarz.php" style="background-color:rgba(97, 58, 182, 1);border: solid;text-align: center;color: white;width: 120px;margin-top:3px ;">Library</a></li>

                </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search"href="#"style="margin-left:30px;width:500px;margin-top:5px">
            </div>

              <button type="submit" class="btn btn-default"style="margin-top:5px"><img src="lupa.png" style="height:auto; width: 19px;"></button>

            </form>
            <ul class="nav navbar-nav">
              <li> <a href="upload.php" style="margin-left:30px;width: 120px;background-color:rgba(97, 58, 182, 1);border: solid;text-align: center;color: white;margin-top:3px ;margin-right: 2px;">Upload</a></li>
                <li> <a href="profile.php"style="background-color:rgba(97, 58, 182, 1);border: solid;text-align: center;color: white;width: 120px;margin-top:3px ;">Profile</a></li>


                  <?php

                      if (isset($_SESSION["useruid"])) {
                        echo'<a class="nav-link" href="includes/logout.inc.php">Logout</a></li>' ;
                      }
                      else {
                        echo '<li class="nav-item"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"style="background-color:rgba(97, 58, 182, 1);border: solid;text-align: center;color: white;width: 100px;margin-top:12px ;margin-left:10px;">
                        <a class="nav-link" href="signup.php" style="color:white;">Sign up</a>
                      </button></li>' ;
                        echo ' <li class="nav-item"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"style="background-color:rgba(97, 58, 182, 1);border: solid;text-align: center;color: white;width: 100px;margin-top:12px ;margin-right:5px;">
                        <a class="nav-link" href="login.php"style="color:white;">Log in</a>
                      </button> </li>' ;

                      }

                   ?>

            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
