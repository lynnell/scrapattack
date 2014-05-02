<?php
$database = "seisjohnd";  // the name of the database.
$server = "mysql.johndriscoll.info";  // server to connect to.
$db_user = "jddadmin";  // mysql username to access the database with.
$db_pass = "jddadmin01";  // mysql password to access the database with.
$table = "users";    // the table that this script will set up and use.
$link = mysql_connect($server, $db_user, $db_pass);
mysql_select_db($database,$link);
?>