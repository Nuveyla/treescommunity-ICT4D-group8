<?php
require ('php.php');

$wav_file = $_FILES["ID"]["tmp_name"];

  if (isset($_FILES["ID"])) {
    echo "<prompt bargein=\"false\">found the audio attachment</prompt>\n";
  }
move_uploaded_file($wav_file,'./recordings/' . "test_with_data.wav");
$messageUrl = '/recordings/test_with_data.wav';
$login->query("INSERT INTO treesDB(id) VALUES ('$messageurl')") ;
?>