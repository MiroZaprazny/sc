
<?php
include_once 'header.php' ;
include_once 'upload.inc.php' ;
 ?>

 <?php

     if (isset($_SESSION["useruid"])) {
       echo "<p>Hello " . $_SESSION["useruid"] . " </p>";
         }
  ?>

<audio controls>


  <source src="<?php echo $_GET['name']?>" type="audio/mpeg">
    </audio>

</body>
</html>
