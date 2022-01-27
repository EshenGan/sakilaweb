<?php
    include_once ('connect.php');
    
$payid = $_GET['payid'];
    $result = mysqli_query($conn,"SELECT * FROM PAYMENT WHERE PAYMENT_ID='$payid'");
    $rows = mysqli_fetch_array($result);
    if(isset($_POST['updatepay']))
    {
        $cusid = $_POST['cusid'];
        $sid = $_POST['staffid'];
        $rentalid = $_POST['rentalid'];
        $amount = $_POST['amount'];
        $pdate = $_POST['pdate'];
        $lastupdate = $_POST['lastupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE PAYMENT SET CUSTOMER_ID='$cusid', STAFF_ID='$sid', RENTAL_ID='$rentalid', AMOUNT='$amount', PAYMENT_DATE='$pdate', LAST_UPDATE='$lastupdate' WHERE PAYMENT_ID='$payid';");
        
        if ($update)
        {
            header("refresh:1; url=payment.php");
        }
        else
        {
            echo "Not updated";
        }
    }
?>
	
	<head>
		<title> SAKILA | PAYMENT UPDATE</title>
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
			    <td>Customer ID<input type="number" name="cusid" value="<?php echo $rows['CUSTOMER_ID'] ?>"</td>
		        <td>Staff ID<input type="number" name="staffid" value="<?php echo $rows['STAFF_ID'] ?>"</td>
		         <td>Rental ID<input type="number" name="rentalid" value="<?php echo $rows['RENTAL_ID'] ?>"</td>
			    
			</tr>
			<tr>
				<td>Amount<input type="number" name="amount" value="<?php echo $rows['AMOUNT'] ?>"</td>
			    <td>Payment Date<input type="text" name="pdate" value="<?php echo $rows['PAYMENT_DATE'] ?>"</td>
			    <td>Last Update<input type="text" name="lastupdate" value="<?php echo $rows['LAST_UPDATE'] ?>"</td>
			    <td><input type="submit" name="updatepay" value="UPDATE"></td>
			</form></tr>
      	</table>
    </body> 