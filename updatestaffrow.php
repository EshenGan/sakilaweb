<?php
    include_once ('connect.php');
    
$staffid = $_GET['staffid'];
    $result = mysqli_query($conn,"SELECT * FROM STAFF WHERE STAFF_ID='$staffid'");
    $rows = mysqli_fetch_array($result);
    if(isset($_POST['updatestaff']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $aid = $_POST['aid'];
        $pic = $_POST['pic'];
        $email = $_POST['email'];
        $sid = $_POST['sid'];
        $active = $_POST['active'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $lastupdate = $_POST['lastupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE STAFF SET FIRST_NAME='$fname', LAST_NAME='$lname', ADDRESS_ID='$aid', PICTURE='$pic', EMAIL='$email', STORE_ID='$sid', ACTIVE='$active', USERNAME='$username', PASSWORD='$pass', LAST_UPDATE='$lastupdate' WHERE STAFF_ID='$staffid';");
        
        if ($update)
        {
            header("refresh:1; url=staff.php");
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
			    <td>First Name<input type="text" name="fname" value="<?php echo $rows['FIRST_NAME'] ?>"</td>
		        <td>Last Name<input type="text" name="lname" value="<?php echo $rows['LAST_NAME'] ?>"</td>
		         <td>Address ID<input type="number" name="aid" value="<?php echo $rows['ADDRESS_ID'] ?>"</td>
		         <td>Picture<input type="file" name="pic" value="<?php echo $rows['PICTURE'] ?>"</td>
		         <td>Email<input type="email" name="email" value="<?php echo $rows['EMAIL'] ?>"</td>
			    
			</tr>
			<tr>
				<td>Store ID<input type="number" name="sid" value="<?php echo $rows['STORE_ID'] ?>"</td>
			    <td>Active<input type="number" name="active" value="<?php echo $rows['ACTIVE'] ?>"</td>
			    <td>Username<input type="text" name="username" value="<?php echo $rows['USERNAME'] ?>"</td>
			    <td>Password<input type="password" name="pass" value="<?php echo $rows['PASSWORD'] ?>"</td>
			    <td>Last Update<input type="text" name="lastupdate" value="<?php echo $rows['LAST_UPDATE'] ?>"</td>
			    <td><input type="submit" name="updatestaff" value="UPDATE"></td>
			</form></tr>
      	</table>
    </body> 