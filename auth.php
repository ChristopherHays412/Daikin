<?php

$host="db492576584.db.1and1.com"; // Host name 
$username="dbo492576584"; // Mysql username 
$password="guitar412"; // Mysql password 
$db_name="db492576584"; // Database name 
$tbl_name="registrants"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$reserv_number=$_POST['reserv_number']; 
//$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$reserv_number = stripslashes($reserv_number);
//$mypassword = stripslashes($mypassword);
//$myusername = mysql_real_escape_string($myusername);
//$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE reserv_number='$reserv_number'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("reserv_number");
//session_register("mypassword"); 
header("location:reg2.php?reserv_number=" . $reserv_number . "");
}
else {
header("location:reg3.php");
//echo "Wrong Username or Password";
}
?>