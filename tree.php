<?php
require ('php.php');

$data_tree = $_POST('tree');
//save data to log (optional)
echo $data_tree;
$db_conn->query("INSERT INTO treesDB(tree) VALUES ('$data_tree')") ;
?>