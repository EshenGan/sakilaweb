<?php
    include_once ('connect.php');
    
$addid = $_GET['addid'];
    $result = mysqli_query($conn,"SELECT * FROM ADDRESS WHERE ADDRESS_ID='$addid'");
    $rows = mysqli_fetch_array($result);
    
    if(isset($_POST['updateadd']))
    {
        $add = $_POST['add'];
        $add2 = $_POST['add2'];
        $district = $_POST['district'];
        $cityid = $_POST['cityid'];
        $pc = $_POST['pc'];
        $phone = $_POST['phone'];
        $lastupdate = $_POST['lastupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE ADDRESS SET ADDRESS='$add',ADDRESS2='$add2', DISTRICT='$district', CITY_ID='$cityid', POSTAL_CODE='$pc', PHONE='$phone', LAST_UPDATE='$lastupdate' WHERE ADDRESS_ID='$addid';");
        
        if ($update)
        {
            header("refresh:1; url=address.php");
        }
        else
        {
            echo "Not updated";
        }
    }
?>
	
	<head>
		<title> SAKILA | ADDRESS UPDATE</title>
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
			    <td>Address<input type="text" name="add" value="<?php echo $rows['ADDRESS'] ?>"</td>
		        <td>Address2<input type="text" name="add2" value="<?php echo $rows['ADDRESS2'] ?>"</td>
			    <td>District<input type="text" name="district" value="<?php echo $rows['DISTRICT'] ?>"</td>
			    <td>City ID<input type="number" name="cityid" value="<?php echo $rows['CITY_ID'] ?>"</td>
			</tr>
			<tr>
			    <td>Postal Code<input type="number" name="pc" value="<?php echo $rows['POSTAL_CODE'] ?>"</td>
			    <td>Phone<input type="number" name="phone" value="<?php echo $rows['PHONE'] ?>"</td>
			    <td>Last Update<input type="text" name="lastupdate" value="<?php echo $rows['LAST_UPDATE'] ?>"</td>
			    <td><input type="submit" name="updateadd" value="UPDATE"></td>
			</form></tr>
      	</table>
    </body> 