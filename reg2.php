<?php

include("db_connect.php");

$reserv_number = $_GET['reserv_number'];

echo $reserv_number;

$sql="SELECT * FROM registrants WHERE reserv_number = '".$reserv_number."'";

$result = mysql_query($sql);

while($row = mysql_fetch_array($result))
  {	     	  	
  
	$first_name = $row['first_name'];	
	$last_name = $row['last_name'];
	$address1 = $row['address1'];
	$address2 = $row['address2'];
	$city = $row['city'];
	$state = $row['state'];
	$zip = $row['zip'];
	$phone1 = $row['phone1'];
	$phone2 = $row['phone2'];
	$email = $row['email'];	
} 

?>


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

<script type="text/javascript">
<!--
// Form validation code will come here.
function validate()
{
 
   if( document.myform.shirt.value == "" )
   {
     alert( "Please enter your shirt size!" );
     document.myform.shirt.focus() ;
     return false;
   }   
   if( document.myform.communications.value == "" )
   {
     alert( "How would you to receive your communications? Please select!" );
     document.myform.communications.focus() ;
     return false;
   }
   return( true );
}
//-->
</script>


</head>
<body OnLoad="document.myform.firstname.focus();" bgcolor="#000">
<div align="center">
<form name="myform" action="thankyou.php" method="post" onsubmit="return(validate());">
<input type="hidden" name="reserv_number" value="<?php echo $reserv_number; ?>">
<!-- Save for Web Slices (DaikinForm.psd) -->
<table id="Table_01" width="960" height="1210" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<img src="images/DaiklinTemplate_01.gif" width="238" height="132" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_02.gif" width="237" height="132" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_03.gif" width="37" height="132" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_04.gif" width="187" height="132" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_05.gif" width="179" height="132" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_06.gif" width="82" height="132" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_07.gif" width="238" height="25" alt=""></td>
		<td>
			<input type="text" name="first_name" class="firstname" value="<?php echo $first_name; ?>" tabindex="1"/></td>
		<td>
			<img src="images/DaiklinTemplate_09.gif" width="37" height="25" alt=""></td>
		<td colspan="3" rowspan="25" valign="top"><table width="448" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <td><table id="Table_" width="448" height="135" border="0" cellpadding="0" cellspacing="0">
		      <tr>
		        <td><img src="images/reg2Top_01.gif" width="6" height="35" alt=""></td>
		        <td><img src="images/reg2Top_02.gif" width="21" height="35" alt=""></td>
		        <td><img src="images/reg2Top_03.gif" width="82" height="35" alt=""></td>
		        <td><img src="images/reg2Top_04.gif" width="21" height="35" alt=""></td>
		        <td><img src="images/reg2Top_05.gif" width="318" height="35" alt=""></td>
	          </tr>
		      <tr>
		        <td colspan="5" class="hotel_select"><select class="hotel" name="hotel" tabindex="6" style="margin-left: 6px; height: 20px; width: 125px;">
	<option value="" selected>Select Here</option>
	<option value="Yes">Yes</option>
	<option value="No">No</option>	
</select></td>
	          </tr>
		      <tr>
		        <td><img src="images/reg2Top_11.gif" width="6" height="27" alt=""></td>
		        <td><img src="images/reg2Top_12.gif" width="21" height="27" alt=""></td>
		        <td><img src="images/reg2Top_13.gif" width="82" height="27" alt=""></td>
		        <td><img src="images/reg2Top_14.gif" width="21" height="27" alt=""></td>
		        <td><img src="images/reg2Top_15.gif" width="318" height="27" alt=""></td>
	          </tr>
		      <tr>
		        <td><img src="images/reg2Top_16.gif" width="6" height="32" alt=""></td>
		        <td><img src="images/reg2Top_17.gif" width="21" height="32" alt=""></td>
		        <td><img src="images/reg2Top_18.gif" width="82" height="32" alt=""></td>
		        <td><img src="images/reg2Top_19.gif" width="21" height="32" alt=""></td>
		        <td><img src="images/reg2Top_20.gif" width="318" height="32" alt=""></td>
	          </tr>
		       <tr>
		        <td colspan="5" class="flight_select"><select class="flight" name="flight" tabindex="6" style="margin-left: 6px; height: 20px; width: 125px;">
	<option value="" selected>Select Here</option>
	<option value="Yes">Yes</option>
	<option value="No">No</option>	
</select></td>
	          </tr>
		      <tr>
		        <td><img src="images/reg2Top_26.gif" width="6" height="1" alt=""></td>
		        <td><img src="images/reg2Top_27.gif" width="21" height="1" alt=""></td>
		        <td><img src="images/reg2Top_28.gif" width="82" height="1" alt=""></td>
		        <td><img src="images/reg2Top_29.gif" width="21" height="1" alt=""></td>
		        <td><img src="images/reg2Top_30.gif" width="318" height="1" alt=""></td>
	          </tr>
	        </table></td>
	      </tr>
		  <tr>
		    <td><table id="Table_2" width="448" height="128" border="0" cellpadding="0" cellspacing="0">
		      <tr>
		        <td><img src="images/formRight2_01.gif" width="185" height="19" alt=""></td>
		        <td><img src="images/formRight2_02.gif" width="183" height="19" alt=""></td>
		        <td><img src="images/formRight2_03.gif" width="80" height="19" alt=""></td>
	          </tr>
		      <tr>
		        <td><img src="images/formRight2_04.gif" width="185" height="26" alt=""></td>
		        <td><input type="text" class="orig_airport" name="airport" tabindex="16"/></td>
		        <td><img src="images/formRight2_06.gif" width="80" height="26" alt=""></td>
	          </tr>
		      <tr>
		        <td><img src="images/formRight2_07.gif" width="185" height="15" alt=""></td>
		        <td><img src="images/formRight2_08.gif" width="183" height="15" alt=""></td>
		        <td><img src="images/formRight2_09.gif" width="80" height="15" alt=""></td>
	          </tr>
		      <tr>
		        <td><img src="images/formRight2_10.gif" width="185" height="26" alt=""></td>
		        <td><input type="text" class="orig_airport" name="airline" tabindex="17"/></td>
		        <td><img src="images/formRight2_12.gif" width="80" height="26" alt=""></td>
	          </tr>
		      <tr>
		        <td><img src="images/formRight2_13.gif" width="185" height="16" alt=""></td>
		        <td><img src="images/formRight2_14.gif" width="183" height="16" alt=""></td>
		        <td><img src="images/formRight2_15.gif" width="80" height="16" alt=""></td>
	          </tr>
		      <tr>
		        <td><img src="images/formRight2_16.gif" width="185" height="26" alt=""></td>
		        <td><input type="text" class="orig_airport" name="frequent_flyer" tabindex="18"/></td>
		        <td><img src="images/formRight2_18.gif" width="80" height="26" alt=""></td>
	          </tr>
	        </table></td>
	      </tr>
		  <tr>
		    <td><table id="Table_3" width="448" border="0" cellpadding="0" cellspacing="0">
		      <tr>
		        <td><img src="images/formRight3_01.gif" width="8" height="51" alt=""></td>
		        <td><img src="images/formRight3_02.gif" width="360" height="51" alt=""></td>
		        <td><img src="images/formRight3_03.gif" width="80" height="51" alt=""></td>
	          </tr>
		      <tr>
		        <td><img src="images/formRight3_04.gif" width="8" height="61" alt=""></td>
		        <td><textarea class="dietary" name="dietary"></textarea></td>
		        <td><img src="images/formRight3_06.gif" width="80" height="61" alt=""></td>
	          </tr>
		      <tr>
		        <td colspan="2">&nbsp;</td>
		        <td><img src="images/formRight3_09.gif" width="80" height="28" alt=""></td>
	          </tr>
		      <tr>
		        <td><img src="images/formRight3_10.gif" width="8" height="75" alt=""></td>
		        <td><img src="images/formRight3_11.gif" width="360" height="75" alt=""></td>
		        <td><img src="images/formRight3_12.gif" width="80" height="75" alt=""></td>
	          </tr>
		      <tr>
		        <td><img src="images/formRight3_13.gif" width="8" height="62" alt=""></td>
		        <td><textarea class="question" name="question"></textarea></td>
		        <td><img src="images/formRight3_15.gif" width="80" height="62" alt=""></td>
	          </tr>
	        </table></td>
	      </tr>
		  <tr>
		    <td><table id="Table_4" width="448" height="176" border="0" cellpadding="0" cellspacing="0">
		      <tr>
		        <td><img src="images/formRight4_01.gif" width="6" height="1" alt=""></td>
		        <td><img src="images/formRight4_02.gif" width="21" height="1" alt=""></td>
		        <td><img src="images/formRight4_03.gif" width="82" height="1" alt=""></td>
		        <td><img src="images/formRight4_04.gif" width="21" height="1" alt=""></td>
		        <td><img src="images/formRight4_05.gif" width="99" height="1" alt=""></td>
		        <td><img src="images/formRight4_06.gif" width="20" height="1" alt=""></td>
		        <td><img src="images/formRight4_07.gif" width="119" height="1" alt=""></td>
		        <td><img src="images/formRight4_08.gif" width="80" height="1" alt=""></td>
	          </tr>
		      <tr>
		        <td><img src="images/formRight4_09.gif" width="6" height="63" alt=""></td>
		        <td><img src="images/formRight4_10.gif" width="21" height="63" alt=""></td>
		        <td><img src="images/formRight4_11.gif" width="82" height="63" alt=""></td>
		        <td><img src="images/formRight4_12.gif" width="21" height="63" alt=""></td>
		        <td><img src="images/formRight4_13.gif" width="99" height="63" alt=""></td>
		        <td><img src="images/formRight4_14.gif" width="20" height="63" alt=""></td>
		        <td><img src="images/formRight4_15.gif" width="119" height="63" alt=""></td>
		        <td><img src="images/formRight4_16.gif" width="80" height="63" alt=""></td>
	          </tr>
		      <tr>
		        <td colspan="8" class="communi_select_back"><select class="communications" name="communications" tabindex="6" style="margin-left: 6px; height: 20px; width: 125px;">
	<option value="" selected>Select Here</option>
	<option value="Email">Email</option>
	<option value="SMS">SMS</option>	
</select></td>
	          </tr>
		      <tr>
		        <td><img src="images/formRight4_25.gif" width="6" height="24" alt=""></td>
		        <td><img src="images/formRight4_26.gif" width="21" height="24" alt=""></td>
		        <td><img src="images/formRight4_27.gif" width="82" height="24" alt=""></td>
		        <td><img src="images/formRight4_28.gif" width="21" height="24" alt=""></td>
		        <td><img src="images/formRight4_29.gif" width="99" height="24" alt=""></td>
		        <td><img src="images/formRight4_30.gif" width="20" height="24" alt=""></td>
		        <td><img src="images/formRight4_31.gif" width="119" height="24" alt=""></td>
		        <td><img src="images/formRight4_32.gif" width="80" height="24" alt=""></td>
	          </tr>
		      <tr>
		        <td colspan="8"><img src="images/liketoreceive.gif" width="448" height="30" alt=""></td>
	          </tr>
		     <tr>
		        <td colspan="8" class="info_select_back"><select class="information" name="information" tabindex="6" style="margin-left: 6px; height: 20px; width: 125px;">
	<option value="" selected>Select Here</option>
	<option value="Weather">Weather</option>
	<option value="Flight Info">Flight Info</option>	
	<option value="Wake Up Call">Wake Up Call</option>	
</select></td>
	          </tr>
		      <tr>
		        <td><img src="images/formRight4_49.gif" width="6" height="14" alt=""></td>
		        <td><img src="images/formRight4_50.gif" width="21" height="14" alt=""></td>
		        <td><img src="images/formRight4_51.gif" width="82" height="14" alt=""></td>
		        <td><img src="images/formRight4_52.gif" width="21" height="14" alt=""></td>
		        <td><img src="images/formRight4_53.gif" width="99" height="14" alt=""></td>
		        <td><img src="images/formRight4_54.gif" width="20" height="14" alt=""></td>
		        <td><img src="images/formRight4_55.gif" width="119" height="14" alt=""></td>
		        <td><img src="images/formRight4_56.gif" width="80" height="14" alt=""></td>
	          </tr>
	        </table></td>
	      </tr>
		  <tr>
		    <td><table id="Table_5" width="448" height="361" border="0" cellpadding="0" cellspacing="0">
		      <tr>
		        <td><img src="images/formRight5_01.gif" width="161" height="28" alt=""></td>
		        <td><img src="images/formRight5_02.gif" width="287" height="28" alt=""></td>
	          </tr>
		      <tr>
		        <td><input type="image" src="images/formRight5_03.gif" alt="Submit"></td>
		        <td><img src="images/formRight5_04.gif" width="287" height="39" alt=""></td>
	          </tr>
		      <tr>
		        <td><img src="images/formRight5_05.gif" width="161" height="294" alt=""></td>
		        <td><img src="images/formRight5_06.gif" width="287" height="294" alt=""></td>
	          </tr>
	        </table></td>
	      </tr>
	    </table></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_13.gif" width="238" height="16" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_14.gif" width="237" height="16" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_15.gif" width="37" height="16" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_19.gif" width="238" height="25" alt=""></td>
		<td>
			<input type="text" name="last_name" value="<?php echo $last_name; ?>" class="lastname" tabindex="2"/></td>
		<td>
			<img src="images/DaiklinTemplate_21.gif" width="37" height="25" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_25.gif" width="238" height="17" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_26.gif" width="237" height="17" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_27.gif" width="37" height="17" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_31.gif" width="238" height="25" alt=""></td>
		<td>
			<input type="text" class="address1" name="address1" value="<?php echo $address1; ?>" tabindex="3"/></td>
		<td>
			<img src="images/DaiklinTemplate_33.gif" width="37" height="25" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_37.gif" width="238" height="16" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_38.gif" width="237" height="16" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_39.gif" width="37" height="16" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_43.gif" width="238" height="26" alt=""></td>
		<td>
			<input type="text" class="address2" name="address2" value="<?php echo $address2; ?>" tabindex="4"/></td>
		<td>
			<img src="images/DaiklinTemplate_45.gif" width="37" height="26" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_49.gif" width="238" height="16" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_50.gif" width="237" height="16" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_51.gif" width="37" height="16" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_55.gif" width="238" height="25" alt=""></td>
		<td>
			<input type="text" class="city" name="city" value="<?php echo $city; ?>" tabindex="5"/></td>
		<td>
			<img src="images/DaiklinTemplate_57.gif" width="37" height="25" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_61.gif" width="238" height="16" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_62.gif" width="237" height="16" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_63.gif" width="37" height="16" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_67.gif" width="238" height="26" alt=""></td>
		<td><input type="text" class="city" name="state" value="<?php echo $state; ?>" tabindex="6"/></td>
		<td>
			<img src="images/DaiklinTemplate_69.gif" width="37" height="26" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_73.gif" width="238" height="16" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_74.gif" width="237" height="16" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_75.gif" width="37" height="16" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_79.gif" width="238" height="25" alt=""></td>
		<td>
			<input type="text" class="zip" name="zip" value="<?php echo $zip; ?>" tabindex="7"/></td>
		<td>
			<img src="images/DaiklinTemplate_81.gif" width="37" height="25" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_85.gif" width="238" height="16" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_86.gif" width="237" height="16" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_87.gif" width="37" height="16" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_91.gif" width="238" height="26" alt=""></td>
		<td>
			<input type="text" class="phone1" name="phone1" value="<?php echo $phone1; ?>" tabindex="8"/></td>
		<td>
			<img src="images/DaiklinTemplate_93.gif" width="37" height="26" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_97.gif" width="238" height="15" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_98.gif" width="237" height="15" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_99.gif" width="37" height="15" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_103.gif" width="238" height="26" alt=""></td>
		<td>
			<input type="text" class="phone2" name="phone2" value="<?php echo $phone2; ?>" tabindex="9"/></td>
		<td>
			<img src="images/DaiklinTemplate_105.gif" width="37" height="26" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_109.gif" width="238" height="16" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_110.gif" width="237" height="16" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_111.gif" width="37" height="16" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_115.gif" width="238" height="25" alt=""></td>
		<td>
			<input type="text" class="email" name="email" value="<?php echo $email; ?>" tabindex="10"/></td>
		<td>
			<img src="images/DaiklinTemplate_117.gif" width="37" height="25" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_121.gif" width="238" height="18" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_122.gif" width="237" height="18" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_123.gif" width="37" height="18" alt=""></td>
	</tr>
	<tr>
		<td>
		  <img src="images/DaikinForm_43.gif" width="238" height="22" alt=""></td>
		<td>
	    
		
		
		<select class="shirt" name="shirt" tabindex="11">
			<option value="" selected>Select Here</option>
	<option value="Men's Small">Men's Small</option>
		<option value="Men's Medium">Men's Medium</option>
			<option value="Men's Large">Men's Large</option>
				<option value="Men's XL">Men's XL</option>
					<option value="Men's 2XL">Men's 2XL</option>
						<option value="Men's 3XL">Men's 3XL</option>
	
	<option value="Women's Small">Women's Small</option>
		<option value="Women's Medium">Women's Medium</option>
			<option value="Women's Large">Women's Large</option>
				<option value="Women's XL">Women's XL</option>
					<option value="Women's 2XL">Women's 2XL</option>
						<option value="Women's 3XL">Women's 3XL</option>
</select>
		
		
		</td>
		<td>
			<img src="images/DaiklinTemplate_129.gif" width="37" height="22" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_133.gif" width="238" height="43" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_134.gif" width="237" height="43" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_135.gif" width="37" height="43" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_139.gif" width="238" height="264" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_140.gif" width="237" height="264" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_141.gif" width="37" height="264" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_145.gif" width="238" height="39" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_146.gif" width="237" height="39" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_147.gif" width="37" height="39" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/DaiklinTemplate_151.gif" width="238" height="294" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_152.gif" width="237" height="294" alt=""></td>
		<td>
			<img src="images/DaiklinTemplate_153.gif" width="37" height="294" alt=""></td>
	</tr>
</table>
</div>
<p align="center">Problems registering? Contact <a href="mailto:mwaldrop@acclaroinc.com">mwaldrop@acclaroinc.com</a>.</p>
<!-- End Save for Web Slices -->
</body>
</html>
<?php

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);
?>