<?php
  include_once 'header.php' ;
 ?>
<link rel="stylesheet" href="loginstyle.css">
      
<section class="signup-form">
        <h2 class="header"class="header">Log in</h2>
        <div class="signup-form-form">
        <form action="includes/login.inc.php" method="post" class="chleba">
        <div class="mirek">
          <input type="text" name="uid" placeholder="Full name/Email"class="rit">
          <input type="password" name="pwd" placeholder="Password" class="rit">
          <button type="submit" name="submit"class="tlacidlo">Login </button>
</div>
          </div>
          <?php
            if(isset($_GET["error"])){
              if ($_GET["error"]=="emptyinput") {
                echo "<p> Fill in all fields</p>";
              }
            elseif ($_GET["error"]=="wronglogin") {
              echo "<p>Incorect Login information</p>";
            }
          }

           ?>

        </form>
      </section>


</body>
</html>
