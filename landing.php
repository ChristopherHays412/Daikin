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
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="js/jquery.validate.js"></script>

<script>
//$.validator.setDefaults({
	//submitHandler: function() { alert("submitted!"); }
//});


$().ready(function() {

	//$('input[name="inputName[]"]');
	// validate the comment form when it is submitted
	//$("#requestform").validate();
	
	//$('input[properties\\[\\]=properties]');	
	
	// validate signup form on keyup and submit		
	$("#requestform").validate({
			
		rules: {
			reserv_number: "required"																	
		},
		messages: {
			title: "Please enter your registration number"
						//properties: "Please select from the available properties"		
			
		}
	});			
	
});
</script>
<style type="text/css">
#requestform label.error {
	margin-left: 10px;
	width: auto;
	display: inline;
	font-weight: bold;
	color: #ff0000;
}
</style>
</head>

<body>
<body>
<form action="reg2.php" method="post" name="requestform" id="requestform">

<div align="center">
<table id="Table_01" width="960" height="652" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<img src="images/LandingPage_01.jpg" width="434" height="219" alt=""></td>
		<td>
			<img src="images/LandingPage_02.jpg" width="295" height="219" alt=""></td>
		<td>
			<img src="images/LandingPage_03.jpg" width="152" height="219" alt=""></td>
		<td>
			<img src="images/LandingPage_04.jpg" width="79" height="219" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/LandingPage_05.jpg" width="434" height="53" alt=""></td>
		<td colspan="2"><input type="text" class="reserve_number" name="reserv_number" placeholder="Enter Reservation Number Here"/></td>
		<td>
			<img src="images/LandingPage_08.jpg" width="79" height="53" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/LandingPage_09.jpg" width="434" height="21" alt=""></td>
		<td>
			<img src="images/LandingPage_10.jpg" width="295" height="21" alt=""></td>
		<td>
			<img src="images/LandingPage_11.jpg" width="152" height="21" alt=""></td>
		<td>
			<img src="images/LandingPage_12.jpg" width="79" height="21" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/LandingPage_13.jpg" width="434" height="41" alt=""></td>
		<td>
			<img src="images/LandingPage_14.jpg" width="295" height="41" alt=""></td>
		<td>
			<input type="image" src="images/LandingPage_15.jpg" alt="Submit"></td>
		<td>
			<img src="images/LandingPage_16.jpg" width="79" height="41" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/LandingPage_17.jpg" width="434" height="318" alt=""></td>
		<td>
			<img src="images/LandingPage_18.jpg" width="295" height="318" alt=""></td>
		<td>
			<img src="images/LandingPage_19.jpg" width="152" height="318" alt=""></td>
		<td>
			<img src="images/LandingPage_20.jpg" width="79" height="318" alt=""></td>
	</tr>
</table>

</form>
</body>
</html>



</body>
</html>
