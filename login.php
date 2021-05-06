<?php
  include_once 'header.php' ;
 ?>

      <section class="signup-form">
        <h2>log in</h2>
        <div class="signup-form-form">
        <form action="includes/login.inc.php" method="post">
          <input type="text" name="uid" placeholder="Full name/Email">
          <input type="password" name="pwd" placeholder="Password">
          <button type="submit" name="submit">Login </button>
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
