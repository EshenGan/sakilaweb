<?php
	include_once('connect.php');
?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<title> SAKILA | INSERT PAGE</title>
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
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	</head>
	
	

	
	<style> 

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
				
    <!--NOTICE BOARD-->
	<div style = " text-align: justify, text-justify: inter-word">
	    <h2><b> To view data from single table(s)  :</b>
	    <button><a style="text-decoration:none;color:black" href="select.php" >Click Here</a></button></h2>
	    <h2><b> To view data from multiple table(s)  :</b>
	    <button><a style="text-decoration:none;color:black" href="multselect.php" >Click Here</a></button></h2>
		<h2><b> Select table(s) to insert data :</b></h2>
		<h4><i> * Click to expand or close *</i><h4>
	</div>
		<!--dropdown-->
		<h1 class="flip" style = "background-color:LightSkyBlue;">ACTOR<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form action="insert.php" method="post" id="form1">
				<label for="fname">ACTOR ID:</label><br>
				<input type="text" id="actid" name="actid">
				<br>
				<label for="lname">FIRST_NAME:</label><br>
				<input type="text" id="fname" name="fname">
				<br>
				<label for="lname">LAST_NAME:</label><br>
				<input type="text" id="lname" name="lname">
				<br>
				<label for="lname">LAST_UPDATE:</label><br>
				<input type="text" id="lupd" name="lupd">
			</form>
			<button type="submit" form="form1" value="Submit" name="submit_1">INSERT</button>
		</div>

		<h1 class="flip" style = "background-color:LightSkyBlue;">ADDRESS<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form action = "insert.php" method="post" id="form2">
				<label style="font-size:2vw"  for="fname">ADDRESS_ID:</label><br>
				<input type="text" id="addid" name="addid">
				<br>
				<label style="font-size:2vw"  for="lname">ADDRESS:</label><br>
				<input type="text" id="add" name="add">
				<br>
				<label style="font-size:2vw"  for="lname">ADDRESS2:</label><br>
				<input type="text" id="add2" name="add2">
				<br>
				<label style="font-size:2vw"  for="lname">DISTRICT:</label><br>
				<input type="text" id="dis" name="dis">
				<br>
				<label style="font-size:2vw"  for="lname">CITY_ID:</label><br>
				<input type="text" id="citid" name="citid">
				<br>
				<label style="font-size:2vw"  for="lname">POSTAL_CODE:</label><br>
				<input type="text" id="pc" name="pc">
				<br>
				<label style="font-size:2vw"  for="lname">PHONE:</label><br>
				<input type="text" id="phone" name="phone">
				<br>
				<label style="font-size:2vw"  for="lname">LAST_UPDATE:</label><br>
				<input type="text" id="lupd2" name="lupd2">
			</form>
			<button type="submit" form="form2" value="Submit" name="submit_2">INSERT</button>
		</div>
		
		<h1 class="flip" style = "background-color:LightSkyBlue;">CATEGORY<h1>
		<div class="panel" style = "background-color:LightCyan;">
			<form action="insert.php" method="post" id="form3">
				<label style="font-size:2vw"  for="lname">CATEGORY_ID:</label><br>
				<input type="text" id="catid" name="catid">
				<br>
				<label style="font-size:2vw"  for="lname">NAME:</label><br>
				<input type="text" id="name1" name="name1"> 
				<br>
				<label style="font-size:2vw"  for="lname">LAST_UPDATE:</label><br>
				<input type="text" id="lupd3" name="lupd3">
			</form>
			<button type="submit" form="form3" value="Submit" name="submit_3">INSERT</button>
		</div>
		
		<h1 class="flip" style = "background-color:LightSkyBlue;">CITY<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form action="insert.php" method="post" id="form4">
				<label style="font-size:2vw"  for="lname">CITY_ID:</label><br>
				<input type="text" id="cityid" name="cityid">
				<br>
				<label style="font-size:2vw"  for="lname">CITY:</label><br>
				<input type="text" id="city" name="city"> 
				<br>
				<label style="font-size:2vw"  for="lname">COUNTRY_ID:</label><br>
				<input type="text" id="countid" name="countid"> 
				<br>
				<label style="font-size:2vw"  for="lname">LAST_UPDATE:</label><br>
				<input type="text" id="lupd4" name="lupd4">
			</form>
			<button type="submit" form="form4" value="Submit" name="submit_4">INSERT</button>
		</div>
		
		<h1 class="flip" style = "background-color:LightSkyBlue;">COUNTRY<h1>
		<div class="panel" style = "background-color:LightCyan;">
             <form action="insert.php" method="post" id="form5">
				<label style="font-size:2vw"  for="lname">COUNTRY_ID:</label><br>
				<input type="text" id="countryid" name="countryid">
				<br>
				<label style="font-size:2vw"  for="lname">COUNTRY:</label><br>
				<input type="text" id="country" name="country">  
				<br>
				<label style="font-size:2vw"  for="lname">LAST_UPDATE:</label><br>
				<input type="text" id="lupd5" name="lupd5">
			</form>
			<button type="submit" form="form5" value="Submit" name="submit_5">INSERT</button>
		</div>
		
		<h1 class="flip" style = "background-color:LightSkyBlue;">CUSTOMER<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form action = "insert.php" method="post" id="form6">
				<label style="font-size:2vw"  for="fname">CUSTOMER_ID:</label><br>
				<input type="text" id="custid" name="custid">
				<br>
				<label style="font-size:2vw"  for="lname">STORE_ID:</label><br>
				<input type="text" id="storeid" name="storeid">
				<br>
				<label style="font-size:2vw"  for="lname">FIRST_NAME:</label><br>
				<input type="text" id="fname2" name="fname2">
				<br>
				<label style="font-size:2vw"  for="lname">LAST_NAME:</label><br>
				<input type="text" id="lname2" name="lname2">
				<br>
				<label style="font-size:2vw"  for="lname">EMAIL:</label><br>
				<input type="text" id="email" name="email">
				<br>
				<label style="font-size:2vw"  for="lname">ADDRESS_ID:</label><br>
				<input type="text" id="addressid" name="addressid">
				<br>
				<label style="font-size:2vw"  for="lname">ACTIVE:</label><br>
				<input type="text" id="act" name="act">
				<br>
				<label style="font-size:2vw"  for="lname">CREATE_DATE:</label><br>
				<input type="text" id="cdate" name="cdate">
				<br>
				<label style="font-size:2vw"  for="lname">LAST_UPDATE:</label><br>
				<input type="text" id="lupd6" name="lupd6">
			</form>
			<button type="submit" form="form6" value="Submit" name="submit_6">INSERT</button>
		</div>
		
		<h1 class="flip" style = "background-color:LightSkyBlue;">FILM<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form action = "insert.php" method="post" id="form7">
				<label style="font-size:2vw"  for="fname">FILM_ID:</label><br>
				<input type="text" id="filmid" name="filmid">
				<br>
				<label style="font-size:2vw"  for="lname">RELEASE_YEAR:</label><br>
				<input type="text" id="ryear" name="ryear">
				<br>
				<label style="font-size:2vw"  for="lname">LANGUAGE_ID:</label><br>
				<input type="text" id="langid" name="langid">
				<br>
				<label style="font-size:2vw"  for="lname">ORIGINAL_LANGUAGE_ID:</label><br>
				<input type="text" id="orilangid" name="orilangid">
				<br>
				<label style="font-size:2vw"  for="lname">RATING:</label><br>
				<input type="text" id="rating" name="rating">
				<br>
				<label style="font-size:2vw"  for="lname">SPECIAL_FEATURES:</label><br>
				<input type="text" id="spef" name="spef">
				<br>
				<label style="font-size:2vw"  for="lname">LAST_UPDATE:</label><br>
				<input type="text" id="lupd7" name="lupd7">
			</form>
			<button type="submit" form="form7" value="Submit" name="submit_7">INSERT</button>
		</div>
		
		<h1 class="flip" style = "background-color:LightSkyBlue;">FILM RENTAL<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form action = "insert.php" method="get" id="form8">
				<label style="font-size:2vw"  for="fname">FILM_ID:</label><br>
				<input type="text" id="filmid2" name="filmid2">
				<br>
				<label style="font-size:2vw"  for="lname">RENTAL_DURATION:</label><br>
				<input type="text" id="rdura" name="rdura">
				<br>
				<label style="font-size:2vw"  for="lname">RENTAL_RATE:</label><br>
				<input type="text" id="rentr" name="rentr">
				<br>
				<label style="font-size:2vw"  for="lname">LENGTH:</label><br>
				<input type="text" id="length" name="length">
				<br>
				<label style="font-size:2vw"  for="lname">REPLACEMENT_COST:</label><br>
				<input type="text" id="rcost" name="rcost">
			</form>
			<button type="submit" form="form8" value="Submit" name="submit_8">INSERT</button>
		</div>
		
		<h1 class="flip" style = "background-color:LightSkyBlue;">FILM ACTOR<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form action = "insert.php" method="post" id="form9">
				<label style="font-size:2vw"  for="fname">ACTOR_ID:</label><br>
				<input type="text" id="actorid2" name="actorid2">
				<br>
				<label style="font-size:2vw"  for="lname">FILM_ID:</label><br>
				<input type="text" id="fid" name="fid">
				<br>
				<label style="font-size:2vw"  for="lname">LAST_UPDATE:</label><br>
				<input type="text" id="lupd9" name="lupd9">
			</form>
			<button type="submit" form="form9" value="Submit" name="submit_9">INSERT</button>
		</div>
		
		<h1 class="flip" style = "background-color:LightSkyBlue;">FILM CATEGORY<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form action = "insert.php" method="post" id="form10">
				<label style="font-size:2vw"  for="fname">FILM_ID:</label><br>
				<input type="text" id="fid2" name="fid2">
				<br>
				<label style="font-size:2vw"  for="lname">CATEGORY_ID:</label><br>
				<input type="text" id="cid2" name="cid2">
				<br>
				<label style="font-size:2vw"  for="lname">LAST_UPDATE:</label><br>
				<input type="text" id="lupd10" name="lupd10">
			</form>
			<button type="submit" form="form10" value="Submit" name="submit_10">INSERT</button>
		</div>
		
		<h1 class="flip" style = "background-color:LightSkyBlue;">FILM TEXT<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form action = "insert.php" method="post" id="form11">
				<label style="font-size:2vw"  for="fname">FILM_ID:</label><br>
				<input type="text" id="fid3" name="fid3">
				<br>
				<label style="font-size:2vw"  for="lname">TITLE:</label><br>
				<input type="text" id="title" name="title">
				<br>
				<label style="font-size:2vw"  for="lname">DESCRIPTION:</label><br>
				<input type="text" id="desc" name="desc">
			</form>
			<button type="submit" form="form11" value="Submit" name="submit_11">INSERT</button>
		</div>
		
		<h1 class="flip" style = "background-color:LightSkyBlue;">INVENTORY<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form action = "insert.php" method="post" id="form12">
				<label style="font-size:2vw"  for="fname">INVENTORY_ID:</label><br>
				<input type="text" id="invid" name="invid">
				<br>
				<label style="font-size:2vw"  for="lname">FILM_ID:</label><br>
				<input type="text" id="fid4" name="fid4">
				<br>
				<label style="font-size:2vw"  for="lname">STORE_ID:</label><br>
				<input type="text" id="strid" name="strid">
				<br>
				<label style="font-size:2vw"  for="lname">LAST_UPDATE:</label><br>
				<input type="text" id="lupd12" name="lupd12">
			</form>
			<button type="submit" form="form12" value="Submit" name="submit_12">INSERT</button>
		</div>
		
		<h1 class="flip" style = "background-color:LightSkyBlue;">LANGUAGE<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form action = "insert.php" method="post" id="form13">
				<label style="font-size:2vw"  for="fname">LANGUAGE_ID:</label><br>
				<input type="text" id="languageid" name="languageid">
				<br>
				<label style="font-size:2vw"  for="lname">NAME:</label><br>
				<input type="text" id="langname" name="langname">
				<br>
				<label style="font-size:2vw"  for="lname">LAST_UPDATE:</label><br>
				<input type="text" id="lupd13" name="lupd13">
			</form>
			<button type="submit" form="form13" value="Submit" name="submit_13">INSERT</button>
		</div>
		
		<h1 class="flip" style = "background-color:LightSkyBlue;">PAYMENT<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form action = "insert.php" method="post" id="form14">
				<label style="font-size:2vw"  for="fname">PAYMENT_ID:</label><br>
				<input type="text" id="payid" name="payid">
				<br>
				<label style="font-size:2vw"  for="lname">CUSTOMER_ID:</label><br>
				<input type="text" id="custdate" name="custdate">
				<br>
				<label style="font-size:2vw"  for="lname">STAFF_ID:</label><br>
				<input type="text" id="staffid" name="staffid">
				<br>
				<label style="font-size:2vw"  for="lname">RENTAL_ID:</label><br>
				<input type="text" id="rid" name="rid">
				<br>
				<label style="font-size:2vw"  for="lname">AMOUNT:</label><br>
				<input type="text" id="amount" name="amount">
				<br>
				<label style="font-size:2vw"  for="lname">PAYMENT_DATE:</label><br>
				<input type="text" id="paydate" name="paydate">
				<br>
				<label style="font-size:2vw"  for="lname">LAST_UPDATE:</label><br>
				<input type="text" id="lupd14" name="lupd14">
			</form>
			<button type="submit" form="form14" value="Submit" name="submit_14">INSERT</button>
		</div>
		
		<h1 class="flip" style = "background-color:LightSkyBlue;">RENTAL<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form action = "insert.php" method="post" id="form15">
				<label style="font-size:2vw"  for="fname">RENTAL_ID:</label><br>
				<input type="text" id="rentid" name="rentid">
				<br>
				<label style="font-size:2vw"  for="lname">RENTAL_DATE:</label><br>
				<input type="text" id="rdate" name="rdate">
				<br>
				<label style="font-size:2vw"  for="lname">INVENTORY_ID:</label><br>
				<input type="text" id="inventid" name="inventid">
				<br>
				<label style="font-size:2vw"  for="lname">CUSTOMER_ID:</label><br>
				<input type="text" id="customeid" name="customeid">
				<br>
				<label style="font-size:2vw"  for="lname">RETURN_DATE:</label><br>
				<input type="text" id="redate" name="redate">
				<br>
				<label style="font-size:2vw"  for="lname">STAFF_ID:</label><br>
				<input type="text" id="stffid" name="stffid">
				<br>
				<label style="font-size:2vw"  for="lname">LAST_UPDATE:</label><br>
				<input type="text" id="lupd15" name="lupd15">
			</form>
			<button type="submit" form="form15" value="Submit" name="submit_15">INSERT</button>
		</div>
		
		<h1 class="flip" style = "background-color:LightSkyBlue;">STAFF<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form action = "insert.php" method="post" id="form16">
				<label style="font-size:2vw"  for="fname">STAFF_ID:</label><br>
				<input type="text" id="staffid1" name="staffid1">
				<br>
				<label style="font-size:2vw"  for="lname">FIRST_NAME:</label><br>
				<input type="text" id="fname3" name="fname3">
				<br>
				<label style="font-size:2vw"  for="lname">LAST_NAME:</label><br>
				<input type="text" id="lname3" name="lname3">
				<br>
				<label  style="font-size:2vw"  for="lname">ADDRESS_ID:</label><br>
				<input type="text" id="addrid" name="addrid">
				<br>
				<label  style="font-size:2vw" for="lname">PICTURE:</label><br>
				<input type="text" id="pic" name="pic">
				<br>
				<label style="font-size:2vw"  for="lname">EMAIL:</label><br>
				<input type="text" id="email2" name="email2">
				<br>
				<label style="font-size:2vw"  for="lname">STORE_ID:</label><br>
				<input type="text" id="streid" name="streid">
				<br>
				<label style="font-size:2vw"  for="lname">ACTIVE:</label><br>
				<input type="text" id="active" name="active">
				<br>
				<label style="font-size:2vw"  for="lname">USERNAME:</label><br>
				<input type="text" id="use" name="use">
				<br>
				<label style="font-size:2vw"  for="lname">PASSWORD:</label><br>
				<input type="text" id="pw" name="pw">
				<br>
				<label style="font-size:2vw"  for="lname">LAST_UPDATE:</label><br>
				<input type="text" id="lupd16" name="lupd16">
			</form>
			<button type="submit" form="form16" value="Submit" name="submit_16">INSERT</button>
		</div>
		
		<h1 class="flip" style = "background-color:LightSkyBlue">STORE<h1>
		<div class="panel" style = "background-color:LightCyan;">
            <form action = "insert.php" method="post" id="form17">
				<label style="font-size:2vw"  for="sid">STORE_ID:</label><br>
				<input type="text" id="sid" name="sid">
				<br>
				<label style="font-size:2vw"  for="msid">MANAGER_STAFF_ID:</label><br>
				<input type="text" id="mstaffid" name="mstaffid">
				<br>
				<label style="font-size:2vw"  for="adrid">ADDRESS_ID:</label><br>
				<input type="text" id="adrid" name="adrid">
				<br>
				<label style="font-size:2vw"  for="lupd">LAST_UPDATE:</label><br>
				<input type="text" id="lupd17" name="lupd17">
				<br>
				<br>
			<button type="submit" form="form17" value="Submit" name="submit_17">INSERT</button>
			</form>
		</div>
		<br />
	<?php
    if($_POST['submit_1'])
    {
        $actid = $_POST['actid'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $lupd = $_POST['lupd'];
        
        $sql = "INSERT INTO ACTOR(ACTOR_ID, FIRST_NAME, LAST_NAME, LAST_UPDATE) VALUES('$actid', '$fname', '$lname', '$lupd')";
	
	    if(!mysqli_query($conn, $sql))
    	{
    		echo '';
    	}
	
    	header("refresh:2; url=insert.php");
    }
    else if($_POST['submit_2'])
    {
        $addid = $_POST['addid'];
        $add = $_POST['add'];
        $add2 = $_POST['add2'];
        $dis = $_POST['dis'];
        $citid = $_POST['citid'];
        $pc = $_POST['pc'];
        $phone = $_POST['phone'];
        $lupd2 = $_POST['lupd2'];
        
        $sql = "INSERT INTO ADDRESS(ADDRESS_ID, ADDRESS, ADDRESS2, DISTRICT, CITY_ID, POSTAL_CODE, PHONE, LAST_UPDATE) VALUES('$addid', '$add', '$add2', '$dis', '$citid', '$pc', '$phone', '$lupd2')";
	
	    if(!mysqli_query($conn, $sql))
    	{
    		echo '';
    	}
	
    	header("refresh:2; url=insert.php");
	
    }
    else if($_POST['submit_3'])
    {
       $catid = $_POST['catid'];
       $name1 = $_POST['name1'];
       $lupd3 = $_POST['lupd3'];
       
       $sql = "INSERT INTO CATEGORY(CATEGORY_ID, NAME, LAST_UPDATE) VALUES('$catid', '$name1', '$lupd3')";
	
	    if(!mysqli_query($conn, $sql))
    	{
    		echo '';
    	}
	
    	header("refresh:2; url=insert.php");
    }
    else if($_POST['submit_4'])
    {
       $cityid = $_POST['cityid'];
       $city = $_POST['city'];
       $countid = $_POST['countid'];
       $lupd4 = $_POST['lupd4'];
       
       $sql = "INSERT INTO CITY(CITY_ID, CITY, COUNTRY_ID, LAST_UPDATE) VALUES('$cityid', '$city', 'countid', '$lupd4')";
	
	    if(!mysqli_query($conn, $sql))
    	{
    		echo '';
    	}
	
    	header("refresh:2; url=insert.php");
    }
    else if($_POST['submit_5'])
    {
       $countryid = $_POST['countryid'];
       $country = $_POST['country'];
       $lupd5 = $_POST['lupd5'];
       
       $sql = "INSERT INTO COUNTRY(COUNTRY_ID, COUNTRY, LAST_UPDATE) VALUES('$countryid', '$country', '$lupd5')";
	
	    if(!mysqli_query($conn, $sql))
    	{
    		echo '';
    	}
	
    	header("refresh:2; url=insert.php");
    }
    else if($_POST['submit_6'])
	{
	    $custid = $_POST['custid'];
    	$storeid = $_POST['storeid'];
	    $fname2 = $_POST['fname2'];
	    $lname2 = $_POST['lname2'];
	    $email = $_POST['email'];
    	$addressid = $_POST['addressid'];
    	$act = $_POST['act'];
    	$cdate = $_POST['cdate'];
    	$lupd6 = $_POST['lupd6'];
	
    	$sql = "INSERT INTO CUSTOMER(CUSTOMER_ID, STORE_ID, FIRST_NAME, LAST_NAME, EMAIL, ADDRESS_ID, ACTIVE,  CREATE_DATE, LAST_UPDATE) VALUES('$custid', '$storeid, '$fname2', '$lname2',, '$email',  '$addressid', '$act', '$cdate', '$lupd6')";
	
	    if(!mysqli_query($conn, $sql))
    	{
    		echo '';
    	}
	
    	header("refresh:2; url=insert.php");
	}
	else if($_POST['submit_7'])
	{
	     $filmid = $_POST['filmid'];
	     $ryear = $_POST['ryear'];
	     $langid = $_POST['langid'];
	     $orilangid = $_POST['orilangid'];
	     $rating = $_POST['rating'];
	     $spef = $_POST['spef'];
	     $lupd7 = $_POST['lupd7'];
	     
	     $sql = "INSERT INTO FILM(FILM_ID, RELEASE_YEAR, LANGUAGE_ID, ORIGINAL_LANGUAGE_ID, RATING, SPECIAL_FEATURES, LAST_UPDATE) VALUES('$filmid', '$ryear', '$langid', '$orilangid', '$rating', '$spef', '$lupd7')";
	     
	     if(!mysqli_query($conn, $sql))
	     {
	         echo'';
	     }
	     
	     header("refresh:2; url=insert.php");
    }
	else if($_POST['submit_8'])
	{
	    $filmid2 = $_POST['filmid2'];
	    $rdura = $_POST['rdura'];
	    $rentr = $_POST['rentr'];
	    $length = $_POST['length'];
	    $rcost = $_POST['rcost'];
	    
	    $sql = "INSERT INTO FILM_RENTAL(FILM_ID, RENTAL_DURATION, RENTAL_RATE, LENGTH, REPLACEMENT_COST) VALUES('$filmid2', 'rdura', 'rentr', 'length', 'rcost')";
	}
	else if($_POST['submit_9'])
    {
       $actorid2 = $_POST['actorid2'];
       $fid = $_POST['fid'];
       $lupd9 = $_POST['lupd9'];
       
       $sql = "INSERT INTO FILM_ACTOR(ACTOR_ID, FILM_ID, LAST_UPDATE) VALUES('$actorid2', '$fid', '$lupd9')";
	
	    if(!mysqli_query($conn, $sql))
    	{
    		echo '';
    	}
	
    	header("refresh:2; url=insert.php");
    }
    else if($_POST['submit_10'])
    {
       $fid2 = $_POST['fid2'];
       $cid2 = $_POST['cid2'];
       $lupd10 = $_POST['lupd10'];
       
       $sql = "INSERT INTO FILM_CATEGORY(FILM_ID, CATEGORY_ID, LAST_UPDATE) VALUES('$fid2', '$cid2', '$lupd10')";
	
	    if(!mysqli_query($conn, $sql))
    	{
    		echo '';
    	}
	
    	header("refresh:2; url=insert.php");
    }
    else if($_POST['submit_11'])
    {
       $fid3 = $_POST['fid3'];
       $title = $_POST['title'];
       $desc = $_POST['desc'];
       
       $sql = "INSERT INTO FILM_TEXT(FILM_ID, TITLE, DESCRIPTION) VALUES('$fid3, '$title', '$desc')";
	
	    if(!mysqli_query($conn, $sql))
    	{
    		echo '';
    	}
	
    	header("refresh:2; url=insert.php");
    }
    else if($_POST['submit_12'])
    {
       $invid = $_POST['invid'];
       $fid4 = $_POST['fid4'];
       $strid = $_POST['strid'];
       $lupd12 = $_POST['lupd12'];
       
       $sql = "INSERT INTO INVENTORY(INVENTORY_ID, FILM_ID, STORE_ID, LAST_UPDATE) VALUES('$invid', '$fid4', '$strid', '$lupd12')";
	
	    if(!mysqli_query($conn, $sql))
    	{
    		echo '';
    	}
	
    	header("refresh:2; url=insert.php");
    }
    else if($_POST['submit_13'])
    {
        $languageid = $_POST['languageid'];
        $langname = $_POST['langname'];
        $lupd13 = $_POST['lupd13'];
        
        $sql = "INSERT INTO LANGUAGE(LANGUAGE_ID, NAME, LAST_UPDATE) VALUES('$languageid', '$langname', '$lupd13')";
        
        if(!mysqli_query($conn, $sql))
        {
            echo'';
        }
        header("refresh:2; url=insert.php");
    }
    else if($_POST['submit_14'])
	{
	    $payid = $_POST['payid'];
    	$custdate = $_POST['custdate'];
	    $staffid = $_POST['staffid'];
	    $rid = $_POST['rid'];
	    $amount = $_POST['amount'];
	    $paydate = $_POST['paydate'];
    	$lupd14 = $_POST['lupd14'];
	
    	$sql = "INSERT INTO PAYMENT(PAYMENT_ID, CUSTOMER_ID, STAFF_ID, RENTAL_ID,  AMOUNT, PAYMENT_DATE, LAST_UPDATE) VALUES('$payid', '$custdate', '$staffid', '$rid', '$amount', '$paydate',  '$lupd14')";
	
	    if(!mysqli_query($conn, $sql))
    	{
    		echo '';
    	}
	
    	header("refresh:2; url=insert.php");
	}
	else if($_POST['submit_15'])
	{
	    $rentid = $_POST['rentid'];
    	$rdate = $_POST['rdate'];
	    $inventid = $_POST['inventid'];
	    $customeid = $_POST['customeid'];
	    $redate = $_POST['redate'];
	    $stffid = $_POST['stffid'];
    	$lupd15 = $_POST['lupd15'];
	
    	$sql = "INSERT INTO RENTAL(RENTAL_ID, RENTAL_DATE, INVENTORY_ID, CUSTOMER_ID,  RETURN_DATE, STAFF_ID, LAST_UPDATE) VALUES('$rentid', '$rdate', '$inventid', '$customeid', '$redate', '$stffid',  '$lupd15')";
	
	    if(!mysqli_query($conn, $sql))
    	{
    		echo '';
    	}
	
    	header("refresh:2; url=insert.php");
	}
	else if($_POST['submit_16'])
	{
	    $staffid1 = $_POST['staffid1'];
    	$fname3 = $_POST['fname3'];
	    $lname3 = $_POST['lname3'];
	    $addrid = $_POST['addrid'];
	    $pic = $_POST['pic'];
	    $email2 = $_POST['email2'];
    	$streid = $_POST['streid'];
    	$active = $_POST['active'];
    	$use = $_POST['use'];
    	$pw = $_POST['pw'];
    	$lupd16 = $_POST['lupd16'];
	
    	$sql = "INSERT INTO STAFF(STAFF_ID, FIRST_NAME, LAST_NAME, ADDRESS_ID, PICTURE, EMAIL, STORE_ID, ACTIVE, USERNAME, PASSWORD, LAST_UPDATE) VALUES('$staffid1', '$fname3', '$lname3', '$addrid', '$pic', '$email2', '$streid', '$active', '$use', '$pw', '$lupd16')";
	
	    if(!mysqli_query($conn, $sql))
    	{
    		echo '';
    	}
	
    	header("refresh:2; url=insert.php");
	}
	else if($_POST['submit_17'])
	{
	    $sid = $_POST['sid'];
	    $mstaffid = $_POST['mstaffid'];
	    $adrid = $_POST['adrid'];
	    $lupd17 = $_POST['lupd17'];
	
	    $sql = "INSERT INTO STORE(STORE_ID, MANAGER_STAFF_ID, ADDRESS_ID, LAST_UPDATE) VALUES('$sid', '$mstaffid', '$adrid', '$lupd17')";
	
	    if(!mysqli_query($conn, $sql))
	    {
		    echo '';
	    }
	    
	    header("refresh:2; url=insert.php");
	}
    ?>
		
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