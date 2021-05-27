<?php
include_once 'header.php'
 ?>
 <link rel="stylesheet" href="signupstyle.css">


      <section class="signup-form">
    <h2 class="header">Sign up</h2>
    
    <form action="includes/signup.inc.php" method="post" class="haharcar">
    <div class="mirek">
      <input type="text" name="name" placeholder="Full Name" class="rit"><br>
      <input type="text" name="email" placeholder="Email"class="rit"><br>
      <input type="text" name="uid" placeholder="Username"class="rit"><br>
      <input type="password" name="pwd" placeholder="Password"class="rit"><br>
      <input type="password" name="pwdrepeat" placeholder="Repeat password"class="rit"><br>
      <button type="submit" name="submit"class="tlacidlo"> Sign up</button>
</div>
    </form>


    <?php
      if(isset($_GET["error"])){
        if ($_GET["error"]=="emptyinput") {
          echo "<p> Fill in all fields</p>";
        }
      elseif ($_GET["error"]=="invalidUid") {
        echo "<p> Choose a proper userename</p>";
      }
      elseif ($_GET["error"]=="invalidEmail") {
        echo "<p> Choose a proper Email</p>";
      }
      elseif ($_GET["error"]=="passwordsdontmatch") {
        echo "<p> Passwords dont match</p>";
      }
      elseif ($_GET["error"]=="usernametaken") {
        echo "<p> Username already taken</p>";
      }
      elseif ($_GET["error"]=="none") {
        echo "<p> You have signed up</p>";
      }
      }

     ?>

  </section>
</body>
</html>
