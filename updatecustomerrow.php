<?php
    include_once ('connect.php');
    
    $customerid = $_GET['customerid'];
    $result = mysqli_query($conn,"SELECT * FROM CUSTOMER WHERE CUSTOMER_ID='$customerid'");
    $rows = mysqli_fetch_array($result);
    
    if(isset($_POST['updatecustomer']))
    {
        $storeid = $_POST['storeid'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $addressid = $_POST['addressid'];
        $active = $_POST['active'];
        $createdate = $_POST['createdate'];
        $lastupdate = $_POST['lastupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE CUSTOMER SET STORE_ID='$storeid',FIRST_NAME='$fname', 
        LAST_NAME='$lname', EMAIL='$email', ADDRESS_ID='$addressid', 
        ACTIVE='$active', CREATE_DATE='$createdate', LAST_UPDATE='$lastupdate' WHERE CUSTOMER_ID='$customerid';");
        
        if ($update)
        {
            header("refresh:1; url=customer.php");
        }
        else
        {
            echo "Not updated";
        }
    }
?>
	
	<head>
		<title> SAKILA | CUSTOMER UPDATE</title>
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
			    <td>Store ID<input type="number" name="storeid" value="<?php echo $rows['STORE_ID'] ?>"</td>
		        <td>First Name<input type="text" name="fname" value="<?php echo $rows['FIRST_NAME'] ?>"</td>
			    <td>Last Name<input type="text" name="lname" value="<?php echo $rows['LAST_NAME'] ?>"</td>
			    <td>Email<input type="text" name="email" value="<?php echo $rows['EMAIL'] ?>"</td>
			</tr>
		     <tr>
			    <td>Address ID<input type="number" name="addressid" value="<?php echo $rows['ADDRESS_ID'] ?>"</td>
			    <td>Active<input type="number" name="active" value="<?php echo $rows['ACTIVE'] ?>"</td>
			    <td>Create Date<input type="text" name="createdate" value="<?php echo $rows['CREATE_DATE'] ?>"</td>
			    <td>Last Update<input type="text" name="lastupdate" value="<?php echo $rows['LAST_UPDATE'] ?>"</td>
			    <td><input type="submit" name="updatecustomer" value="UPDATE">
      		</form></tr>
      	</table>
    </body> 