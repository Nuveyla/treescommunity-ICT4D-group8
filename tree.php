<?php
require ('php.php');

$data_tree = $_POST('tree');
//save data to log (optional)
file_put_contents('log_'.date("j.n.Y").'.log', $data_tree, FILE_APPEND);
echo $data_tree;
$login->query("INSERT INTO treesDB(tree) VALUES ('$data_tree')") ;
?>