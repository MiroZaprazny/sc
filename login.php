<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
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
              <li  style="margin-left: 10px;"><a href="home.html" style="background-color:rgba(97, 58, 182, 1);border: solid;text-align: center;color: white;width: 120px;margin-top:3px ;margin-right: 2px;">Home</a></li>
              <li><a href="librarz.html" style="background-color:rgba(97, 58, 182, 1);border: solid;text-align: center;color: white;width: 120px;margin-top:3px ;">Library</a></li>

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
              <li> <a href="upload.html" style="margin-left:30px;width: 120px;background-color:rgba(97, 58, 182, 1);border: solid;text-align: center;color: white;margin-top:3px ;margin-right: 2px;">Upload</a></li>
                <li> <a href="profile.html"style="background-color:rgba(97, 58, 182, 1);border: solid;text-align: center;color: white;width: 120px;margin-top:3px ;">Profile</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <section class="signup-form">
        <h2>log up</h2>
        <div class="signup-form-form">
        <form action="includes/login.inc.php" method="post">
          <input type="text" name="name" placeholder="Full name/Email">
          <input type="password" name="pwd" placeholder="Password">
          <button type="submit" name="button">Login </button>
          </div>

        </form>
      </section>


</body>
</html>