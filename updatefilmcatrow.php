<?php
    include_once ('connect.php');
    
    $fcid = $_GET['filmcatid'];
    $result = mysqli_query($conn,"SELECT * FROM FILM_CATEGORY WHERE FILM_ID='$fcid'");
    $rows = mysqli_fetch_array($result);
    
    if(isset($_POST['updatefilmcat']))
    {
        $catid = $_POST['catid'];
        $lastupdate = $_POST['lastupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE FILM_CATEGORY SET CATEGORY_ID='$catid',LAST_UPDATE='$lastupdate' WHERE FILM_ID='$fcid';");
        
        if ($update)
        {
            header("refresh:1; url=film_actor.php");
        }
        else
        {
            echo "Not updated";
        }
    }
?>
	
	<head>
		<title> SAKILA | FILM CATEGORY UPDATE</title>
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
			    <td>Category ID<input type="number" name="catid" value="<?php echo $rows['CATEGORY_ID'] ?>"</td>
			    <td>Last Update<input type="text" name="lastupdate" value="<?php echo $rows['LAST_UPDATE'] ?>"</td>
			    <td><input type="submit" name="updatefilmcat" value="UPDATE">
			</form></td>
      	</table>
    </body> 