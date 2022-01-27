<?php
	include_once('connect.php');
?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<title> SAKILA | INVENTORY</title>
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
					  <a href="film_rental.php">FILM RENTAL</a>
					</div>
				  </div> 
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
	<!--INVENTORY table-->
		<table class="container-fluid" border="1" align="center" style="width:60%;border-collapse:collapse;margin-left:20%;margin-right:20%">
			<tr>
				<th colspan="6"><h1>INVENTORY</h1></th>
			</tr>
			<tr>
				<th style="width:10%;font-size:1vw">INVENTORY_ID</th>
				<th style="width:10%;font-size:1vw">FILM_ID</th>
				<th style="width:10%;font-size:1vw">STORE_ID</th>
				<th style="width:10%;font-size:1vw">LAST_UPDATE</th>
				<th style="width:10%;font-size:1vw" >UPDATE</th>
				<th style="width:10%;font-size:1vw" >DELETE</th>
			</tr>
			
			<tr>
				<th style="width:10%;font-size:1vw;background-color:#24CCCA" >&nbsp;</th>
				<th style="width:10%;font-size:1vw;background-color:#24CCCA" >&nbsp;</th>
				<th style="width:10%;font-size:1vw;background-color:#24CCCA" >
				    <form role="form" action="updatecol.php" method="post">
				        <input type="submit" value="UPDATE" name="invstoreid" style="width:100%;font-size:1vw;color:black;text-decoration:none">
				    </form>
				</th>
				<th style="width:10%;font-size:1vw;background-color:#24CCCA" >
				    <form role="form" action="updatecol.php" method="post">
				        <input type="submit" value="UPDATE" name="invluid" style="width:100%;font-size:1vw;color:black;text-decoration:none">
				    </form>
			    </th>
				<th style="width:10%;font-size:1vw;background-color:#24CCCA" >&nbsp;</th>
				<th style="width:10%;font-size:1vw;background-color:#24CCCA" >&nbsp;</th>
			</tr>
		
			<?php
			    $sql = "SELECT * FROM INVENTORY;";
			    $result = mysqli_query($conn, $sql);
			    $resultcheck = mysqli_num_rows($result);
			    if($resultcheck > 0)
			    {
			        //fetch data
			        while($rows = mysqli_fetch_assoc($result))
			        {
			?>
				<tr id="data">
				    <td style="width:10%;font-size:1vw"> <?php echo $rows['INVENTORY_ID']; ?> </td>
				    <td style="width:10%;font-size:1vw"> <?php echo $rows['FILM_ID']; ?> </td>
				    <td style="width:10%;font-size:1vw"> <?php echo $rows['STORE_ID']; ?> </td>
				    <td style="width:10%;font-size:1vw"> <?php echo $rows['LAST_UPDATE']; ?> </td>
				    <td style="width:100%;font-size:1vw" class="w3-dropdown-click">
				        <a href="updateinvrow.php?invid=<?php echo $rows['INVENTORY_ID']; ?>" style=text-decoration:none> 
				    	<button type="button" style="width:100%" onclick="myFunction()" class="w3-button w3-black">
				    	     <span style="font-size:1vw">UPDATE</span>
				    	</button> 
				    	</a>
    				</td>
				    <td style="width:10%;font-size:1vw" >
			        <button type="button" style="width:100%" onclick="myFunction()" class="w3-button w3-red">
				        <?php echo "<a style= text-decoration:none href=delete1.php?id14=".$rows['INVENTORY_ID'].">"?>
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
		<br />
	<!-- footer-->	
     	<footer>
				<table style="border:0;background-color:#260082;width:100%;color:white;font-family:Times New Roman;font-weight:bold;">
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