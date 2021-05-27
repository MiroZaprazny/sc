<?php

if (isset($_POST['save_audio']) && $_POST['save_audio']=="Upload Audio") {
  $dir ='uploads/' ;
  $audio_path= $dir.basename($_FILES['audioFile']['name']) ;

  if(move_uploaded_file($_FILES['audioFile']['tmp_name'],$audio_path)) {
    echo "skap cigan";
    saveAudio($audio_path) ;
    displayAudios();
  }

}
function saveAudio($fileName){
  $serverName= "localhost";
  $dBUsername= "root";
  $dBpassword= "";
  $dBName= "project1";

  $conn = mysqli_connect($serverName,$dBUsername,$dBpassword,$dBName);


$query = "INSERT INTO audios(filename) VALUES ('{$fileName}')" ;
mysqli_query($conn,$query) ;
if (mysqli_affected_rows($conn)>0) {
  echo "sicko fachci";
}

mysqli_close($conn);

}

function displayAudios() {

  $serverName= "localhost";
  $dBUsername= "root";
  $dBpassword= "";
  $dBName= "project1";

  $conn = mysqli_connect($serverName,$dBUsername,$dBpassword,$dBName);

  $query = "SELECT * FROM audios";
  $tmp =mysqli_query($conn,$query);

  while ($row=mysqli_fetch_array($tmp)) {
    echo '<a href="home.php?name='.$row['filename'].'">'.$row['filename'].'</a>';
    echo "<br/>";
  }

  mysqli_close($conn);



}
