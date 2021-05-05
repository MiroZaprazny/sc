<?php
if($_POST['submit']=="Upload") { // cekuje ci calado klikol upload
  if ($_FILES['file']['name'] != "") { // cekuje ci calado tam dal nejaky file
   if (($_FILES['file']['type'] == "audio/mpeg") || ($_FILES['file']['type'] == "application/force-download")) { // cekuje ci calado tam dal mp3 file 
?>