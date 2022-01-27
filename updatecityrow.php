<?php
    include_once ('connect.php');
    
    $cityid = $_GET['cityid'];
    $result = mysqli_query($conn,"SELECT * FROM CITY WHERE CITY_ID='$cityid'");
    $rows = mysqli_fetch_array($result);
    
    if(isset($_POST['updatecity']))
    {
        $city = $_POST['city'];
        $countid = $_POST['countid'];
        $lastupdate = $_POST['lastupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE CITY SET CITY='$city',COUNTRY_ID='$countid',LAST_UPDATE='$lastupdate' WHERE CITY_ID='$cityid';");
        
        if ($update)
        {
            header("refresh:1; url=city.php");
        }
        else
        {
            echo "Not updated";
        }
    }
?>
	
	<head>
		<title> SAKILA | CITY UPDATE</title>
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
			    <td>City<input type="text" name="city" value="<?php echo $rows['CITY'] ?>"</td>
		        <td>Country ID<input type="number" name="countid" value="<?php echo $rows['COUNTRY_ID'] ?>"</td>
			    <td>Last Update<input type="text" name="lastupdate" value="<?php echo $rows['LAST_UPDATE'] ?>"</td>
			    <td><input type="submit" name="updatecity" value="UPDATE">
			</form></td>
      	</table>
    </body> 