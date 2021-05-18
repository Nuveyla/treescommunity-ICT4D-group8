<?php
require ('php.php');

$data_region = $_POST('region');
//save data to log (optional)
echo $data_region;
$db_conn->query("INSERT INTO treesDB(region) VALUES ('$data_region')") ;
?>