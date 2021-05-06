
<?php
include_once 'header.php' ;
 ?>

 <?php

     if (isset($_SESSION["useruid"])) {
       echo "<p>Hello " . $_SESSION["useruid"] . " </p>";
         }
  ?>


      <div class="container-audio">
        <p>lucki</p>
        <audio controls  loop autoplay>
                   <source src="4 The Betta.mp3" type="audio/ogg">
               </audio>
    </div>

</body>
</html>
