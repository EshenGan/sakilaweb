<?php
	include_once('connect.php');
?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<title> SAKILA | SELECT PAGE</title>
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
    height:2vw;
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
	    <h2><b> To insert data into table(s)  :</b>
	    <button><a style="text-decoration:none;color:black" href="insert.php" >Click Here</a></button></h2>
	    <h2><b> To view data from multiple table(s)  :</b>
	    <button><a style="text-decoration:none;color:black" href="multselect.php" >Click Here</a></button></h2>
		<h2><b> View data from single table(s) :</b></h2>
		<h4><i> * Click to expand or close *</i><h4>
	</div>	
		<h1 class="flip" style = "background-color:LightSkyBlue;">ACTOR<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form  role="form" action="select00.php" method="post" id="actor">
				<input class="larger" type="checkbox" id="aid" name="actor[]" value="ACTOR_ID" />
				<label  style="font-size:2vw" for="aid">ACTOR ID</label>
				<br />
				<input class="larger" type="checkbox" id="fname" name="actor[]" value="FIRST_NAME" />
				<label  style="font-size:2vw" for="fname">FIRST NAME</label>
				<br />
				<input class="larger" type="checkbox" id="lname" name="actor[]" value= "LAST_NAME" />
				<label  style="font-size:2vw" for="lname">LAST NAME</label>
				<br />
				<input class="larger" type="checkbox" id="lupd1" name="actor[]" value= "LAST_UPDATE" />
				<label  style="font-size:2vw" for="lupd1">LAST UPDATE</label>
				<br />
				<label  style="font-size:2vw" for="specid">specific ID:</label>
				<input  type="number" step="1" id="specid" name="specID" />
				<br />
				<input type="submit"  value="Submit"/>
			</form>
		</div>
		
    <!-- dropdown for ADDRESS table -->
		<h1 class="flip" style = "background-color:LightSkyBlue;">ADDRESS<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form  role="form"  action = "select00.php" method="post" id="address">
				<input class="larger" type="checkbox" id="adid" name="address[]" value="ADDRESS_ID" />
				<label  style="font-size:2vw" for="adid">ADDRESS ID</label>
				<br />
				<input class="larger" type="checkbox" id="ad1" name="address[]" value="ADDRESS" />
				<label  style="font-size:2vw" for="ad1">ADDRESS</label>
				<br />
				<input class="larger" type="checkbox" id="ad2" name="address[]" value="ADDRESS2" />
				<label  style="font-size:2vw" for="ad2">ADDRESS2</label>
				<br />
				<input class="larger" type="checkbox" id="district" name="address[]" value= "DISTRICT" />
				<label  style="font-size:2vw" for="district">DISTRICT</label>
				<br />
				<input class="larger" type="checkbox" id="cityid" name="address[]" value= "CITY_ID" />
				<label  style="font-size:2vw" for="cityid">CITY ID</label>
				<br />
				<input class="larger" type="checkbox" id="postc" name="address[]" value= "POSTAL_CODE" />
				<label  style="font-size:2vw" for="postc">POSTAL CODE</label>
				<br />
				<input class="larger" type="checkbox" id="phone" name="address[]" value= "PHONE" />
				<label  style="font-size:2vw" for="phone">PHONE</label>
				<br />
				<input class="larger" type="checkbox" id="lupd2" name="address[]" value= "LAST_UPDATE" />
				<label  style="font-size:2vw" for="lupd2">LAST UPDATE</label>
				<br />
				<label  style="font-size:2vw" for="specaddid">specific address ID:</label>
				<input  type="number" step="1" id="specaddid" name="specaddID" />
				<br />
				<input type="submit"  value="Submit"/>
			</form>
		</div>
		
    <!-- dropdown for CATEGORY table -->
		<h1 class="flip" style = "background-color:LightSkyBlue;">CATEGORY<h1>
		<div class="panel" style = "background-color:LightCyan;">
			<form role="form" action="select00.php" method="post" id="category">
				<input class="larger" type="checkbox" id="catid" name="category[]" value="CATEGORY_ID" />
				<label  style="font-size:2vw" for="catid">CATEGORY ID</label>
				<br />
				<input class="larger" type="checkbox" id="nam3" name="category[]" value="NAME" />
				<label  style="font-size:2vw" for="nam3">NAME</label>
				<br />
				<input class="larger" type="checkbox" id="lupd3" name="category[]" value= "LAST_UPDATE" />
				<label  style="font-size:2vw" for="lupd3">LAST UPDATE</label>
				<br />
				<label  style="font-size:2vw" for="speccatid">specific category ID:</label>
				<input  type="number" step="1" id="speccatid" name="speccatID" />
				<br />
				<input type="submit"  value="Submit"/>
			</form>
		</div>
		
	 <!-- dropdown for CITY table -->
		<h1 class="flip" style = "background-color:LightSkyBlue;">CITY<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form role="form" action="select00.php" method="post" id="city">
				<input class="larger" type="checkbox" id="cid" name="city[]" value="CITY_ID" />
				<label  style="font-size:2vw" for="cid">CITY ID</label>
				<br />
				<input class="larger" type="checkbox" id="cit" name="city[]" value="CITY" />
				<label  style="font-size:2vw" for="cit">CITY</label>
				<br />
				<input class="larger" type="checkbox" id="countryid" name="city[]" value= "COUNTRY_ID" />
				<label  style="font-size:2vw" for="countryid">COUNTRY ID</label>
				<br />
				<input class="larger" type="checkbox" id="lupd4" name="city[]" value= "LAST_UPDATE" />
				<label  style="font-size:2vw" for="lupd4">LAST UPDATE</label>
				<br />
				<label  style="font-size:2vw" for="speccityid">specific city ID:</label>
				<input  type="number" step="1" id="speccityid" name="speccityID" />
				<br />
				<input type="submit"  value="Submit"/>
			</form>
		</div>
	
	 <!-- dropdown for COUNTRY table-->	
		<h1 class="flip" style = "background-color:LightSkyBlue;">COUNTRY<h1>
		<div class="panel" style = "background-color:LightCyan;">
             <form role="form" action="select00.php" method="post" id="country">
				<input class="larger" type="checkbox" id="countryyid" name="country[]" value="COUNTRY_ID" />
				<label  style="font-size:2vw" for="countryyid">COUNTRY ID</label>
				<br />
				<input class="larger" type="checkbox" id="country" name="country[]" value="COUNTRY" />
				<label  style="font-size:2vw" for="country">COUNTRY</label>
				<br />
				<input class="larger" type="checkbox" id="lupd5" name="country[]" value= "LAST_UPDATE" />
				<label  style="font-size:2vw" for="lupd5">LAST UPDATE</label>
				<br />
				<label  style="font-size:2vw" for="speccountryid">specific country ID:</label>
				<input  type="number" step="1" id="speccountryid" name="speccountryID" />
				<br />
				<input type="submit"  value="Submit"/>
			</form>
		</div>
	
	 <!-- dropdown for CUSTOMER table-->	
		<h1 class="flip" style = "background-color:LightSkyBlue;">CUSTOMER<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form role="form" action = "select00.php" method="post" id="customer">
				<input class="larger" type="checkbox" id="custid" name="customer[]" value="CUSTOMER_ID" />
				<label  style="font-size:2vw" for="custid">CUSTOMER ID</label>
				<br />
				<input class="larger" type="checkbox" id="storeid" name="customer[]" value="STORE_ID" />
				<label  style="font-size:2vw" for="storeid">STORE ID</label>
				<br />
				<input class="larger" type="checkbox" id="name1" name="customer[]" value="FIRST_NAME" />
				<label  style="font-size:2vw" for="name1">FIRST NAME</label>
				<br />
				<input class="larger" type="checkbox" id="namel" name="customer[]" value= "LAST_NAME" />
				<label  style="font-size:2vw" for="namel">LAST NAME</label>
				<br />
				<input class="larger" type="checkbox" id="email" name="customer[]" value= "EMAIL" />
				<label  style="font-size:2vw" for="email">EMAIL</label>
				<br />
				<input class="larger" type="checkbox" id="addressid" name="customer[]" value= "ADDRESS_ID" />
				<label  style="font-size:2vw" for="addressid">ADDRESS ID</label>
				<br />
				<input class="larger" type="checkbox" id="act" name="customer[]" value= "ACTIVE" />
				<label  style="font-size:2vw" for="act">ACTIVE</label>
				<br />
				<input class="larger" type="checkbox" id="cr8d" name="customer[]" value= "CREATE_DATE" />
				<label  style="font-size:2vw" for="cr8d">CREATE DATE</label>
				<br />
				<input class="larger" type="checkbox" id="lupd6" name="customer[]" value= "LAST_UPDATE" />
				<label  style="font-size:2vw" for="lupd6">LAST UPDATE</label>
				<br />
				<label  style="font-size:2vw" for="speccustid">specific customer ID:</label>
				<input  type="number" step="1" id="speccustid" name="speccustID" />
				<br />
				<input type="submit"  value="Submit"/>
			</form>
		</div>
	
	 <!-- dropdown for FILM table-->
		<h1 class="flip" style = "background-color:LightSkyBlue;">FILM<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form role="form" action = "select00.php" method="post" id="film">
				<input class="larger" type="checkbox" id="fid" name="film[]" value="FILM_ID" />
				<label  style="font-size:2vw" for="fid">FILM ID</label>
				<br />
				<input class="larger" type="checkbox" id="ry" name="film[]" value="RELEASE_YEAR" />
				<label  style="font-size:2vw" for="ry">RELEASE YEAR</label>
				<br />
				<input class="larger" type="checkbox" id="lid" name="film[]" value="LANGUAGE_ID" />
				<label  style="font-size:2vw" for="lid">LANGUAGE ID</label>
				<br />
				<input class="larger" type="checkbox" id="olid" name="film[]" value= "ORIGINAL_LANGUAGE_ID" />
				<label  style="font-size:2vw" for="olid">ORIGINAL LANGUAGE ID</label>
				<br />
				<input class="larger" type="checkbox" id="rat" name="film[]" value= "RATING" />
				<label  style="font-size:2vw" for="rat">RATING</label>
				<br />
				<input class="larger" type="checkbox" id="feat" name="film[]" value= "SPECIAL_FEATURES" />
				<label  style="font-size:2vw" for="feat">SPECIAL FEATURES</label>
				<br />
				<input class="larger" type="checkbox" id="lupd7" name="film[]" value= "LAST_UPDATE" />
				<label  style="font-size:2vw" for="lupd7">LAST UPDATE</label>
				<br />
				<label  style="font-size:2vw" for="specfilmid">specific film ID:</label>
				<input  type="number" step="1" id="specfilmid" name="specfilmID" />
				<br />
				<input type="submit"  value="Submit"/>
			</form>
		</div>
	
	 <!-- dropdown for FILM_ACTOR table-->	
		<h1 class="flip" style = "background-color:LightSkyBlue;">FILM ACTOR<h1>
		<div  class="panel" style = "background-color:LightCyan;">
            <form role="form" action = "select00.php" method="post" id="filmactor">
				<input class="larger" type="checkbox" id="idact" name="filmactor[]" value="ACTOR_ID" />
				<label  style="font-size:2vw" for="idact">ACTOR ID</label>
				<br />
				<input class="larger" type="checkbox" id="idfilm" name="filmactor[]" value="FILM_ID" />
				<label  style="font-size:2vw" for="idfilm">FILM ID</label>
				<br />
				<input class="larger" type="checkbox" id="lupd8" name="filmactor[]" value= "LAST_UPDATE" />
				<label  style="font-size:2vw" for="lupd8">LAST UPDATE</label>
				<br />
				<label  style="font-size:2vw" for="specactid">specific ACTOR ID:</label>
				<input  type="number" step="1" id="specactid" name="specactID" />
				<br />
				<label  style="font-size:2vw" for="specfilmid">specific FILM ID:</label>
				<input  type="number" step="1" id="specfilmid" name="specfilmID" />
				<br />
				<input type="submit"  value="Submit"/>
			</form>
		</div>
	
	 <!-- dropdown for FILM_CATEGORY table-->	
		<h1 class="flip" style = "background-color:LightSkyBlue;">FILM CATEGORY<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form role="form" action = "select00.php" method="post" id="filmcategory">
				<input class="larger" type="checkbox" id="film1id" name="filmcategory[]" value="FILM_ID" />
				<label  style="font-size:2vw" for="film1id">FILM ID</label>
				<br />
				<input class="larger" type="checkbox" id="category1id" name="filmcategory[]" value="CATEGORY_ID" />
				<label  style="font-size:2vw" for="category1id">CATEGORY ID</label>
				<br />
				<input class="larger" type="checkbox" id="lupd9" name="filmcategory[]" value= "LAST_UPDATE" />
				<label  style="font-size:2vw" for="lupd9">LAST UPDATE</label>
				<br />
				<label  style="font-size:2vw" for="specfid">specific film ID:</label>
				<input  type="number" step="1" id="specfid" name="specfID" />
				<br />
				<label  style="font-size:2vw" for="specidcat">specific category ID:</label>
				<input  type="number" step="1" id="specidcat" name="specIDcat" />
				<br />
				<input type="submit"  value="Submit"/>
			</form>
		</div>
	
	 <!-- dropdown for FILM_RENTAL table-->	
		<h1 class="flip" style = "background-color:LightSkyBlue;">FILM RENTAL<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form role="form" action = "select00.php" method="post" id="filmrental">
				<input class="larger" type="checkbox" id="ffid" name="filmrental[]" value="FILM_ID" />
				<label  style="font-size:2vw" for="ffid">FILM ID</label>
				<br />
				<input class="larger" type="checkbox" id="rd" name="filmrental[]" value="RENTAL_DURATION" />
				<label  style="font-size:2vw" for="rd">RENTAL DURATION</label>
				<br />
				<input class="larger" type="checkbox" id="rr" name="filmrental[]" value= "RENTAL_RATE" />
				<label  style="font-size:2vw" for="rr">RENTAL RATE</label>
				<br />
				<input class="larger" type="checkbox" id="length" name="filmrental[]" value="LENGTH" />
				<label  style="font-size:2vw" for="length">LENGTH</label>
				<br />
				<input class="larger" type="checkbox" id="rc" name="filmrental[]" value="REPLACEMENT_COST" />
				<label  style="font-size:2vw" for="rc">REPLACEMENT COST</label>
				<br />
				<label  style="font-size:2vw" for="specidff">specific film ID:</label>
				<input  type="number" step="1" id="specidff" name="specIDf" />
				<br />
				<input type="submit"  value="Submit"/>
			</form>
		</div>
	
	 <!-- dropdown for FILM_TEXT table-->	
		<h1 class="flip" style = "background-color:LightSkyBlue;">FILM TEXT<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form role="form" action = "select00.php" method="post" id="filmtext">
				<input class="larger" type="checkbox" id="filmtid" name="filmt[]" value="FILM_ID" />
				<label  style="font-size:2vw" for="filmtid">FILM ID</label>
				<br />
				<input class="larger" type="checkbox" id="title" name="filmt[]" value="TITLE" />
				<label  style="font-size:2vw" for="title">TITLE</label>
				<br />
				<input class="larger" type="checkbox" id="des" name="filmt[]" value= "DESCRIPTION" />
				<label  style="font-size:2vw" for="des">DESCRIPTION</label>
				<br />
				<label  style="font-size:2vw" for="specftid">specific film ID:</label>
				<input  type="number" step="1" id="specftid" name="specIDft" />
				<br />
				<input type="submit"  value="Submit"/>
			</form>
		</div>
	
	 <!-- dropdown for INVENTORY table-->	
		<h1 class="flip" style = "background-color:LightSkyBlue;">INVENTORY<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form role="form" action = "select00.php" method="post" id="inventory">
				<input class="larger" type="checkbox" id="intid" name="int[]" value="INVENTORY_ID" />
				<label  style="font-size:2vw" for="intid">INVENTORY ID</label>
				<br />
				<input class="larger" type="checkbox" id="id4f" name="int[]" value="FILM_ID" />
				<label  style="font-size:2vw" for="id4f">FILM ID</label>
				<br />
				<input class="larger" type="checkbox" id="id4s" name="int[]" value="STORE_ID" />
				<label  style="font-size:2vw" for="id4s">STORE ID</label>
				<br />
				<input class="larger" type="checkbox" id="lupd10" name="int[]" value= "LAST_UPDATE" />
				<label  style="font-size:2vw" for="lupd10">LAST UPDATE</label>
				<br />
				<label  style="font-size:2vw" for="specintid">specific inventory ID:</label>
				<input  type="number" step="1" id="specintid" name="speciID" />
				<br />
				<input type="submit"  value="Submit"/>
			</form>
		</div>
	
	 <!-- dropdown for LANGUAGE table-->	
		<h1 class="flip" style = "background-color:LightSkyBlue;">LANGUAGE<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form role="form" action = "select00.php" method="post" id="language">
				<input class="larger" type="checkbox" id="langid" name="lang[]" value="LANGUAGE_ID" />
				<label  style="font-size:2vw" for="langid">LANGUAGE ID</label>
				<br />
				<input class="larger" type="checkbox" id="nama" name="lang[]" value="NAME" />
				<label  style="font-size:2vw" for="nama">NAME</label>
				<br />
				<input class="larger" type="checkbox" id="lupd11" name="lang[]" value= "LAST_UPDATE" />
				<label  style="font-size:2vw" for="lupd11">LAST UPDATE</label>
				<br />
				<label  style="font-size:2vw" for="speclangid">specific language ID:</label>
				<input  type="number" step="1" id="speclangid" name="speclID" />
				<br />
				<input type="submit"  value="Submit"/>
			</form>
		</div>
	
	 <!-- dropdown for PAYMENT table-->	
		<h1 class="flip" style = "background-color:LightSkyBlue;">PAYMENT<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form role="form" action = "select00.php" method="post" id="payment">
				<input class="larger" type="checkbox" id="payid" name="pay[]" value="PAYMENT_ID" />
				<label  style="font-size:2vw" for="payid">PAYMENT ID</label>
				<br />
				<input class="larger" type="checkbox" id="cuid" name="pay[]" value="CUSTOMER_ID" />
				<label  style="font-size:2vw" for="cuid">CUSTOMER ID</label>
				<br />
				<input class="larger" type="checkbox" id="staid" name="pay[]" value= "STAFF_ID" />
				<label  style="font-size:2vw" for="staid">STAFF ID</label>
				<br />
				<input class="larger" type="checkbox" id="idrental" name="pay[]" value="RENTAL_ID" />
				<label  style="font-size:2vw" for="idrental">RENTAL ID</label>
				<br />
				<input class="larger" type="checkbox" id="amount" name="pay[]" value="AMOUNT" />
				<label  style="font-size:2vw" for="amount">AMOUNT</label>
				<br />
				<input class="larger" type="checkbox" id="pyd" name="pay[]" value= "PAYMENT_DATE" />
				<label  style="font-size:2vw" for="pyd">PAYMENT DATE</label>
				<br />
				<input class="larger" type="checkbox" id="lupd12" name="pay[]" value= "LAST_UPDATE" />
				<label  style="font-size:2vw" for="lupd12">LAST UPDATE</label>
				<br />
				<label  style="font-size:2vw" for="specpyid">specific payment ID:</label>
				<input  type="number" step="1" id="specpyid" name="specpID" />
				<br />
				<input type="submit"  value="Submit"/>
			</form>
		</div>
	
	 <!-- dropdown for RENTAL table-->	
		<h1 class="flip" style = "background-color:LightSkyBlue;">RENTAL<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form role="form" action = "select00.php" method="post" id="rental">
				<input class="larger" type="checkbox" id="rentalid" name="rental[]" value="RENTAL_ID" />
				<label  style="font-size:2vw" for="rentalid">RENTAL ID</label>
				<br />
				<input class="larger" type="checkbox" id="rentaldate" name="rental[]" value="RENTAL_DATE" />
				<label  style="font-size:2vw" for="rentaldate">RENTAL DATE</label>
				<br />
				<input class="larger" type="checkbox" id="invid" name="rental[]" value= "INVENTORY_ID" />
				<label  style="font-size:2vw" for="invid">INVENTORY ID</label>
				<br />
				<input class="larger" type="checkbox" id="idcust" name="rental[]" value="CUSTOMER_ID" />
				<label  style="font-size:2vw" for="idcust">CUSTOMER ID</label>
				<br />
				<input class="larger" type="checkbox" id="returnd" name="rental[]" value="RETURN_DATE" />
				<label  style="font-size:2vw" for="returnd">RETURN DATE</label>
				<br />
				<input class="larger" type="checkbox" id="idstafff" name="rental[]" value= "STAFF_ID" />
				<label  style="font-size:2vw" for="idstafff">STAFF ID</label>
				<br />
				<input class="larger" type="checkbox" id="lupd13" name="rental[]" value= "LAST_UPDATE" />
				<label  style="font-size:2vw" for="lupd13">LAST UPDATE</label>
				<br />
				<label  style="font-size:2vw" for="specrid">specific rental ID:</label>
				<input  type="number" step="1" id="specrid" name="specrID" />
				<br />
				<input type="submit"  value="Submit"/>
			</form>
		</div>
	
	 <!-- dropdown for STAFF table-->	
		<h1 class="flip" style = "background-color:LightSkyBlue;">STAFF<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form  role="form" action="select00.php" method="post" id="staff">
				<input class="larger" type="checkbox" id="stafffid" name="staff[]" value="STAFF_ID" />
				<label  style="font-size:2vw" for="stafffid">STAFF ID</label>
				<br />
				<input class="larger" type="checkbox" id="namefirst" name="staff[]" value="FIRST_NAME" />
				<label  style="font-size:2vw" for="namefirst">FIRST NAME</label>
				<br />
				<input class="larger" type="checkbox" id="namelast" name="staff[]" value="LAST_NAME" />
				<label  style="font-size:2vw" for="namelast">LAST NAME</label>
				<br />
				<input class="larger" type="checkbox" id="addrid" name="staff[]" value= "ADDRESS_ID" />
				<label  style="font-size:2vw" for="addrid">ADDRESS ID</label>
				<br />
				<input class="larger" type="checkbox" id="pic" name="staff[]" value= "PICTURE" />
				<label  style="font-size:2vw" for="pic">PICTURE</label>
				<br />
				<input class="larger" type="checkbox" id="em" name="staff[]" value= "EMAIL" />
				<label  style="font-size:2vw" for="em">EMAIL</label>
				<br />
				<input class="larger" type="checkbox" id="idst" name="staff[]" value= "STORE_ID" />
				<label  style="font-size:2vw" for="idst">STORE ID</label>
				<br />
				<input class="larger" type="checkbox" id="active1" name="staff[]" value= "ACTIVE" />
				<label  style="font-size:2vw" for="active1">ACTIVE</label>
				<br />
				<input class="larger" type="checkbox" id="username" name="staff[]" value= "USERNAME" />
				<label  style="font-size:2vw" for="username">USERNAME</label>
				<br />	
				<input class="larger" type="checkbox" id="password" name="staff[]" value= "PASSWORD" />
				<label  style="font-size:2vw" for="password">PASSWORD</label>
				<br />				
				<input class="larger" type="checkbox" id="lupd14" name="staff[]" value= "LAST_UPDATE" />
				<label  style="font-size:2vw" for="lupd14">LAST UPDATE</label>
				<br />
				<label  style="font-size:2vw" for="specsid">specific staff ID:</label>
				<input  type="number" step="1" id="specsid" name="specsID" />
				<br />
				<input type="submit"  value="Submit"/>
			</form>
		</div>
	
	 <!-- dropdown for STORE table-->	
		<h1 class="flip" style = "background-color:LightSkyBlue">STORE<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form role="form" action="select00.php" method="post" id="store">
				<input class="larger" type="checkbox" id="idstore" name="store[]" value= "STORE_ID" />
				<label  style="font-size:2vw" for="idstore">STORE ID</label>
				<br />
				<input class="larger" type="checkbox" id="msid" name="store[]" value= "MANAGER_STAFF_ID" />
				<label  style="font-size:2vw" for="msid">MANAGER STAFF ID</label>
				<br />	
				<input class="larger" type="checkbox" id="adddid" name="store[]" value= "ADDRESS_ID" />
				<label  style="font-size:2vw" for="adddid">ADDRESS ID</label>
				<br />				
				<input class="larger" type="checkbox" id="lupd15" name="store[]" value= "LAST_UPDATE" />
				<label  style="font-size:2vw" for="lupd15">LAST UPDATE</label>
				<br />
				<label  style="font-size:2vw" for="specstoreid">specific store ID:</label>
				<input  type="number" step="1" id="specstoreid" name="specstoreID" />
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