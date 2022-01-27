<?php
	include_once('connect.php');
?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<title> SAKILA | MULTIPLE SELECT PAGE</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" type="image/x-icon" href="logo_icon.jpg" />
		<link rel="stylesheet" href="styles.css" text="text/css"/>
		<link rel="stylesheet" href="fontawesomemin.css"/>
		<script src="querymin.js"></script>
		<script src="bootstrapmin.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	    <script> 
	$(document).ready(function(){
		$(".flip").click(function(){
			$(this).next().find(".panel").slideToggle("slow");
		});
	});
	</script>
	</head>
	
	<style> 
.larger {
    width:2vw;
    height:2vh;
}

/*sliding*/
nav{  
        width:100%;  
        background-color:LightSteelBlue;  
        padding-top:14px;  
        padding-bottom:14px;  

    }   

/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/*sliding mechanism*/
.panel,.flip
{
margin:auto;
width:50%;
padding:5px;
text-align:center;
border:solid 1px #c3c3c3;
font-family:verdana;
border: 3px solid green;
}
.panel
{
margin:auto;
width: 44%;
padding:50px;
display:none;
font-family:verdana;
text-align:left;
border: 3px solid green;
font-size:2vw;
}

#myBtn:hover {
  background-color: #555;
}
</style>
	
	<body>
	<!-- back to top button-->
		<a id="back2Top" title="Back to top" href="#">&#10148;</a>			
     		<script type="text/javascript">
     			/*Scroll to top when arrow up clicked BEGIN*/
				$(window).scroll(function() {
    			var height = $(window).scrollTop();
    				if (height > 100) {
        				$('#back2Top').fadeIn();
    				} else {
        				$('#back2Top').fadeOut();
    				}
				});
				$(document).ready(function() {
    			$("#back2Top").click(function(event) {
        			event.preventDefault();
        		$("html, body").animate({ scrollTop: 0 }, "slow");
        		return false;
    				});

				});
 				/*Scroll to top when arrow up clicked END*/
     		</script>
	<!--logo-->
					<table border="0" align="center" style="text-decoration:none" >
					<tr><td>
				   <a href="SakilaHome.php"><img class="container-fluid" id="icon" src="logo_icon.jpg" alt="SAKILA"  type="image" width="250vw" height="200vw"
				    title="SAKILA" align="center"/>
				    </a>
					<br />
					</td></tr>
					</table>
					
	<!--navigation_bar-->
	
				<div class="navbar" style="margin-bottom:2vw">
				  <div class="dropdown">
					<button class="dropbtn">A&nbsp;&nbsp;&nbsp;
				
					</button>
					<div class="dropdown-content">
					  <a href="actor.php">ACTOR</a>
					  <a href="address.php">ADDRESS</a>
					</div>
				  </div>
				 <div class="dropdown">
					<button class="dropbtn">C&nbsp;&nbsp;&nbsp;
				
					</button>
					<div class="dropdown-content">
					  <a href="category.php">CATEGORY</a>
					  <a href="city.php">CITY</a>
					  <a href="country.php">COUNTRY</a>
					  <a href="customer.php">CUSTOMER</a>
					</div>
				  </div> 
				 <div class="dropdown">
					<button class="dropbtn">F&nbsp;&nbsp;&nbsp;
				
					</button>
					<div class="dropdown-content">
					  <a href="film.php">FILM</a>
					  <a href="film_actor.php">FILM ACTOR</a>
					  <a href="film_category.php">FILM CATEGORY</a>
					  <a href="film_text.php">FILM TEXT</a>
					  <a href="film_rental.php">FILM RENTAL</a>
					</div>
				  </div> 
				  <a href="inventory.php">INVENTORY</a>
				  <a href="payment.php">PAYMENT</a>
				  <a href="language.php">LANGUAGE</a>
				  <a href="rental.php">RENTAL</a>
				 <div class="dropdown">
					<button class="dropbtn">S&nbsp;&nbsp;&nbsp;
			
					</button>
					<div class="dropdown-content">
					  <a href="staff.php">STAFF</a>
					  <a href="store.php">STORE</a>
					</div>
				  </div> 				  
				</div>
				
    <!-- NOTICE BOARD -->
	<div style = " text-align: justify, text-justify: inter-word">
	    <h2><b> To view data from  single table(s)  :</b>
	    <button><a style="text-decoration:none;color:black" href="select.php" >Click Here</a></button></h2>
	    <h2><b> To insert data into table(s)  :</b>
	    <button><a style="text-decoration:none;color:black" href="insert.php" >Click Here</a></button></h2>
		<h2><b> View data from multiple table(s) :</b></h2>
		<h4><i> * Click to expand or close *</i><h4>
		    
    <!-- dropdown for ADDRESS|STORE table -->
		<h1 class="flip" style = "background-color:LightSkyBlue;">ADDRESS | STORE<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form  role="form"  action = "multselect00.php" method="post" id="addst">
				<label  style="font-size:2vw">ADDRESS ID</label>
				<br />
				<input class="larger" type="checkbox" id="ad1" name="adst[]" value="ADDRESS" />
				<label  style="font-size:2vw" for="ad1">ADDRESS</label>
				<br />
				<input class="larger" type="checkbox" id="ad2" name="adst[]" value="ADDRESS2" />
				<label  style="font-size:2vw" for="ad2">ADDRESS2</label>
				<br />
				<input class="larger" type="checkbox" id="district" name="adst[]" value= "DISTRICT" />
				<label  style="font-size:2vw" for="district">DISTRICT</label>
				<br />
				<input class="larger" type="checkbox" id="cityid" name="adst[]" value= "CITY_ID" />
				<label  style="font-size:2vw" for="cityid">CITY ID</label>
				<br />
				<input class="larger" type="checkbox" id="postc" name="adst[]" value= "POSTAL_CODE" />
				<label  style="font-size:2vw" for="postc">POSTAL CODE</label>
				<br />
				<input class="larger" type="checkbox" id="phone" name="adst[]" value= "PHONE" />
				<label  style="font-size:2vw" for="phone">PHONE</label>
				<br />
				<input class="larger" type="checkbox" id="idstore" name="adst[]" value= "STORE_ID" />
				<label  style="font-size:2vw" for="idstore">STORE ID</label>
				<br />
				<input class="larger" type="checkbox" id="msid" name="adst[]" value= "MANAGER_STAFF_ID" />
				<label  style="font-size:2vw" for="msid">MANAGER STAFF ID</label>
				<br />		
				<label  style="font-size:2vw" for="sadid">specific address ID:</label>
				<input   type="number" step="1" id="sadid" name="said" />
				<br />					
				<input type="submit"  value="Submit"/>
			</form>
		</div>
		
    <!-- dropdown for ADDRESS | CITY table-->
		<h1 class="flip" style = "background-color:LightSkyBlue;">ADDRESS | CITY<h1>
		<div class="panel" style = "background-color:LightCyan;">
			<form role="form" action="multselect00.php" method="post" id="addcity">
				<label  style="font-size:2vw">CITY ID</label>
				<br />
				<input class="larger" type="checkbox" id="ac1" name="adc[]" value="ADDRESS" />
				<label  style="font-size:1em" for="ac1">ADDRESS</label>
				<br />
				<input class="larger" type="checkbox" id="ac2" name="adc[]" value="ADDRESS2" />
				<label  style="font-size:1em" for="ac2">ADDRESS2</label>
				<br />
				<input class="larger" type="checkbox" id="dc" name="adc[]" value= "DISTRICT" />
				<label  style="font-size:1em" for="dc">DISTRICT</label>
				<br />
				<input class="larger" type="checkbox" id="ac4" name="adc[]" value= "POSTAL_CODE" />
				<label  style="font-size:1em" for="ac4">POSTAL CODE</label>
				<br />
				<input class="larger" type="checkbox" id="ac5" name="adc[]" value= "PHONE" />
				<label  style="font-size:1em" for="ac5">PHONE</label>
				<br />
			    <input class="larger" type="checkbox" id="ac6" name="adc[]" value="CITY_ID" />
				<label  style="font-size:1em" for="ac6">CITY ID</label>
				<br />
				<input class="larger" type="checkbox" id="ac7" name="adc[]" value="CITY" />
				<label  style="font-size:1em" for="ac7">CITY</label>
				<br />
				<input class="larger" type="checkbox" id="ac8" name="adc[]" value= "COUNTRY_ID" />
				<label  style="font-size:1em" for="ac8">COUNTRY ID</label>
				<br />
				<label  style="font-size:1em" for="spcid">specific city ID:</label>
				<input  type="number" step="1" id="spcid" name="scid" />
				<br />
				<input type="submit"  value="Submit"/>
			</form>
		</div>
	
	 <!-- dropdown for ADDRESS | STAFF table  -->
		<h1 class="flip" style = "background-color:LightSkyBlue;">ADDRESS | STAFF<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form role="form" action="multselect01.php" method="post" id="addstaff">
				<label  style="font-size:1em">ADDRESS ID</label>
				<br />
				<input class="larger" type="checkbox" id="as1" name="as[]" value="ADDRESS" />
				<label  style="font-size:1em" for="as1">ADDRESS</label>
				<br />
				<input class="larger" type="checkbox" id="as2" name="as[]" value="ADDRESS2" />
				<label  style="font-size:1em" for="as2">ADDRESS2</label>
				<br />
				<input class="larger" type="checkbox" id="as3" name="as[]" value= "DISTRICT" />
				<label  style="font-size:1em" for="as3">DISTRICT</label>
				<br />
				<input class="larger" type="checkbox" id="as4" name="as[]" value= "CITY_ID" />
				<label  style="font-size:1em" for="as4">CITY ID</label>
				<br />
				<input class="larger" type="checkbox" id="as5" name="as[]" value= "POSTAL_CODE" />
				<label  style="font-size:1em" for="as5">POSTAL CODE</label>
				<br />
				<input class="larger" type="checkbox" id="as6" name="as[]" value= "PHONE" />
				<label  style="font-size:1em" for="as6">PHONE</label>
				<br />
				<input class="larger" type="checkbox" id="as7" name="as[]" value="STAFF_ID" />
				<label  style="font-size:1em" for="as7">STAFF ID</label>
				<br />
				<input class="larger" type="checkbox" id="as8" name="as[]" value="FIRST_NAME" />
				<label  style="font-size:1em" for="as8">FIRST NAME</label>
				<br />
				<input class="larger" type="checkbox" id="as9" name="as[]" value="LAST_NAME" />
				<label  style="font-size:1em" for="as9">LAST NAME</label>
				<br />
				<input class="larger" type="checkbox" id="as10" name="as[]" value= "PICTURE" />
				<label  style="font-size:1em" for="as10">PICTURE</label>
				<br />
				<input class="larger" type="checkbox" id="as11" name="as[]" value= "EMAIL" />
				<label  style="font-size:1em" for="as11">EMAIL</label>
				<br />
				<input class="larger" type="checkbox" id="as12" name="as[]" value= "STORE_ID" />
				<label  style="font-size:1em" for="as12">STORE ID</label>
				<br />
				<input class="larger" type="checkbox" id="as13" name="as[]" value= "ACTIVE" />
				<label  style="font-size:1em" for="as13">ACTIVE</label>
				<br />
				<input class="larger" type="checkbox" id="as14" name="as[]" value= "USERNAME" />
				<label  style="font-size:1em" for="as14">USERNAME</label>
				<br />	
				<input class="larger" type="checkbox" id="as15" name="as[]" value= "PASSWORD" />
				<label  style="font-size:1em" for="as15">PASSWORD</label>
				<br />
				<label  style="font-size:1em" for="as16">specific address ID:</label>
				<input  type="number" step="1" id="as16" name="specaddrID" />				
				<input type="submit"  value="Submit"/>
			</form>
		</div>
	
	 <!-- dropdown for ADDRESS|STORE|STAFF table-->
		<h1 class="flip" style = "background-color:LightSkyBlue;">ADDR | STORE | STAFF<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form  role="form"  action = "multselect00.php" method="post" id="addstorest">
				<label  style="font-size:1em">ADDRESS ID</label>
				<br />
				<input class="larger" type="checkbox" id="adstst1" name="adstst[]" value="ADDRESS" />
				<label  style="font-size:1em" for="adstst1">ADDRESS</label>
				<br />
				<input class="larger" type="checkbox" id="adstst2" name="adstst[]" value="ADDRESS2" />
				<label  style="font-size:1em" for="adstst2">ADDRESS2</label>
				<br />
				<input class="larger" type="checkbox" id="adstst3" name="adstst[]" value= "DISTRICT" />
				<label  style="font-size:1em" for="adstst3">DISTRICT</label>
				<br />
				<input class="larger" type="checkbox" id="adstst4" name="adstst[]" value= "CITY_ID" />
				<label  style="font-size:1em" for="adstst4">CITY ID</label>
				<br />
				<input class="larger" type="checkbox" id="adstst5" name="adstst[]" value= "POSTAL_CODE" />
				<label  style="font-size:1em" for="adstst5">POSTAL CODE</label>
				<br />
				<input class="larger" type="checkbox" id="adstst6" name="adstst[]" value= "PHONE" />
				<label  style="font-size:1em" for="adstst6">PHONE</label>
				<br />
				<input class="larger" type="checkbox" id="adstst7" name="adstst[]" value= "STORE_ID" />
				<label  style="font-size:1em" for="adstst7">STORE ID</label>
				<br />
				<input class="larger" type="checkbox" id="adstst8" name="adstst[]" value= "MANAGER_STAFF_ID" />
				<label  style="font-size:1em" for="adstst8">MANAGER STAFF ID</label>
				<br />
				<input class="larger" type="checkbox" id="adstst9" name="adstst[]" value="STAFF_ID" />
				<label  style="font-size:1em" for="adstst9">STAFF ID</label>
				<br />
				<input class="larger" type="checkbox" id="adstst10" name="ads[]" value="FIRST_NAME" />
				<label  style="font-size:1em" for="adstst10">FIRST NAME</label>
				<br />
				<input class="larger" type="checkbox" id="adstst11" name="adstst[]" value="LAST_NAME" />
				<label  style="font-size:1em" for="adstst11">LAST NAME</label>
				<br />
				<input class="larger" type="checkbox" id="adstst12" name="adstst[]" value= "PICTURE" />
				<label  style="font-size:1em" for="adstst12">PICTURE</label>
				<br />
				<input class="larger" type="checkbox" id="adstst13" name="adstst[]" value= "EMAIL" />
				<label  style="font-size:1em" for="adstst13">EMAIL</label>
				<br />
				<input class="larger" type="checkbox" id="adstst15" name="adstst[]" value= "ACTIVE" />
				<label  style="font-size:1em" for="adstst15">ACTIVE</label>
				<br />
				<input class="larger" type="checkbox" id="adstst16" name="adstst[]" value= "USERNAME" />
				<label  style="font-size:1em" for="adstst16">USERNAME</label>
				<br />	
				<input class="larger" type="checkbox" id="adstst17" name="adstst[]" value= "PASSWORD" />
				<label  style="font-size:1em" for="adstst17">PASSWORD</label>
				<br />
				<label  style="font-size:1em" for="sadssid">specific address ID:</label>
				<input   type="number" step="1" id="sadssid" name="sassid" />
				<br />					
				<input type="submit"  value="Submit"/>
			</form>
		</div>

	 <!-- dropdown for ADDRESS|STORE|STAFF|CITY table-->
		<h1 class="flip" style = "background-color:LightSkyBlue;">ADDR | STORE | STAFF | CITY<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form  role="form"  action = "multselect00.php" method="post" id="aststc">
				<label  style="font-size:1em">ADDRESS ID</label>
				<br />
				<label  style="font-size:1em" >CITY ID</label>
				<br />				
				<input class="larger" type="checkbox" id="aststc1" name="assc[]" value="ADDRESS" />
				<label  style="font-size:1em" for="aststc1">ADDRESS</label>
				<br />
				<input class="larger" type="checkbox" id="aststc2" name="assc[]" value="ADDRESS2" />
				<label  style="font-size:1em" for="aststc2">ADDRESS2</label>
				<br />
				<input class="larger" type="checkbox" id="aststc3" name="assc[]" value= "DISTRICT" />
				<label  style="font-size:1em" for="aststc3">DISTRICT</label>
				<br />
				<input class="larger" type="checkbox" id="aststc4" name="assc[]" value= "POSTAL_CODE" />
				<label  style="font-size:1em" for="aststc4">POSTAL CODE</label>
				<br />
				<input class="larger" type="checkbox" id="aststc5" name="assc[]" value= "PHONE" />
				<label  style="font-size:1em" for="aststc5">PHONE</label>
				<br />
				<input class="larger" type="checkbox" id="aststc6" name="assc[]" value= "STORE_ID" />
				<label  style="font-size:1em" for="aststc6">STORE ID</label>
				<br />
				<input class="larger" type="checkbox" id="aststc7" name="assc[]" value= "MANAGER_STAFF_ID" />
				<label  style="font-size:1em" for="aststc7">MANAGER STAFF ID</label>
				<br />
				<input class="larger" type="checkbox" id="aststc9" name="assc[]" value="STAFF_ID" />
				<label  style="font-size:1em" for="aststc9">STAFF ID</label>
				<br />
				<input class="larger" type="checkbox" id="aststc10" name="assc[]" value="FIRST_NAME" />
				<label  style="font-size:1em" for="aststc10">FIRST NAME</label>
				<br />
				<input class="larger" type="checkbox" id="aststc11" name="assc[]" value="LAST_NAME" />
				<label  style="font-size:1em" for="aststc11">LAST NAME</label>
				<br />
				<input class="larger" type="checkbox" id="aststc12" name="assc[]" value= "PICTURE" />
				<label  style="font-size:1em" for="aststc12">PICTURE</label>
				<br />
				<input class="larger" type="checkbox" id="aststc13" name="assc[]" value= "EMAIL" />
				<label  style="font-size:1em" for="aststc13">EMAIL</label>
				<br />
				<input class="larger" type="checkbox" id="aststc15" name="assc[]" value= "ACTIVE" />
				<label  style="font-size:1em" for="aststc15">ACTIVE</label>
				<br />
				<input class="larger" type="checkbox" id="aststc16" name="assc[]" value= "USERNAME" />
				<label  style="font-size:1em" for="aststc16">USERNAME</label>
				<br />	
				<input class="larger" type="checkbox" id="aststc17" name="assc[]" value= "PASSWORD" />
				<label  style="font-size:1em" for="aststc17">PASSWORD</label>
				<br />
				<input class="larger" type="checkbox" id="aststc19" name="assc[]" value="CITY" />
				<label  style="font-size:1em" for="aststc19">CITY</label>
				<br />
				<input class="larger" type="checkbox" id="aststc20" name="assc[]" value= "COUNTRY_ID" />
				<label  style="font-size:1em" for="aststc20">COUNTRY ID</label>
				<br />
				<label  style="font-size:1em" for="cc4">specific city ID:</label>
				<input  type="number" step="1" id="cc4" name="c4" />
				<br />				
				<label  style="font-size:1em" for="aa4">specific address ID:</label>
				<input   type="number" step="1" id="aa4" name="a4" />
				<br />					
				<input type="submit"  value="Submit"/>
			</form>
		</div> 
        
        
    <!-- dropdown for CATEGORY|FILM_CATEGORY table -->
		<h1 class="flip" style = "background-color:LightSkyBlue;">CATEGORY | FILM CATEGORY<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form  role="form"  action = "multselect00.php" method="post" id="catfcatt">
				<label  style="font-size:1em">CATEGORY ID</label>
				<br />
				<input class="larger" type="checkbox" id="cfc1" name="catfcat[]" value="NAME" />
				<label  style="font-size:1em" for="cfc1">NAME</label>
				<br />
				<input class="larger" type="checkbox" id="cfc2" name="catfcat[]" value="FILM_ID" />
				<label  style="font-size:1em" for="cfc2">FILM ID</label>
				<br />		
				<label  style="font-size:1em" for="speccatid">Specific Category ID:</label>
				<input   type="number" step="1" id="speccatid" name="scatid" />
				<br />					
				<input type="submit"  value="Submit"/>
			</form>
		</div>

		<!-- dropdown for COUNTRY|CITY table -->
		<h1 class="flip" style = "background-color:LightSkyBlue;">COUNTRY | CITY<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form  role="form"  action = "multselect00.php" method="post" id="citycountry">
				<label  style="font-size:1em">COUNTRY ID</label>
				<br />
				<input class="larger" type="checkbox" id="cc1" name="cc[]" value="COUNTRY" />
				<label  style="font-size:1em" for="ad1">COUNTRY</label>
				<br />
				<input class="larger" type="checkbox" id="cc2" name="cc[]" value="CITY_ID" />
				<label  style="font-size:1em" for="cc2">CITY ID</label>
				<br />	
				<input class="larger" type="checkbox" id="cc3" name="cc[]" value="CITY" />
				<label  style="font-size:1em" for="cc3">CITY</label>
				<br />	
				<label  style="font-size:1em" for="specccid">Specific Country ID:</label>
				<input   type="number" step="1" id="specccid" name="scid" />
				<br />					
				<input type="submit"  value="Submit"/>
			</form>
		</div>
	
	<!-- dropdown for CUSTOMER|PAYMENT table -->
		<h1 class="flip" style = "background-color:LightSkyBlue;">CUSTOMER | PAYMENT<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form  role="form"  action = "multselect00.php" method="post" id="customerpayment">
				<label  style="font-size:1em">CUSTOMER ID</label>
				<br />
				<input class="larger" type="checkbox" id="cp1" name="cp[]" value="STORE_ID" />
				<label  style="font-size:1em" for="cp1">STORE ID</label>
				<br />
				<input class="larger" type="checkbox" id="cp2" name="cp[]" value="FIRST_NAME" />
				<label  style="font-size:1em" for="cp2">FIRST NAME</label>
				<br />	
				<input class="larger" type="checkbox" id="cp3" name="cp[]" value="LAST_NAME" />
				<label  style="font-size:1em" for="cp3">LAST NAME</label>
				<br />	
				<input class="larger" type="checkbox" id="cp4" name="cp[]" value="EMAIL" />
				<label  style="font-size:1em" for="cp4">EMAIL</label>
				<br />
				<input class="larger" type="checkbox" id="cp5" name="cp[]" value="ADDRESS_ID" />
				<label  style="font-size:1em" for="cp5">ADDRESS ID</label>
				<br />
				<input class="larger" type="checkbox" id="cp6" name="cp[]" value="ACTIVE" />
				<label  style="font-size:1em" for="cp6">ACTIVE</label>
				<br />
				<input class="larger" type="checkbox" id="cp7" name="cp[]" value="CREATE_DATE" />
				<label  style="font-size:1em" for="cp7">CREATE DATE</label>
				<br />
				<input class="larger" type="checkbox" id="cp8" name="cp[]" value="PAYMENT_ID" />
				<label  style="font-size:1em" for="cp8">PAYMENT ID</label>
				<br />
				<input class="larger" type="checkbox" id="cp9" name="cp[]" value="STAFF_ID" />
				<label  style="font-size:1em" for="cp9">STAFF ID</label>
				<br />
				<input class="larger" type="checkbox" id="cp10" name="cp[]" value="RENTAL_ID" />
				<label  style="font-size:1em" for="cp10">RENTAL ID</label>
				<br />
				<input class="larger" type="checkbox" id="cp11" name="cp[]" value="AMOUNT" />
				<label  style="font-size:1em" for="cp11">AMOUNT</label>
				<br />
				<input class="larger" type="checkbox" id="cp12" name="cp[]" value="PAYMENT_DATE" />
				<label  style="font-size:1em" for="cp12">PAYMENT DATE</label>
				<br />
				<label  style="font-size:1em" for="speccusid">Specific Customer ID:</label>
				<input   type="number" step="1" id="speccusid" name="scusid" />
				<br />					
				<input type="submit"  value="Submit"/>
			</form>
		</div>

		<!-- dropdown for CUSTOMER|RENTAL table -->
		<h1 class="flip" style = "background-color:LightSkyBlue;">CUSTOMER | RENTAL<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form  role="form"  action = "multselect00.php" method="post" id="customerrental">
				<label  style="font-size:1em">CUSTOMER ID</label>
				<br />
				<input class="larger" type="checkbox" id="cr1" name="cr[]" value="STORE_ID" />
				<label  style="font-size:1em" for="cr1">STORE ID</label>
				<br />
				<input class="larger" type="checkbox" id="cr2" name="cr[]" value="FIRST_NAME" />
				<label  style="font-size:1em" for="cr2">FIRST NAME</label>
				<br />	
				<input class="larger" type="checkbox" id="cr3" name="cr[]" value="LAST_NAME" />
				<label  style="font-size:1em" for="cr3">LAST NAME</label>
				<br />	
				<input class="larger" type="checkbox" id="cr4" name="cr[]" value="EMAIL" />
				<label  style="font-size:1em" for="cr4">EMAIL</label>
				<br />
				<input class="larger" type="checkbox" id="cr5" name="cr[]" value="ADDRESS_ID" />
				<label  style="font-size:1em" for="cr5">ADDRESS ID</label>
				<br />
				<input class="larger" type="checkbox" id="cr6" name="cr[]" value="ACTIVE" />
				<label  style="font-size:1em" for="cr6">ACTIVE</label>
				<br />
				<input class="larger" type="checkbox" id="cr7" name="cr[]" value="CREATE_DATE" />
				<label  style="font-size:1em" for="cr7">CREATE DATE</label>
				<br />
				<input class="larger" type="checkbox" id="cr8" name="cr[]" value="RENTAL_ID" />
				<label  style="font-size:1em" for="cr8">RENTAL ID</label>
				<br />
				<input class="larger" type="checkbox" id="cr9" name="cr[]" value="RENTAL_DATE" />
				<label  style="font-size:1em" for="cr9">RENTAL DATE</label>
				<br />
				<input class="larger" type="checkbox" id="cr10" name="cr[]" value="INVENTORY_ID" />
				<label  style="font-size:1em" for="cr10">INVENTORY ID</label>
				<br />
				<input class="larger" type="checkbox" id="cr11" name="cr[]" value="RETURN_DATE" />
				<label  style="font-size:1em" for="cr11">RETURN DATE</label>
				<br />
				<input class="larger" type="checkbox" id="cr12" name="cr[]" value="STAFF_ID" />
				<label  style="font-size:1em" for="cr12">STAFF ID</label>
				<br />
				<label  style="font-size:1em" for="speccusid2">Specific Customer ID:</label>
				<input   type="number" step="1" id="speccusid2" name="scusid2" />
				<br />					
				<input type="submit"  value="Submit"/>
			</form>
		</div>

		<!-- dropdown for CUSTOMER|PAYMENT|RENTAL table -->
		<h1 class="flip" style = "background-color:LightSkyBlue;">CUSTOMER | PAYMENT | RENTAL<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form  role="form"  action = "multselect00.php" method="post" id="customerpaymentrental">
				<label  style="font-size:1em">CUSTOMER ID</label>
				<br />
				<input class="larger" type="checkbox" id="cpr1" name="cpr[]" value="STORE_ID" />
				<label  style="font-size:1em" for="cpr1">STORE ID</label>
				<br />
				<input class="larger" type="checkbox" id="cpr2" name="cpr[]" value="FIRST_NAME" />
				<label  style="font-size:1em" for="cpr2">FIRST NAME</label>
				<br />	
				<input class="larger" type="checkbox" id="cpr3" name="cpr[]" value="LAST_NAME" />
				<label  style="font-size:1em" for="cpr3">LAST NAME</label>
				<br />	
				<input class="larger" type="checkbox" id="cpr4" name="cpr[]" value="EMAIL" />
				<label  style="font-size:1em" for="cpr4">EMAIL</label>
				<br />
				<input class="larger" type="checkbox" id="cpr5" name="cpr[]" value="ADDRESS_ID" />
				<label  style="font-size:1em" for="cpr5">ADDRESS ID</label>
				<br />
				<input class="larger" type="checkbox" id="cpr6" name="cpr[]" value="ACTIVE" />
				<label  style="font-size:1em" for="cpr6">ACTIVE</label>
				<br />
				<input class="larger" type="checkbox" id="cpr7" name="cpr[]" value="CREATE_DATE" />
				<label  style="font-size:1em" for="cpr7">CREATE DATE</label>
				<br />
				<input class="larger" type="checkbox" id="cpr8" name="cpr[]" value="RENTAL_ID" />
				<label  style="font-size:1em" for="cpr8">RENTAL ID</label>
				<br />
				<input class="larger" type="checkbox" id="cpr9" name="cpr[]" value="RENTAL_DATE" />
				<label  style="font-size:1em" for="cpr9">RENTAL DATE</label>
				<br />
				<input class="larger" type="checkbox" id="cpr10" name="cpr[]" value="INVENTORY_ID" />
				<label  style="font-size:1em" for="cpr10">INVENTORY ID</label>
				<br />
				<input class="larger" type="checkbox" id="cpr11" name="cpr[]" value="RETURN_DATE" />
				<label  style="font-size:1em" for="cpr11">RETURN DATE</label>
				<br />
				<input class="larger" type="checkbox" id="cpr12" name="cpr[]" value="STAFF_ID" />
				<label  style="font-size:1em" for="cpr12">STAFF ID</label>
				<br />
				<input class="larger" type="checkbox" id="cpr13" name="cpr[]" value="PAYMENT_ID" />
				<label  style="font-size:1em" for="cpr13">PAYMENT ID</label>
				<br />
				<input class="larger" type="checkbox" id="cpr14" name="cpr[]" value="AMOUNT" />
				<label  style="font-size:1em" for="cpr14">AMOUNT</label>
				<br />
				<input class="larger" type="checkbox" id="cpr15" name="cpr[]" value="PAYMENT_DATE" />
				<label  style="font-size:1em" for="cpr15">PAYMENT DATE</label>
				<br />
				<label  style="font-size:1em" for="speccusid3">Specific Customer ID:</label>
				<input   type="number" step="1" id="speccusid3" name="scusid3
				" />
				<br />					
				<input type="submit"  value="Submit"/>
			</form>
		</div>

		<!-- dropdown for FILM|FILM TEXT table -->
		<h1 class="flip" style = "background-color:LightSkyBlue;">FILM | FILM TEXT<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form  role="form"  action = "multselect00.php" method="post" id="filmfilmtext">
				<label  style="font-size:1em">FILM ID</label>
				<br />
				<input class="larger" type="checkbox" id="fft1" name="fft[]" value="RELEASE_YEAR" />
				<label  style="font-size:1em" for="fft1">RELEASE YEAR</label>
				<br />
				<input class="larger" type="checkbox" id="fft2" name="fft[]" value="LANGUAGE_ID" />
				<label  style="font-size:1em" for="fft2">LANGUAGE ID</label>
				<br />
				<input class="larger" type="checkbox" id="fft3" name="fft[]" value="ORIGINAL_LANGUAGE_ID" />
				<label  style="font-size:1em" for="fft3">ORIGINAL LANGUAGE ID</label>
				<br />
				<input class="larger" type="checkbox" id="fft4" name="fft[]" value="RATING" />
				<label  style="font-size:1em" for="fft4">RATING</label>
				<br />
				<input class="larger" type="checkbox" id="fft5" name="fft[]" value="SPECIAL_FEATURES" />
				<label  style="font-size:1em" for="fft5">SPECIAL FEATURES</label>
				<br />
				<input class="larger" type="checkbox" id="fft6" name="fft[]" value="TITLE" />
				<label  style="font-size:1em" for="fft6">TITLE</label>
				<br />
				<input class="larger" type="checkbox" id="fft7" name="fft[]" value="DESCRIPTION" />
				<label  style="font-size:1em" for="fft7">DESCRIPTION</label>
				<br />
				<label  style="font-size:1em" for="specfilmid">Specific Customer ID:</label>
				<input   type="number" step="1" id="specfilmid" name="sfid" />
				<br />					
				<input type="submit"  value="Submit"/>
			</form>
		</div>
		
		<!-- dropdown for FILM|FILM_RENTAL table-->
		<h1 class="flip" style = "background-color:LightSkyBlue;">FILM|FILM RENTAL <h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form  role="form"  action = "multselect00.php" method="post" id="filmfr">
				<label  style="font-size:1em">FILM ID</label>
				<br />
				<input class="larger" type="checkbox" id="filmfr2" name="filmfr[]" value="RELEASE_YEAR" />
				<label  style="font-size:1em" for="filmfr2">RELEASE YEAR</label>
				<br />
				<input class="larger" type="checkbox" id="filmfr3" name="filmfr[]" value= "LANGUAGE_ID" />
				<label  style="font-size:1em" for="filmfr3">LANGUAGE ID</label>
				<br />
				<input class="larger" type="checkbox" id="filmfr4" name="filmfr[]" value= "ORIGINAL_LANGUAGE_ID" />
				<label  style="font-size:1em" for="filmfr4">ORIGINAL LANGUAGE ID</label>
				<br />
				<input class="larger" type="checkbox" id="filmfr5" name="filmfr[]" value= "RATING" />
				<label  style="font-size:1em" for="filmfr5">RATING</label>
				<br />
				<input class="larger" type="checkbox" id="filmfr6" name="filmfr[]" value= "SPECIAL_FEATURES" />
				<label  style="font-size:1em" for="filmfr6">SPECIAL FEATURES</label>
				<br />
				<input class="larger" type="checkbox" id="filmfr7" name="filmfr[]" value= "RENTAL_DURATION" />
				<label  style="font-size:1em" for="filmfr7">RENTAL DURATION</label>
				<br />
				<input class="larger" type="checkbox" id="filmfr8" name="filmfr[]" value= "RENTAL_RATE" />
				<label  style="font-size:1em" for="filmfr8">RENTAL RATE</label>
				<br />
				<input class="larger" type="checkbox" id="filmfr9" name="filmfr[]" value="LENGTH" />
				<label  style="font-size:1em" for="filmfr9">LENGTH</label>
				<br />
				<input class="larger" type="checkbox" id="filmfr10" name="filmfr[]" value="REPLACEMENT_COST" />
				<label  style="font-size:1em" for="filmfr10">REPLACEMENT COST</label>
				<br />					
				<label  style="font-size:1em" for="sfilmid">specific film ID:</label>
				<input   type="number" step="1" id="sfilmfrid" name="sfilmfrid" />
				<br />					
				<input type="submit"  value="Submit"/>
			</form>
		</div>
		
			<!-- dropdown for FILM|FILM_CATEGORY table-->
		<h1 class="flip" style = "background-color:LightSkyBlue;">FILM|FILM CATEGORY <h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form  role="form"  action = "multselect00.php" method="post" id="filmfc">
				<label  style="font-size:1em">FILM ID</label>
				<br />
				<input class="larger" type="checkbox" id="filmfc2" name="filmfc[]" value="RELEASE_YEAR" />
				<label  style="font-size:1em" for="filmfc2">RELEASE YEAR</label>
				<br />
				<input class="larger" type="checkbox" id="filmfc3" name="filmfc[]" value= "LANGUAGE_ID" />
				<label  style="font-size:1em" for="filmfc3">LANGUAGE ID</label>
				<br />
				<input class="larger" type="checkbox" id="filmfc4" name="filmfc[]" value= "ORIGINAL_LANGUAGE_ID" />
				<label  style="font-size:1em" for="filmfc4">ORIGINAL LANGUAGE ID</label>
				<br />
				<input class="larger" type="checkbox" id="filmfc5" name="filmfc[]" value= "RATING" />
				<label  style="font-size:1em" for="filmfc5">RATING</label>
				<br />
				<input class="larger" type="checkbox" id="filmfc6" name="filmfc[]" value= "SPECIAL_FEATURES" />
				<label  style="font-size:1em" for="filmfc6">SPECIAL FEATURES</label>
				<br />
				<input class="larger" type="checkbox" id="filmfc7" name="filmfc[]" value= "CATEGORY_ID" />
				<label  style="font-size:1em" for="filmfc7">CATEGORY ID</label>
				<br />					
				<label  style="font-size:1em" for="sfilmid">specific film ID:</label>
				<input   type="number" step="1" id="sfilmfcid" name="sfilmfcid" />
				<br />					
				<input type="submit"  value="Submit"/>
			</form>
		</div>
		
			<!-- dropdown for FILM|FILM_TEXT |FILM_RENTAL table-->
		<h1 class="flip" style = "background-color:LightSkyBlue;">FILM|FILM TEXT|FILM RENTAL <h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form  role="form"  action = "multselect00.php" method="post" id="filmftfr">
				<label  style="font-size:1em">FILM ID</label>
				<br />
				<input class="larger" type="checkbox" id="filmftfr2" name="filmftfr[]" value="RELEASE_YEAR" />
				<label  style="font-size:1em" for="filmftfr2">RELEASE YEAR</label>
				<br />
				<input class="larger" type="checkbox" id="filmftfr3" name="filmftfr[]" value= "LANGUAGE_ID" />
				<label  style="font-size:1em" for="filmftfr3">LANGUAGE ID</label>
				<br />
				<input class="larger" type="checkbox" id="filmftfr4" name="filmftfr[]" value= "ORIGINAL_LANGUAGE_ID" />
				<label  style="font-size:1em" for="filmftfr4">ORIGINAL LANGUAGE ID</label>
				<br />
				<input class="larger" type="checkbox" id="filmftfr5" name="filmftfr[]" value= "RATING" />
				<label  style="font-size:1em" for="filmftfr5">RATING</label>
				<br />
				<input class="larger" type="checkbox" id="filmftfr6" name="filmftfr[]" value= "SPECIAL_FEATURES" />
				<label  style="font-size:1em" for="filmftfr6">SPECIAL FEATURES</label>
				<br />
				<input class="larger" type="checkbox" id="filmftfr7" name="filmftfr[]" value= "CATEGORY_ID" />
				<label  style="font-size:1em" for="filmftfr7">TITLE</label>
				<br />	
				<input class="larger" type="checkbox" id="filmftfr8" name="filmftfr[]" value= "DESCRIPTION" />
				<label  style="font-size:1em" for="filmftfr8">DESCRIPTION</label>
				<br />
				<input class="larger" type="checkbox" id="filmftfr9" name="filmftfr[]" value= "RENTAL_DURATION" />
				<label  style="font-size:1em" for="filmftfr9">RENTAL DURATION</label>
				<br />
				<input class="larger" type="checkbox" id="filmftfr10" name="filmftfr[]" value= "RENTAL_RATE" />
				<label  style="font-size:1em" for="filmftfr10">RENTAL RATE</label>
				<br />
				<input class="larger" type="checkbox" id="filmftfr11" name="filmftfr[]" value="LENGTH" />
				<label  style="font-size:1em" for="filmftfr11">LENGTH</label>
				<br />
				<input class="larger" type="checkbox" id="filmftfr12" name="filmftfr[]" value="REPLACEMENT_COST" />
				<label  style="font-size:1em" for="filmftfr12">REPLACEMENT COST</label>
				<br />	
				<label  style="font-size:1em" for="sfilmftfcid">specific film ID:</label>
				<input   type="number" step="1" id="sfilmftfrid" name="sfilmftfrid" />
				<br />					
				<input type="submit"  value="Submit"/>
			</form>
		</div>
		
		<!-- dropdown for FILM|FILM_TEXT |FILM_CATEGORY table-->
		<h1 class="flip" style = "background-color:LightSkyBlue;">FILM|FILM TEXT|FILM CATEGORY <h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form  role="form"  action = "multselect00.php" method="post" id="filmftfc">
				<label  style="font-size:1em">FILM ID</label>
				<br />
				<input class="larger" type="checkbox" id="filmftfc2" name="filmftfc[]" value="RELEASE_YEAR" />
				<label  style="font-size:1em" for="filmftfc2">RELEASE YEAR</label>
				<br />
				<input class="larger" type="checkbox" id="filmftfc3" name="filmftfc[]" value= "LANGUAGE_ID" />
				<label  style="font-size:1em" for="filmftfc3">LANGUAGE ID</label>
				<br />
				<input class="larger" type="checkbox" id="filmftfc4" name="filmftfc[]" value= "ORIGINAL_LANGUAGE_ID" />
				<label  style="font-size:1em" for="filmftfc4">ORIGINAL LANGUAGE ID</label>
				<br />
				<input class="larger" type="checkbox" id="filmftfc5" name="filmftfc[]" value= "RATING" />
				<label  style="font-size:1em" for="filmftfc5">RATING</label>
				<br />
				<input class="larger" type="checkbox" id="filmftfc6" name="filmftfc[]" value= "SPECIAL_FEATURES" />
				<label  style="font-size:1em" for="filmftfc6">SPECIAL FEATURES</label>
				<br />
				<input class="larger" type="checkbox" id="filmftfc7" name="filmftfc[]" value= "TITLE" />
				<label  style="font-size:1em" for="filmftfc7">TITLE</label>
				<br />	
				<input class="larger" type="checkbox" id="filmftfc8" name="filmftfc[]" value= "DESCRIPTION" />
				<label  style="font-size:1em" for="filmftfc8">DESCRIPTION</label>
				<br />	
				<input class="larger" type="checkbox" id="filmftfc9" name="filmftfc[]" value= "CATEGORY_ID" />
				<label  style="font-size:1em" for="filmftfc9">CATEGORY_ID</label>
				<br />	
				<label  style="font-size:1em" for="sfilmftfcid">specific film ID:</label>
				<input   type="number" step="1" id="sfilmftfcid" name="sfilmftfcid" />
				<br />					
				<input type="submit"  value="Submit"/>
			</form>
		</div>
		
		<!-- dropdown for FILM|FILM_RENTAL|FILM_CATEGORY table-->
		<h1 class="flip" style = "background-color:LightSkyBlue;">FILM|FILM RENTAL|FILM CATEGORY <h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form  role="form"  action = "multselect00.php" method="post" id="filmfrfc">
				<label  style="font-size:1em">FILM ID</label>
				<br />
				<input class="larger" type="checkbox" id="filmfrfc2" name="filmfrfc[]" value="RELEASE_YEAR" />
				<label  style="font-size:1em" for="filmfrfc2">RELEASE YEAR</label>
				<br />
				<input class="larger" type="checkbox" id="filmfrfc3" name="filmfrfc[]" value= "LANGUAGE_ID" />
				<label  style="font-size:1em" for="filmfrfc3">LANGUAGE ID</label>
				<br />
				<input class="larger" type="checkbox" id="filmfrfc4" name="filmfrfc[]" value= "ORIGINAL_LANGUAGE_ID" />
				<label  style="font-size:1em" for="filmfrfc4">ORIGINAL LANGUAGE ID</label>
				<br />
				<input class="larger" type="checkbox" id="filmfrfc5" name="filmfrfc[]" value= "RATING" />
				<label  style="font-size:1em" for="filmfrfc5">RATING</label>
				<br />
				<input class="larger" type="checkbox" id="filmfrfc6" name="filmfrfc[]" value= "SPECIAL_FEATURES" />
				<label  style="font-size:1em" for="filmfrfc6">SPECIAL FEATURES</label>
				<br />
				<input class="larger" type="checkbox" id="filmfrfc7" name="filmfrfc[]" value= "RENTAL_DURATION" />
				<label  style="font-size:1em" for="filmfrfc7">RENTAL DURATION</label>
				<br />
				<input class="larger" type="checkbox" id="filmfrfc8" name="filmfrfc[]" value= "RENTAL_RATE" />
				<label  style="font-size:1em" for="filmfrfc8">RENTAL RATE</label>
				<br />
				<input class="larger" type="checkbox" id="filmfrfc9" name="filmfrfc[]" value="LENGTH" />
				<label  style="font-size:1em" for="filmfrfc9">LENGTH</label>
				<br />
				<input class="larger" type="checkbox" id="filmfrfc10" name="filmfrfc[]" value="REPLACEMENT_COST" />
				<label  style="font-size:1em" for="filmfrfc10">REPLACEMENT COST</label>
				<br />	
				<input class="larger" type="checkbox" id="filmfrfc11" name="filmfrfc[]" value="CATEGORY_ID" />
				<label  style="font-size:1em" for="filmfrfc11">CATEGORY ID</label>
				<br />
				<label  style="font-size:1em" for="sfilmid">specific film ID:</label>
				<input   type="number" step="1" id="sfilmfrfcid" name="sfilmfrfcid" />
				<br />					
				<input type="submit"  value="Submit"/>
			</form>
		</div>
	
	 	<!-- dropdown for STORE|STAFF table-->
		<h1 class="flip" style = "background-color:LightSkyBlue;">STORE|STAFF <h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form  role="form"  action = "multselect00.php" method="post" id="ss">
				<label  style="font-size:1em">STORE ID</label>
				<br />
				<input class="larger" type="checkbox" id="ss2" name="ss[]" value="MANAGER_STAFF_ID" />
				<label  style="font-size:1em" for="ss2">MANAGER STAFF ID</label>
				<br />
				<input class="larger" type="checkbox" id="ss3" name="ss[]" value= "ADDRESS_ID" />
				<label  style="font-size:1em" for="ss3">ADDRESS ID</label>
				<br />
				<input class="larger" type="checkbox" id="ss4" name="ss[]" value= "STAFF_ID" />
				<label  style="font-size:1em" for="ss4">STAFF ID</label>
				<br />
				<input class="larger" type="checkbox" id="ss5" name="ss[]" value= "FIRST_NAME" />
				<label  style="font-size:1em" for="ss5">FIRST NAME</label>
				<br />
				<input class="larger" type="checkbox" id="ss6" name="ss[]" value= "LAST_NAME" />
				<label  style="font-size:1em" for="ss6">LAST NAME</label>
				<br />
				<input class="larger" type="checkbox" id="ss7" name="ss[]" value= "PICTURE" />
				<label  style="font-size:1em" for="ss8">PICTURE</label>
				<br />
				<input class="larger" type="checkbox" id="ss8" name="ss[]" value="EMAIL" />
				<label  style="font-size:1em" for="ss9">EMAIL</label>
				<br />	
				<input class="larger" type="checkbox" id="ss9" name="ss[]" value="ACTIVE" />
				<label  style="font-size:1em" for="ss11">ACTIVE</label>
				<br />
				<input class="larger" type="checkbox" id="ss10" name="ss[]" value="USERNAME" />
				<label  style="font-size:1em" for="ss10">USERNAME</label>
				<br />
				<input class="larger" type="checkbox" id="ss11" name="ss[]" value="PASSWORD" />
				<label  style="font-size:1em" for="ss11">PASSWORD</label>
				<br />
				<label  style="font-size:1em" for="sssid">specific store ID:</label>
				<input   type="number" step="1" id="sssid" name="sssid" />
				<br />					
				<input type="submit"  value="Submit"/>
			</form>
		</div>
		
			<!-- dropdown for LANGUAGE|FILM table-->
		<h1 class="flip" style = "background-color:LightSkyBlue;">LANGUAGE|FILM <h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form  role="form"  action = "multselect00.php" method="post" id="langf">
				<label  style="font-size:1em">LANGUAGE ID</label>
				<br />
				<input class="larger" type="checkbox" id="langf2" name="langf[]" value= "NAME" />
				<label  style="font-size:1em" for="langf2">NAME</label>
				<br />
				<input class="larger" type="checkbox" id="langf3" name="langf[]" value= "FILM_ID" />
				<label  style="font-size:1em" for="langf3">FILM ID</label>
				<br />
				<input class="larger" type="checkbox" id="langf4" name="langf[]" value="RELEASE_YEAR" />
				<label  style="font-size:1em" for="langf4">RELEASE YEAR</label>
				<br />
				<input class="larger" type="checkbox" id="langf5" name="langf[]" value= "ORIGINAL_LANGUAGE_ID" />
				<label  style="font-size:1em" for="langf5">ORIGINAL LANGUAGE ID</label>
				<br />
				<input class="larger" type="checkbox" id="langf6" name="langf[]" value= "RATING" />
				<label  style="font-size:1em" for="langf6">RATING</label>
				<br />
				<input class="larger" type="checkbox" id="langf7" name="langf[]" value= "SPECIAL_FEATURES" />
				<label  style="font-size:1em" for="langf7">SPECIAL FEATURES</label>
				<br />
				<label  style="font-size:1em" for="slangfid">specific language ID:</label>
				<input   type="number" step="1" id="slangfid" name="slangfid" />
				<br />					
				<input type="submit"  value="Submit"/>
			</form>
		</div>

		
		<br />
	<!-- footer-->	
    	<footer>
				<table class="container-fluid" 
style="background-color:#260082;color:white;font-family:Times New 
Roman;font-weight:bold;width:100%">
					<tr>
						<th colspan="3" style="text-align:left;border-bottom:thin solid 
white;padding-top:1%;padding-left:1%"><span 
style="color:antiquewhite;font-size:1.2vw;">SAKILA </span>
							<span style="font-size:0.5em">&copy;</span>
						</th>
					</tr>

					<tr>
						<td  
style="width:20%;font-size:1.2vw;padding-bottom:1%;padding-top:1%;padding-left:1%">
							<span  class="footer" style="cursor:pointer">About</span></td>
						<td 
style="width:60%;font-size:1.2vw;padding-bottom:1%;padding-top:1%;padding-right:50%
">
							<span class="footer" style="cursor:pointer;">Contact us</span>
						</td>
						<td style="width:20%;font-size:1.2vw;padding-bottom:1%;padding-top:1%">
								<img src="twitter.png" alt="Twitter" style="cursor:pointer;" title="Twitter" 
height="30" width="30"/>
						</td>
								
					</tr>
							
					<tr>
						<td 
style="width:20%;font-size:1.2vw;padding-bottom:1%;padding-top:1%;padding-left:1%">
							<span class="footer" style="cursor:pointer;">Find our store</span></td>
						<td 
style="width:60%;font-size:1.2vw;padding-bottom:1%;padding-top:1%;padding-right:50%
">
							<span class="footer" style="cursor:pointer;">Feedbacks</span>
						</td>
						<td style="width:20%;font-size:1.2vw;padding-bottom:1%;padding-top:1%">
							<img src="instagram.png" style="cursor:pointer;" alt="Instagram" title="Instagram" 
height="30" width="30"/>
						</td>
					</tr>
							
					<tr>
						<td 
style="width:20%;font-size:1.2vw;padding-bottom:1%;padding-top:1%;padding-left:1%">
							<span class="footer" style="cursor:pointer;">FAQs</span>
						</td>
						<td 
style="width:60%;font-size:1.2vw;padding-bottom:1%;padding-top:1%;padding-right:50%
">
							<span class="footer" style="cursor:pointer;">Explore</span>
						</td>
						<td style="width:20%;font-size:1.2vw;padding-bottom:1%;padding-top:1%">
							<img src="facebook.png" style="cursor:pointer;" alt="Facebook" title="Facebook" 
height="30" width="30" />
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<span style="font-size:1vw;color:antiquewhite;padding-left:1%">&copy; 2019 
SAKILA. All Rights Reserved.</span>
						</td>
							
							
				</table>
			</footer>					
	</body>
</html>