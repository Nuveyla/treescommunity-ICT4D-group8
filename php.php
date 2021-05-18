<?php

$host= '70.39.234.36';
$user = 'group8@saadittoh.com';
$password = 'Yzxu9J8rg3hjdmGF';
$ftpConn = ftp_connect($host);
$login = ftp_login($ftpConn,$user,$password);
 
 // check connection
if ((!$ftpConn) || (!$login)) {
 echo 'FTP connection has failed! Attempted to connect to '. $host. ' for user '.$user.'.';
} else{
 echo 'FTP connection was a success.';
 $directory = ftp_nlist($ftpConn,'');
 echo '<pre>'.print_r($directory, true).'</pre>';

// ftp_close($ftpConn);
//$con->close();
?>