<?php
$hostname = "ec2-54-154-101-45.eu-west-1.compute.amazonaws.com";
$username = "pepxcmjxinxtjg";
$pass = "bdf401aa894f876599e91bcadcced264662a879f9554274134ac4f9c0e557505";
$dbname = "d9786qfc0a7hrr";

# create connection
$db_conn = pg_connect("host = $hostname dbname = $dbname user = $username password = $pass");

# check connection
if ($db_conn->connect_error)
{
 die("Connection failed: " . $db_conn->connect_error);
}
?>
