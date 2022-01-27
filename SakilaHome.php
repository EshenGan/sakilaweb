<?php

    include_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
     <head>
	 <title> SAKILA </title>
	 <meta charset="UTF-8" />
	 <meta name="viewport" content="width=device-width, initial-scale=1" />
	 <link rel="shortcut icon" type="image/x-icon" href="logo_icon.jpg" />
	 <link rel="stylesheet" href="styles.css" type="text/css" />
	 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	 <link rel="stylesheet" href="fontawesomemin.css"/>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     </head>

     <body>
	<!-- logo--> 
				<table class="container-fluid" border="0" align="center" style="text-decoration:none" >
					<tr><td>
				   <img  id="icon" src="logo_icon.jpg" alt="SAKILA"  type="image" width="250vw" height="200vw"
				    title="SAKILA" align="center"/>
					<br />
					</td></tr>
					</table>
		
	<!-- banner-->	
     	<table border="0" style="width: 100%" class="container-fluid">
     		<tr style="background-color:#2966c2">
     		<td>
     		<h1 id="header" style="color: #FFFFFF" align="center">Welcome to SAKILA Database</h1>
     		</td>
     		</tr>
 		</table>
     	<br>
     	<br>
     	<br>
     
    <!-- table icons-->
    <div class="ovf" style="overflow-x:auto">
     	<table border="0" style="width:100%" class="container-fluid">
     		<tr style="max-width:100%">
     			<td style="width:25%;padding-top: 0.6vh">
     			<center><!-- actor -->
     			<a href="actor.php" style="text-decoration: none">
     			<img class="icon" src="actor.png" type="image" style="max-width:70%;height:auto;margin-left:15%;margin-right:15%" alt="Actors" title="Actors" align="center"/> </a>
     			<a href="actor.php" style="font-size:0.7em;text-decoration: none">
     			<h1>Actors</h1>
     			</a>
     			</td>

     			<td style="width:25%;padding-top: 0.6vh">
     				<center><!-- address -->
     			<a href="address.php" style="text-decoration: none">
     			<img class="icon" src="address.jpg" type="image" style="max-width:70%;height:auto;margin-left:15%;margin-right:15%" alt="Address" title="Address" align="center"/> </a>
     			<a href="address.php" style="font-size:0.7em;text-decoration: none">
     			<h1>&nbsp;&nbsp;Address</h1>
     			</a>
     			</td>

     			<td style="width:25%;padding-top: 0.6vh">
     				<center><!-- category -->
     			<a href="category.php" style="text-decoration: none">
     			<img class="icon" src="category.jpg" type="image" style="max-width:70%;height:auto;margin-left:15%;margin-right:15%" alt="Category" title="Category" align="center"/> </a>
     			<a href="category.php" style="font-size:0.7em;text-decoration: none">
     			<h1>&nbsp;&nbsp;Category</h1>
     			</a>
     			</td>

     			<td style="width:25%;padding-top: 0.6vh">
     				<center><!-- city -->
     			<a href="city.php" style="text-decoration: none">
     			<img class="icon" src="city.jpg" type="image" style="max-width:70%;height:auto;margin-left:15%;margin-right:15%" alt="City" title="City" align="center"/> </a>
     			<a href="city.php" style="font-size:0.7em;text-decoration: none">
     			<h1>City</h1>
     			</a>
     			</td>
     		</tr>

     		<tr style="width:100%">
     			<td style="width:25%;padding-top: 10vh">
     			<center><!-- country -->
     			<a id="icon" href="country.php" style="text-decoration: none">
     			<img class="icon" src="country.png" type="image" style="max-width:70%;height:auto;margin-left:15%;margin-right:15%" alt="Country" title="Country" align="center"/> </a>
     			<a href="country.php" style="font-size:0.7em;text-decoration: none">
     			<h1>Country</h1>
     			</a>
     			</td>

     			<td style="width:25%;padding-top: 10vh">
     			<center><!-- customer -->
     			<a id="icon" href="customer.php" style="text-decoration: none">
     			<img class="icon" src="customer.png" type="image" style="max-width:70%;height:auto;margin-left:15%;margin-right:15%" alt="Customer" title="Customer" align="center"/> </a>
     			<a href="customer.php" style="font-size:0.7em;text-decoration: none">
     			<h1>&nbsp;Customer</h1>
     			</a>
     			</td>

     			<td style="width:25%;padding-top: 10vh">
     			<center><!-- film -->
     			<a id="icon" href="film.php" style="text-decoration: none">
     			<img class="icon" src="film.png" type="image" style="max-width:70%;height:auto;margin-left:15%;margin-right:15%" alt="Films" title="Films" align="center"/> </a>
     			<a href="film.php" style="font-size:0.7em;text-decoration: none">
     			<h1>&nbsp;&nbsp;Films</h1>
     			</a>
     			</td>

     			<td style="width:25%;padding-top: 10vh">
     			<center><!-- film actor -->
     			<a id="icon" href="film_actor.php" style="text-decoration: none">
     			<img class="icon" src="film_actor.png" type="image" style="max-width:70%;height:auto;margin-left:15%;margin-right:15%" alt="Actors in Films" title="Actors in Films" align="center"/> </a>
     			<a href="film_actor.php" style="font-size:0.7em;text-decoration: none">
     			<h1>&nbsp;&nbsp;Actors in Films</h1>
     			</a>
     			</td>
     		</tr>

     		<tr style="width:100%">
     			<td style="width:25%;padding-top: 10vh">
     			<center> <!-- film category -->
     			<a id="icon" href="film_category.php" style="text-decoration: none">
     			<img class="icon" src="film_category.jpg" type="image" style="max-width:70%;height:auto;margin-left:15%;margin-right:15%" alt="Film Category" title="Film Category" align="center"/> </a>
     			<a href="film_category.php" style="font-size:0.7em;text-decoration: none">
     			<h1>Film Category</h1>
     			</a>
     			</td>

     			<td style="width:25%;padding-top: 10vh">
     			<center>   <!-- film rental -->
     			<a id="icon" href="film_rental.php" style="text-decoration: none">
     			<img class="icon" src="film_rental.png" type="image" style="max-width:70%;height:auto;margin-left:15%;margin-right:15%" alt="Film Rental" title="Film Rental" align="center"/> </a>
     			<a href="film_rental.php" style="font-size:0.7em;text-decoration: none">
     			<h1>&nbsp;Film Rental</h1>
     			</a>
     			</td>

     			<td style="width:25%;padding-top: 10vh">
     			<center>  <!-- film text -->
     			<a id="icon" href="film_text.php" style="text-decoration: none">
     			<img class="icon" src="film_text.png" type="image" style="max-width:70%;height:auto;margin-left:15%;margin-right:15%" alt="Film Description" title="Film Description" align="center"/> </a>
     			<a href="film_text.php" style="font-size:0.7em;text-decoration: none">
     			<h1>&nbsp;&nbsp;Film Description</h1>
     			</a>
     			</td>

     			<td style="width:25%;padding-top: 10vh">
     			<center>  <!-- inventory -->
     			<a id="icon" href="inventory.php" style="text-decoration: none">
     			<img class="icon" src="inventory.png" type="image"style="max-width:70%;height:auto;margin-left:15%;margin-right:15%" alt="Inventory" title="Inventory" align="center"/> </a>
     			<a href="inventory.php" style="font-size:0.7em;text-decoration: none">
     			<h1>&nbsp;&nbsp;Inventory</h1>
     			</a>
     			</td>
     		</tr>

     		<tr style="width:100%">
     			<td style="width:25%;padding-top: 10vh">
     			<center>   <!-- language -->
     			<a id="icon" href="language.php" style="text-decoration: none">
     			<img class="icon" src="language.png" type="image" style="max-width:70%;height:auto;margin-left:15%;margin-right:15%" alt="Language" title="Language" align="center"/> </a>
     			<a href="language.php" style="font-size:0.7em;text-decoration: none">
     			<h1>Language</h1>
     			</a>
     			</td>

     			<td style="width:25%;padding-top: 10vh">
     			<center>   <!-- payment -->
     			<a id="icon" href="payment.php" style="text-decoration: none">
     			<img class="icon" src="payment.png" type="image"style="max-width:70%;height:auto;margin-left:15%;margin-right:15%" alt="Payments" title="Payments" align="center"/> </a>
     			<a href="payment.php" style="font-size:0.7em;text-decoration: none">
     			<h1>&nbsp;Payments</h1>
     			</a>
     			</td>

     			<td style="width:25%;padding-top: 10vh">
     			<center>   <!-- rental -->
     			<a id="icon" href="rental.php" style="text-decoration: none">
     			<img class="icon" src="rental.jpg" type="image" style="max-width:70%;height:auto;margin-left:15%;margin-right:15%" alt="Rental" title="Rental" align="center"/> </a>
     			<a href="rental.php" style="font-size:0.7em;text-decoration: none">
     			<h1>&nbsp;&nbsp;Rental</h1>
     			</a>
     			</td>

     			<td style="width:25%;padding-top: 10vh">
     			<center>   <!-- staff -->
     			<a id="icon" href="staff.php" style="text-decoration: none">
     			<img class="icon" src="staff.png" type="image" style="max-width:70%;height:auto;margin-left:15%;margin-right:15%" alt="Staff" title="Staff" align="center"/> </a>
     			<a href="staff.php" style="font-size:0.7em;text-decoration: none">
     			<h1>&nbsp;&nbsp;Staff</h1>
     			</a>
     			</td>
     		</tr>

     		<tr style="width:100%;padding-right:75%">
     			<td style="width:25%;padding-top: 5vh">
     			<center>   <!-- store -->
     			<a id="icon" href="store.php" style="text-decoration: none">
     			<img class="icon" src="store.png" type="image" style="max-width:70%;height:auto;margin-left:15%;margin-right:15%" alt="Store" title="Store" align="center"/> </a>
     			<a href="store.php" style="font-size:0.7em;text-decoration: none">
     			<h1>&nbsp;&nbsp;Store</h1>
     			</a>
     			</td>
     		</tr>
     	</table>
     </div>
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
     		
    <!--floating buttons--> 
		
			<div class="custom" id="buttonx">
			<button class="btn btn1"><a href="insert.php" style="text-decoration:none;color:black" >INSERT</a></button>
			<button class="btn btn1"><a href="select.php" style="text-decoration:none;color:black" >SELECT</a></button>
			<button class="btn btn1"><a href="multselect.php" style="text-decoration:none;color:black" >SELECT FROM MULTIPLE</a></button>
     		</div>
 
     	<footer>
				<table class="container-fluid" style="border:0;background-color:#260082;width:100%;color:white;font-family:Times New Roman;font-weight:bold;">
					<tr>
						<th colspan="3" style="text-align:left;border-bottom:thin solid white;padding-top:30px;padding-left:20px;"><span style="color:antiquewhite;font-size:20px;">SAKILA 
							<span style="font-size:0.5em">&copy;</span>
						</th>
					</tr>

					<tr>
						<td style="width:20%;font-size:18px;padding-bottom:15px;padding-top:30px;padding-left:20px">
							<span class="footer" style="cursor:pointer;">About</span></td>
						<td style="width:60%;font-size:18px;padding-bottom:15px;padding-top:30px;padding-right:50%;">
							<span class="footer" style="cursor:pointer;">Contact us</span>
						</td>
						<td style="width:20%;font-size:18px;padding-bottom:15px;padding-top:30px;">
								<img src="twitter.png" alt="Twitter" style="cursor:pointer;" title="Twitter" height="30" width="30"/>
						</td>
								
					</tr>
							
					<tr>
						<td style="width:20%;font-size:18px;padding-bottom:15px;padding-top:15px;padding-left:20px">
							<span class="footer" style="cursor:pointer;">Find our store</span></td>
						<td style="width:60%;font-size:18px;padding-bottom:15px;padding-top:15px;padding-right:50%;">
							<span class="footer" style="cursor:pointer;">Feedbacks</span>
						</td>
						<td style="width:20%;font-size:18px;padding-bottom:15px;padding-top:15px;">
							<img src="instagram.png" style="cursor:pointer;" alt="Instagram" title="Instagram" height="30" width="30"/>
						</td>
					</tr>
							
					<tr>
						<td style="width:20%;font-size:18px;padding-bottom:25px;padding-top:15px;padding-left:20px;">
							<span class="footer" style="cursor:pointer;">FAQs</span>
						</td>
						<td style="width:60%;font-size:18px;padding-bottom:25px;padding-top:15px;padding-right:50%;">
							<span class="footer" style="cursor:pointer;">Explore</span>
						</td>
						<td style="width:20%;font-size:18px;padding-bottom:25px;padding-top:15px;">
							<img src="facebook.png" style="cursor:pointer;" alt="Facebook" title="Facebook" height="30" width="30" />
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<span style="font-size:10px;color:antiquewhite;padding-left:20px">&copy; 2019 SAKILA. All Rights Reserved.</span>
						</td>
							
							
				</table>
			</footer>

     </body>

</html>