<?php
    include_once ('connect.php');
    
    $actorid = $_GET['actorid'];
    $result = mysqli_query($conn,"SELECT * FROM ACTOR WHERE ACTOR_ID='$actorid'");
    $rows = mysqli_fetch_array($result);
    
    if(isset($_POST['updateactor']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $lastupdate = $_POST['lastupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE ACTOR SET FIRST_NAME='$fname',LAST_NAME='$lname',LAST_UPDATE='$lastupdate' WHERE ACTOR_ID='$actorid';");
        
        if ($update)
        {
            header("refresh:1; url=actor.php");
        }
        else
        {
            echo "Not updated";
        }
    }
?>
	
	<head>
		<title> SAKILA | ACTOR UPDATE</title>
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
		
		<div style="overflow-x:auto;">			
		<table id="Demo" style="background-color: powderblue;" align="center">
			<tr><form method="POST">
			    <td>First Name<input type="text" name="fname" value="<?php echo $rows['FIRST_NAME'] ?>"</td>
		        <td>Last Name<input type="text" name="lname" value="<?php echo $rows['LAST_NAME'] ?>"</td>
			    <td>Last Update<input type="text" name="lastupdate" value="<?php echo $rows['LAST_UPDATE'] ?>"</td>
			    <td><input type="submit" name="updateactor" value="UPDATE">
			</form></td>
      	</table>
      	</div>
    </body> 