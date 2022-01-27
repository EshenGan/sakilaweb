<?php
    include_once ('connect.php');
    
$rid = $_GET['rid'];
    $result = mysqli_query($conn,"SELECT * FROM RENTAL WHERE RENTAL_ID='$rid'");
    $rows = mysqli_fetch_array($result);
    if(isset($_POST['updater']))
    {
        $rd = $_POST['rd'];
        $invid = $_POST['invid'];
        $cusid = $_POST['cusid'];
        $rtnd = $_POST['rtnd'];
        $sid = $_POST['sid'];
        $lastupdate = $_POST['lastupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE RENTAL SET RENTAL_DATE='$rd', INVENTORY_ID='$invid', CUSTOMER_ID='$cusid', RETURN_DATE='$rtnd', STAFF_ID='$sid', LAST_UPDATE='$lastupdate' WHERE RENTAL_ID='$rid';");
        
        if ($update)
        {
            header("refresh:1; url=rental.php");
        }
        else
        {
            echo "Not updated";
        }
    }
?>
	
	<head>
		<title> SAKILA | RENTAL UPDATE</title>
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
	    <table border="0" align="center" style="text-decoration:none" >
					<tr><td>
				   <img class="container-fluid" id="icon" src="logo_icon.jpg" alt="SAKILA"  type="image" width="250vw" height="200vw"
				    title="SAKILA" align="center"/>
					<br />
					</td></tr>
		</table>
		
		<br>
     	<table border="0" style="width: 100%">
     		<tr style="background-color:#2966c2">
     		<td>
     		<h1 id="header" style="color: #FFFFFF" align="center">UPDATE DATA HERE</h1>
     		</td>
     		</tr>
 		</table>
     	<br>
		
					
		<table id="Demo" style="background-color: powderblue;" align="center">
			<tr><form method="POST">
			    <td>Rental Date<input type="text" name="rd" value="<?php echo $rows['RENTAL_DATE'] ?>"</td>
		        <td>Inventory ID<input type="number" name="invid" value="<?php echo $rows['INVENTORY_ID'] ?>"</td>
		         <td>Customer ID<input type="number" name="cusid" value="<?php echo $rows['CUSTOMER_ID'] ?>"</td>
			    
			</tr>
			<tr>
				<td>Return Date<input type="text" name="rtnd" value="<?php echo $rows['RETURN_DATE'] ?>"</td>
			    <td>Staff ID<input type="number" name="sid" value="<?php echo $rows['STAFF_ID'] ?>"</td>
			    <td>Last Update<input type="text" name="lastupdate" value="<?php echo $rows['LAST_UPDATE'] ?>"</td>
			    <td><input type="submit" name="updater" value="UPDATE"></td>
			</form></tr>
      	</table>
    </body> 