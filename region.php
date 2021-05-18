<?php
require ('php.php');

$data_region = $_POST('region');
//save data to log (optional)
file_put_contents('log_'.date("j.n.Y").'.log', $data_region, FILE_APPEND);
echo $data_region;
$login->query("INSERT INTO treesDB(region) VALUES ('$data_region')") ;
?>