<?php
  include_once 'header.php' ;
 ?>
        <div class="container-fluid d-flex justify-items-center flex-row">
          <div class="row d-flex">
      <form class="upload" action="upload.inc.php" method="POST" enctype="multipart/form-data" >
      <input type="file" name="audioFile">
      <input type="submit" name="save_audio" value="Upload Audio">
      </form>
      </div>
      </div>

</body>
</html>
