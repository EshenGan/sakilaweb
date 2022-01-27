<?php
    include_once ('connect.php');
    
    $filmtid = $_GET['filmtid'];
    $result = mysqli_query($conn,"SELECT * FROM FILM_TEXT WHERE FILM_ID='$filmtid'");
    $rows = mysqli_fetch_array($result);
    
    if(isset($_POST['updatefilmt']))
    {
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        
        
        $update = mysqli_query($conn,"UPDATE FILM_TEXT SET TITLE='$title', DESCRIPTION='$desc' WHERE FILM_ID='$filmtid';");
        
        if ($update)
        {
            header("refresh:1; url=film_text.php");
        }
        else
        {
            echo "Not updated";
        }
    }
?>
	
	<head>
		<title> SAKILA | FILM DESCRIPTION UPDATE</title>
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
			    <td>Title<input type="text" name="title" value="<?php echo $rows['TITLE'] ?>"</td>
			    <td>Description<input type="text" name="desc" value="<?php echo $rows['DESCRIPTION'] ?>"</td>
			    <td><input type="submit" name="updatefilmt" value="UPDATE">
			</form></td>
      	</table>
    </body> 