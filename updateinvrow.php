<?php
    include_once ('connect.php');
    
    $invid = $_GET['invid'];
    $result = mysqli_query($conn,"SELECT * FROM INVENTORY WHERE INVENTORY_ID='$invid'");
    $rows = mysqli_fetch_array($result);
    
    if(isset($_POST['updateinv']))
    {
        $fid = $_POST['filmid'];
        $sid = $_POST['storeid'];
        $lastupdate = $_POST['lastupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE INVENTORY SET FILM_ID='$fid', STORE_ID='$sid', LAST_UPDATE='$lastupdate' WHERE INVENTORY_ID='$invid';");
        
        if ($update)
        {
            header("refresh:1; url=inventory.php");
        }
        else
        {
            echo "Not updated";
        }
    }
?>
	
	<head>
		<title> SAKILA | INVENTORY UPDATE</title>
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
			    <td>Film ID<input type="number" name="filmid" value="<?php echo $rows['FILM_ID'] ?>"</td>
			    <td>Store ID<input type="number" name="storeid" value="<?php echo $rows['STORE_ID'] ?>"</td>
			    <td>Last Update<input type="text" name="lastupdate" value="<?php echo $rows['LAST_UPDATE'] ?>"</td>
			    <td><input type="submit" name="updateinv" value="UPDATE">
			</form></td>
      	</table>
    </body> 