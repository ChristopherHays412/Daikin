<?php

$con = mysql_connect("db492576584.db.1and1.com","dbo492576584","guitar412");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("db492576584", $con);

?> 