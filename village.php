<?php
require ('php.php');

$wav_file_village = $_FILES["village"]["tmp_name"];

move_uploaded_file($wav_file_village,'./recordings/' . "villagewav.wav");
$messageUrl = '/recordings/villagewav.wav';
$login->query("INSERT INTO treesDB(village) VALUES ('$messageurl')") ;
?>