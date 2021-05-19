<?php
require ('php.php');

// wav file for name
$wav_file = $_FILES["ID"]["tmp_name"];
$phone = $_POST["phone"];
$sessionID = $_POST["sessionID"];

// move to recorded map
move_uploaded_file($wav_file,'./recordings/' . $sessionID . '-name.wav');
$messageUrl_ID = 'http://ict4d2021.saadittoh.com/group8/recordings/' . $sessionID . '-name.wav';

// insert into database table
$result=pg_query($db_conn,"INSERT INTO treesDB(session, phone, id) VALUES ('$sessionID','$phone', '$messageUrl_ID')") ;

if(!$result){
  echo pg_last_error($db_conn);
} else {
  echo "Inserted successfully";
}

?>