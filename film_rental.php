<?php
	include_once('connect.php');
?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<title> SAKILA | FILM RENTAL</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" type="image/x-icon" href="logo_icon.jpg" />
		<link rel="stylesheet" href="styles.css" text="text/css"/>
		<link rel="stylesheet" href="fontawesomemin.css"/>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="querymin.js"></script>
		<script src="bootstrapmin.js"></script>
	

	</head>
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
	<!--CUSTOMER table-->
		<table class="container-fluid" border="1" style="width:70%;border-collapse:collapse;align:center;margin-left:15%;margin-right:15%">
			<tr>
				<th style="width:70%;font-size:3vw" colspan="7"><h1>FILM RENTAL</h1></th>
			</tr>
			<tr>
				<th style="width:10%;font-size:1vw" >FILM ID</th>
				<th style="width:10%;font-size:1vw" >RENTAL DURATION</th>
				<th style="width:10%;font-size:1vw" >RENTAL RATE</th>
				<th style="width:10%;font-size:1vw" >LENGTH</th>
				<th style="width:10%;font-size:1vw" >REPLACEMENT COST</th>
				<th style="width:10%;font-size:1vw" >UPDATE</th>
				<th style="width:10%;font-size:1vw" >DELETE</th>
			</tr>
		
			<?php
			    $sql = "SELECT * FROM FILM_RENTAL;";
			    $result = mysqli_query($conn, $sql);
			    $resultcheck = mysqli_num_rows($result);
			    if($resultcheck > 0)
			    {
			        //fetch data
			        while($rows = mysqli_fetch_assoc($result))
			        {
			?>
				<tr id="data">
				    <td style="width:10%;font-size:1vw" > <?php echo $rows['FILM_ID']; ?> </td>
				    <td style="width:10%;font-size:1vw" > <?php echo $rows['RENTAL_DURATION']; ?> </td>
				    <td style="width:10%;font-size:1vw" > <?php echo $rows['RENTAL_RATE']; ?> </td>
				    <td style="width:10%;font-size:1vw" > <?php echo $rows['LENGTH']; ?> </td>
				    <td style="width:10%;font-size:1vw" > <?php echo $rows['REPLACEMENT_COST']; ?> </td>
				    <td style="width:100%;font-size:1vw" class="w3-dropdown-click">
				        <a href="updatefilmrentrow.php?filmrentid=<?php echo $rows['FILM_ID']; ?>" style=text-decoration:none> 
				    	<button type="button" style="width:100%" onclick="myFunction()" class="w3-button w3-black">
				    	     <span style="font-size:1vw">UPDATE</span>
				    	</button> 
				    	</a>
    				</td>
				    <td style="width:10%;font-size:1vw"> 
			        <button type="button" style="width:100%" onclick="myFunction()" class="w3-button w3-red">
				        <?php echo "<a style= text-decoration:none href=delete1.php?id12=".$rows['FILM_ID'].">"?>
				        <span style="font-size:1vw;color:white;text-decoration:none">DELETE</span> 
				        <?php echo "</a>"?>
				    </button>
				    </td>					
				</tr>
			<?php
			        }
		
			    }
			
			?>
			
		</table>
	<!-- footer-->	
	    <br />
    	<footer>
				<table class="container-fluid" style="background-color:#260082;color:white;font-family:Times New Roman;font-weight:bold;width:100%">
					<tr>
						<th colspan="3" style="text-align:left;border-bottom:thin solid white;padding-top:1%;padding-left:1%"><span style="color:antiquewhite;font-size:1.2vw;">SAKILA </span>
							<span style="font-size:0.5em">&copy;</span>
						</th>
					</tr>

					<tr>
						<td  style="width:20%;font-size:1.2vw;padding-bottom:1%;padding-top:1%;padding-left:1%">
							<span  class="footer" style="cursor:pointer">About</span></td>
						<td style="width:60%;font-size:1.2vw;padding-bottom:1%;padding-top:1%;padding-right:50%">
							<span class="footer" style="cursor:pointer;">Contact us</span>
						</td>
						<td style="width:20%;font-size:1.2vw;padding-bottom:1%;padding-top:1%">
								<img src="twitter.png" alt="Twitter" style="cursor:pointer;" title="Twitter" height="30" width="30"/>
						</td>
								
					</tr>
							
					<tr>
						<td style="width:20%;font-size:1.2vw;padding-bottom:1%;padding-top:1%;padding-left:1%">
							<span class="footer" style="cursor:pointer;">Find our store</span></td>
						<td style="width:60%;font-size:1.2vw;padding-bottom:1%;padding-top:1%;padding-right:50%">
							<span class="footer" style="cursor:pointer;">Feedbacks</span>
						</td>
						<td style="width:20%;font-size:1.2vw;padding-bottom:1%;padding-top:1%">
							<img src="instagram.png" style="cursor:pointer;" alt="Instagram" title="Instagram" height="30" width="30"/>
						</td>
					</tr>
							
					<tr>
						<td style="width:20%;font-size:1.2vw;padding-bottom:1%;padding-top:1%;padding-left:1%">
							<span class="footer" style="cursor:pointer;">FAQs</span>
						</td>
						<td style="width:60%;font-size:1.2vw;padding-bottom:1%;padding-top:1%;padding-right:50%">
							<span class="footer" style="cursor:pointer;">Explore</span>
						</td>
						<td style="width:20%;font-size:1.2vw;padding-bottom:1%;padding-top:1%">
							<img src="facebook.png" style="cursor:pointer;" alt="Facebook" title="Facebook" height="30" width="30" />
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<span style="font-size:1vw;color:antiquewhite;padding-left:1%">&copy; 2019 SAKILA. All Rights Reserved.</span>
						</td>
							
							
				</table>
			</footer>					
	</body>
</html>