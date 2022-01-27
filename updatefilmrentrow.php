<?php
    include_once ('connect.php');
    
$filmrentid = $_GET['filmrentid'];
    $result = mysqli_query($conn,"SELECT * FROM FILM_RENTAL WHERE FILM_ID='$filmrentid'");
    $rows = mysqli_fetch_array($result);
    if(isset($_POST['updatefilmrent']))
    {
        $rd = $_POST['rd'];
        $rr = $_POST['rr'];
        $length = $_POST['length'];
        $rc = $_POST['rc'];
        
        
        $update = mysqli_query($conn,"UPDATE FILM_RENTAL SET RENTAL_DURATION='$rd', RENTAL_RATE='$rr', LENGTH='$length', REPLACEMENT_COST='$rc' WHERE FILM_ID='$filmrentid';");
        
        if ($update)
        {
            header("refresh:1; url=film_rental.php");
        }
        else
        {
            echo "Not updated";
        }
    }
?>
	
	<head>
		<title> SAKILA | FILM RENTAL UPDATE</title>
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
			    <td>Rental Duration<input type="number" name="rd" value="<?php echo $rows['RENTAL_DURATION'] ?>"</td>
		        <td>Rental Rate<input step="0.01" type="number" name="rr" value="<?php echo $rows['RENTAL_RATE'] ?>"</td>
			    
			</tr>
			<tr>
				<td>Length<input type="text" name="length" value="<?php echo $rows['LENGTH'] ?>"</td>
			    <td>Replacement Cost<input step="0.01" type="number" name="rc" value="<?php echo $rows['REPLACEMENT_COST'] ?>"</td>
			    <td><input type="submit" name="updatefilmrent" value="UPDATE"></td>
			</form></tr>
      	</table>
    </body> 