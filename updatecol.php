<?php
include_once ('connect.php');

/* Customer Table Query */
    if(isset($_POST['updatecustomercol']))
    {
        $storeidcol = $_POST['storeidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE CUSTOMER SET STORE_ID='$storeidcol'");
        
        if ($update)
        {
            header("refresh:1; url=customer.php");
        }
        else
        {
            echo "Not updated";
        }
    }
    
    if(isset($_POST['activeidupdate']))
    {
        $activeidcol = $_POST['activeidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE CUSTOMER SET ACTIVE='$activeidcol'");
        
        if ($update)
        {
            header("refresh:1; url=customer.php");
        }
        else
        {
            echo "Not updated";
        }
    }
    
    if(isset($_POST['createdateidupdate']))
    {
        $createdateidcol = $_POST['createdateidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE CUSTOMER SET CREATE_DATE='$createdateidcol'");
        
        if ($update)
        {
            header("refresh:1; url=customer.php");
        }
        else
        {
            echo "Not updated";
        }
    }
    
    if(isset($_POST['lastupdateidupdate']))
    {
        $lastupdateidcol = $_POST['lastupdateidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE CUSTOMER SET LAST_UPDATE='$lastupdateidcol'");
        
        if ($update)
        {
            header("refresh:1; url=customer.php");
        }
        else
        {
            echo "Not updated";
        }
    }

/*Customer Table Query End*/

/* Actor Table Query */
     if(isset($_POST['actorluidupdate']))
    {
        $lucol = $_POST['actorluidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE ACTOR SET LAST_UPDATE='$lucol'");
        
        if ($update)
        {
            header("refresh:1; url=actor.php");
        }
        else
        {
            echo "Not updated";
        }
    }
/* Actor Table Query End */ 

/* Address Table Query */
     if(isset($_POST['addluidupdate']))
    {
        $lucol = $_POST['addluidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE ADDRESS SET LAST_UPDATE='$lucol'");
        
        if ($update)
        {
            header("refresh:1; url=address.php");
        }
        else
        {
            echo "Not updated";
        }
    }
/* Address Table Query End */ 

/* Category Table Query */
     if(isset($_POST['catluidupdate']))
    {
        $lucol = $_POST['catluidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE CATEGORY SET LAST_UPDATE='$lucol'");
        
        if ($update)
        {
            header("refresh:1; url=category.php");
        }
        else
        {
            echo "Not updated";
        }
    }
/* Category Table Query End */ 

/* City Table Query */
     if(isset($_POST['cityluidupdate']))
    {
        $lucol = $_POST['cityluidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE CITY SET LAST_UPDATE='$lucol'");
        
        if ($update)
        {
            header("refresh:1; url=city.php");
        }
        else
        {
            echo "Not updated";
        }
    }
/* City Table Query End */

/* Country Table Query */
     if(isset($_POST['countryluidupdate']))
    {
        $lucol = $_POST['countryluidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE COUNTRY SET LAST_UPDATE='$lucol'");
        
        if ($update)
        {
            header("refresh:1; url=country.php");
        }
        else
        {
            echo "Not updated";
        }
    }
/* Country Table Query End */

/* Film Table Query */
     if(isset($_POST['filmluidupdate']))
    {
        $lucol = $_POST['filmluidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE FILM SET LAST_UPDATE='$lucol'");
        
        if ($update)
        {
            header("refresh:1; url=film.php");
        }
        else
        {
            echo "Not updated";
        }
    }
/* Film Table Query End */

/* Film Actor Table Query */
     if(isset($_POST['filmactorluidupdate']))
    {
        $lucol = $_POST['filmactorluidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE FILM_ACTOR SET LAST_UPDATE='$lucol'");
        
        if ($update)
        {
            header("refresh:1; url=film_actor.php");
        }
        else
        {
            echo "Not updated";
        }
    }
/* Film Actor Table Query End */

/* Film Category Table Query */
     if(isset($_POST['filmcatluidupdate']))
    {
        $lucol = $_POST['filmcatluidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE FILM_CATEGORY SET LAST_UPDATE='$lucol'");
        
        if ($update)
        {
            header("refresh:1; url=film_category.php");
        }
        else
        {
            echo "Not updated";
        }
    }
/* Film Category Table Query End */

/* Inventory Table Query */
     if(isset($_POST['invstoreidupdate']))
    {
        $storeidcol = $_POST['invstoreidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE INVENTORY SET STORE_ID='$storeidcol'");
        
        if ($update)
        {
            header("refresh:1; url=inventory.php");
        }
        else
        {
            echo "Not updated";
        }
    }
    
         if(isset($_POST['invluidupdate']))
    {
        $lucol = $_POST['invluidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE INVENTORY SET LAST_UPDATE='$lucol'");
        
        if ($update)
        {
            header("refresh:1; url=inventory.php");
        }
        else
        {
            echo "Not updated";
        }
    }
/* Inventory Table Query End */

/* Language Table Query */
         if(isset($_POST['langluidupdate']))
    {
        $lucol = $_POST['langluidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE LANGUAGE SET LAST_UPDATE='$lucol'");
        
        if ($update)
        {
            header("refresh:1; url=language.php");
        }
        else
        {
            echo "Not updated";
        }
    }
/* Language Table Query End */

/* Payment Table Query */
     if(isset($_POST['paystaffidupdate']))
    {
        $psidcol = $_POST['paystaffidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE PAYMENT SET STAFF_ID='$psidcol'");
        
        if ($update)
        {
            header("refresh:1; url=payment.php");
        }
        else
        {
            echo "Not updated";
        }
    }
    
         if(isset($_POST['payluidupdate']))
    {
        $lucol = $_POST['payluidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE PAYMENT SET LAST_UPDATE='$lucol'");
        
        if ($update)
        {
            header("refresh:1; url=payment.php");
        }
        else
        {
            echo "Not updated";
        }
    }
/* Payment Table Query End */

/* Rental Table Query */
     if(isset($_POST['rstaffidupdate']))
    {
        $rsidcol = $_POST['rstaffidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE RENTAL SET STAFF_ID='$rsidcol'");
        
        if ($update)
        {
            header("refresh:1; url=rental.php");
        }
        else
        {
            echo "Not updated";
        }
    }
    
         if(isset($_POST['rluidupdate']))
    {
        $lucol = $_POST['rluidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE RENTAL SET LAST_UPDATE='$lucol'");
        
        if ($update)
        {
            header("refresh:1; url=rental.php");
        }
        else
        {
            echo "Not updated";
        }
    }
/* Rental Table Query End */

/* Staff Table Query */
     if(isset($_POST['staffstoreidupdate']))
    {
        $ssidcol = $_POST['staffstoreidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE STAFF SET STORE_ID='$ssidcol'");
        
        if ($update)
        {
            header("refresh:1; url=staff.php");
        }
        else
        {
            echo "Not updated";
        }
    }
    
    if(isset($_POST['staffactiveidupdate']))
    {
        $sacol = $_POST['staffactiveidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE STAFF SET ACTIVE='$sacol'");
        
        if ($update)
        {
            header("refresh:1; url=staff.php");
        }
        else
        {
            echo "Not updated";
        }
    }
    
    if(isset($_POST['staffluidupdate']))
    {
        $lucol = $_POST['staffluidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE STAFF SET LAST_UPDATE='$lucol'");
        
        if ($update)
        {
            header("refresh:1; url=staff.php");
        }
        else
        {
            echo "Not updated";
        }
    }
/* Staff Table Query End */

/* Store Table Query */
         if(isset($_POST['strluidupdate']))
    {
        $lucol = $_POST['strluidcolupdate'];
        
        
        $update = mysqli_query($conn,"UPDATE STORE SET LAST_UPDATE='$lucol'");
        
        if ($update)
        {
            header("refresh:1; url=store.php");
        }
        else
        {
            echo "Not updated";
        }
    }
/* Store Table Query End */
?>




	<head>
		<title> SAKILA | UPDATE COLUMN</title>
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

<!-- Customer Table Update Col Form -->
	<?php
		if(isset($_POST['storeidcol']))	
		{
	?>
	<div style="overflow-x:auto;">
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Store ID column:<input type="text" name="storeidcolupdate"></td>
			    <td><input type="submit" name="updatecustomercol" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
      </div>
    <?php
    	}
  	?>
  	
  	<?php
		if(isset($_POST['activeid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Active column:<input type="text" name="activeidcolupdate"></td>
			    <td><input type="submit" name="activeidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	
  	  	<?php
		if(isset($_POST['createdateid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Create Date column:<input type="text" name="createdateidcolupdate"></td>
			    <td><input type="submit" name="createdateidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	
  	  	<?php
		if(isset($_POST['lastupdateid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Last Update column:<input type="text" name="lastupdateidcolupdate"></td>
			    <td><input type="submit" name="lastupdateidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  <!-- Customer Table Update Col Form End -->
  
  <!-- Actor Table Update Col Form -->
  	<?php
		if(isset($_POST['actorluid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Last Update column:<input type="text" name="actorluidcolupdate"></td>
			    <td><input type="submit" name="actorluidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	<!-- Actor Table Update Col Form End -->
  	
  	 <!-- Address Table Update Col Form -->
  	<?php
		if(isset($_POST['addluid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Last Update column:<input type="text" name="addluidcolupdate"></td>
			    <td><input type="submit" name="addluidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	<!-- Address Table Update Col Form End -->
  	
  	 <!-- Category Table Update Col Form -->
  	<?php
		if(isset($_POST['catluid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Last Update column:<input type="text" name="catluidcolupdate"></td>
			    <td><input type="submit" name="catluidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	<!-- Category Table Update Col Form End -->
  	
  	 <!-- City Table Update Col Form -->
  	<?php
		if(isset($_POST['cityluid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Last Update column:<input type="text" name="cityluidcolupdate"></td>
			    <td><input type="submit" name="cityluidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	<!-- City Table Update Col Form End -->
  	
  	 <!-- Country Table Update Col Form -->
  	<?php
		if(isset($_POST['countryluid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Last Update column:<input type="text" name="countryluidcolupdate"></td>
			    <td><input type="submit" name="countryluidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	<!-- Country Table Update Col Form End -->
  	
  	  	 <!-- Film Table Update Col Form -->
  	<?php
		if(isset($_POST['filmluid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Last Update column:<input type="text" name="filmluidcolupdate"></td>
			    <td><input type="submit" name="filmluidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	<!-- Film Table Update Col Form End -->
  	
  	<!-- Film Actor Table Update Col Form -->
  	<?php
		if(isset($_POST['filmactorluid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Last Update column:<input type="text" name="filmactorluidcolupdate"></td>
			    <td><input type="submit" name="filmactorluidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	<!-- Film Actor Table Update Col Form End -->
  	
  	<!-- Film Category Table Update Col Form -->
  	<?php
		if(isset($_POST['filmcatluid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Last Update column:<input type="text" name="filmcatluidcolupdate"></td>
			    <td><input type="submit" name="filmcatluidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	<!-- Film Category Table Update Col Form End -->
  	
  	<!-- Inventory Table Update Col Form -->
  	<?php
		if(isset($_POST['invstoreid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Store ID column:<input type="number" name="invstoreidcolupdate"></td>
			    <td><input type="submit" name="invstoreidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	
  	<?php
		if(isset($_POST['invluid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Last Update column:<input type="text" name="invluidcolupdate"></td>
			    <td><input type="submit" name="invluidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	<!-- Inventory Table Update Col Form End -->
  	
  	<!-- Language Table Update Col Form -->
  	<?php
		if(isset($_POST['langluid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Last Update column:<input type="text" name="langluidcolupdate"></td>
			    <td><input type="submit" name="langluidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	<!-- Language Table Update Col Form End -->
  	
  	<!-- Payment Table Update Col Form -->
  	<?php
		if(isset($_POST['paystaffid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Staff ID column:<input type="text" name="paystaffidcolupdate"></td>
			    <td><input type="submit" name="paystaffidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	
  	<?php
		if(isset($_POST['payluid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Last Update column:<input type="text" name="payluidcolupdate"></td>
			    <td><input type="submit" name="payluidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	<!-- Payment Table Update Col Form End -->
  	
  	<!-- Rental Table Update Col Form -->
  	<?php
		if(isset($_POST['rstaffid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Staff ID column:<input type="text" name="rstaffidcolupdate"></td>
			    <td><input type="submit" name="rstaffidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	
  	<?php
		if(isset($_POST['rluid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Last Update column:<input type="text" name="rluidcolupdate"></td>
			    <td><input type="submit" name="rluidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	<!-- Rental Table Update Col Form End -->
  	
  	
  	<!-- Staff Table Update Col Form -->
  	<?php
		if(isset($_POST['staffstoreid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Store ID column:<input type="text" name="staffstoreidcolupdate"></td>
			    <td><input type="submit" name="staffstoreidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	
  	<?php
		if(isset($_POST['staffactiveid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Active column:<input type="text" name="staffactiveidcolupdate"></td>
			    <td><input type="submit" name="staffactiveidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	
  	<?php
		if(isset($_POST['staffluid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Last Update column:<input type="text" name="staffluidcolupdate"></td>
			    <td><input type="submit" name="staffluidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	<!-- Staff Table Update Col Form End -->
  	
  	<!-- Store Table Update Col Form -->
  	<?php
		if(isset($_POST['strluid']))	
		{
	?>
		<form method="POST">				
	    <table id="Demo" style="background-color: powderblue;" align="center">
			<tr>
			    <td>Update Last Update column:<input type="text" name="strluidcolupdate"></td>
			    <td><input type="submit" name="strluidupdate" value="UPDATE"></td>
			    </tr>
      	</table>
      	</form>
    <?php
    	}
  	?>
  	<!-- Store Table Update Col Form End -->
    </body> 