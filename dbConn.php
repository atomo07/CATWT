<?php

$db = mysql_connect("localhost","root","","christ");
if(!$db)
{
    die("Connection Failed: " . mysql_connect_error());
}
?>
