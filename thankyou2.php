<?php
$con = mysql_connect("db492576584.db.1and1.com","dbo492576584","guitar412");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
}
 
mysql_select_db("db492576584", $con); 

$reserv_number = $_POST['reserv_number'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$phone1 = $_POST['phone1'];
$phone2 = $_POST['phone2'];
$email = $_POST['email'];
$shirt = $_POST['shirt'];
$hotel = $_POST['hotel'];
$flight = $_POST['flight'];
$airport = $_POST['airport'];
$airline = $_POST['airline'];
$frequent_flyer = $_POST['frequent_flyer'];
$dietary = $_POST['dietary'];
$question = $_POST['question'];
$communications = $_POST['communications'];
$information = $_POST['information'];
$updated = 'Yes';

$fname = $_POST['first_name'] . " " . $_POST['last_name'];

echo $reserv_number;


$sql="INSERT INTO registrants (ID,reserv_number,first_name,last_name,address1,address2,city,state,zip,phone1,phone2,email,shirt,hotel,flight,airport,airline,frequent_flyer,dietary,question,information,updated)
VALUES
('NULL','$reserv_number','$first_name','$last_name','$address1','$address2','$city','$state','$zip','$phone1','$phone2','$email','$shirt','$hotel','$flight','$airport','$airline','$frequent_flyer','$dietary','$question','$information','$updated')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);


$email = "mwaldrop@acclaroinc.com";
$emailto = "mwaldrop@acclaroinc.com";
$emailcc = ""; 
$emailcc = "";
$subject = "Daikin Invitation Update"; 
//$headers = "From: $email" . "\r\n" . "CC: $emailcc"; 
$headers = "From: $email\r\nContent-Type: text/html"; 

$body .= " \n "
."Dealer ".$fname." has registered via the non-reservation number portal. The dealer has been assigned the reservaton number 200.";

$send = mail($emailto, $subject . ' ' . $ordernumber, $body, $headers);



?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title>Daikin - The Big Dealer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #000;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>


<link rel="stylesheet" href="style.css"> 
</head>

<body>



<div align="center">
<table id="Table_01" width="960" height="651" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<img src="images/ThankYou_01.gif" width="82" height="92" alt=""></td>
		<td>
			<img src="images/ThankYou_02.gif" width="344" height="92" alt=""></td>
		<td>
			<img src="images/ThankYou_03.gif" width="440" height="92" alt=""></td>
		<td>
			<img src="images/ThankYou_04.gif" width="94" height="92" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/ThankYou_05.gif" width="82" height="292" alt=""></td>
		<td>
			<img src="images/ThankYou_06.gif" width="344" height="292" alt=""></td>
		<td>
			<img src="images/ThankYou_07.gif" width="440" height="292" alt=""></td>
		<td>
			<img src="images/ThankYou_08.gif" width="94" height="292" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/ThankYou_09.gif" width="82" height="267" alt=""></td>
		<td>
			<img src="images/ThankYou_10.gif" width="344" height="267" alt=""></td>
		<td>
			<img src="images/ThankYou_11.gif" width="440" height="267" alt=""></td>
		<td>
			<img src="images/ThankYou_12.gif" width="94" height="267" alt=""></td>
	</tr>
</table>
</div>

</body>
</html>
