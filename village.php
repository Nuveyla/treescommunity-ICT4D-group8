<?php
require ('php.php');

// wav file for village
$wav_file_village = $_FILES["village"]["tmp_name"];
$sessionID = $_POST["sessionID"];

// move to recorded map
move_uploaded_file($wav_file_village,'./recordings/' . $sessionID . '-village.wav');

// insert into database table
$messageUrl = 'http://ict4d2021.saadittoh.com/group8/recordings/' . $sessionID . '-village.wav';
$result=pg_query($db_conn, "UPDATE treesDB SET VILLAGE ='$messageUrl' WHERE SESSION='$sessionID'") ;

if(!$result){
  echo pg_last_error($db_conn);
} else {
  echo "Inserted successfully";
}
?>