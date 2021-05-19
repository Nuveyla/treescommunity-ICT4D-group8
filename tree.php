<?php
require ('php.php');

// get region and session data
$data_tree = $_POST['tree'];
$sessionID = $_POST["sessionID"];

// write to right row in db
$result=pg_query($db_conn,"UPDATE treesDB SET TREE = '$data_tree' WHERE SESSION='$sessionID'") ;


if(!$result){
  echo pg_last_error($db_conn);
} else {
  echo "Inserted successfully";
}
?>