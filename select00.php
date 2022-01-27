<?php

	include_once('connect.php');
	
/* SELECT ACTOR */
if(!empty($_POST['actor'])){
    
	    if(isset($_POST['actor']))
		{
			$actor = $_POST['actor'];
			if( is_array($actor) || is_object($actor)){
			    echo "<button><a href='select.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
    		foreach( $actor as $value){
    			$cols = implode(',',$actor);
    			$disp= str_replace('_',' ',$value);
    			echo "<th>";
    			echo $disp;
    			echo "</th>";
    		}
    		        echo "</tr>";
			}// end of is_array 
			
		} // end of isset
		else{
			    echo " error";
		}
			
    	      
    		$sqlsel = "SELECT ".$cols." FROM ACTOR;";
    		
    		        //checking for specific ID
    				 if(isset($_POST['specID'])){
	                         $specid = $_POST['specID'];
	                    }
	               	if(!empty($_POST['specID'])){
	                $sqlsel = "SELECT ".$cols." FROM ACTOR WHERE ACTOR_ID=".$_POST['specID'].";";
	                    }
	                // end of checking for specific ID   
	                    
			$sel = mysqli_query($conn,$sqlsel);
						while($row=mysqli_fetch_assoc($sel)){
						echo"<tr>";
						
						foreach( $row as $k=>$v){
							echo "<td>".$v."</td>";
						} // end of foreach loop
						
						echo"</tr>";
						
					} //end of while loop
	        
		            echo "</table>";
	mysqli_free_result($sel);   
}//end of !empty()


/* SELECT ADDRESS */
if(!empty($_POST['address'])){

	    if(isset($_POST['address']))
		{
			$address = $_POST['address'];
			if( is_array($address) || is_object($address)){
			    echo "<button><a href='select.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
    		foreach( $address as $value){
    			$cols = implode(',',$address);
    			$disp= str_replace('_',' ',$value);
    			echo "<th>";
    			echo $disp;
    			echo "</th>";
    		}
    		        echo "</tr>";
			}
		}
		else{
			    echo " error";
		 }
    		        
    		$sqlsel = "SELECT ".$cols." FROM ADDRESS;";
    		
    		        //checking for specific ID
    				 if(isset($_POST['specaddID'])){
	                         $specid = $_POST['specaddID'];
	                    }
	               	if(!empty($_POST['specaddID'])){
	                $sqlsel = "SELECT ".$cols." FROM ADDRESS WHERE ADDRESS_ID=".$specid.";";
	                    }
	                // end of checking for specific ID   
	                    
			$sel = mysqli_query($conn,$sqlsel);
						while($row=mysqli_fetch_assoc($sel)){
						echo"<tr>";
						
						foreach( $row as $k=>$v){
							echo "<td>".$v."</td>";
						} // end of foreach loop
						
						echo"</tr>";
						
					} //end of while loop
	        
		    echo "</table>";
	mysqli_free_result($sel);
	
}//end of !empty()	

		    
		
/* SELECT CATEGORY */
if(!empty($_POST['category']))
{
    
	    if(isset($_POST['category']))
		{
			$category = $_POST['category'];
			if( is_array($category) || is_object($category)){
			    echo "<button><a href='select.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
    		foreach( $category as $value){
    			$cols = implode(',',$category);
    			$disp= str_replace('_',' ',$value);
    			echo "<th>";
    			echo $disp;
    			echo "</th>";
    		}
    		        echo "</tr>";
			}//end of is array
			else{
			    echo " error";
			}

		}//end of isset
    		        
    		$sqlsel = "SELECT ".$cols." FROM CATEGORY;";
    		
    		        //checking for specific ID
    				 if(isset($_POST['speccatID'])){
	                         $specid = $_POST['speccatID'];
	                    }
	               	if(!empty($_POST['speccatID'])){
	                $sqlsel = "SELECT ".$cols." FROM CATEGORY WHERE CATEGORY_ID=".$specid.";";
	                    }
	                // end of checking for specific ID   
	                    
			$sel = mysqli_query($conn,$sqlsel);
						while($row=mysqli_fetch_assoc($sel)){
						echo"<tr>";
						
						foreach( $row as $k=>$v){
							echo "<td>".$v."</td>";
						} // end of foreach loop
						
						echo"</tr>";
						
					} //end of while loop
	        
		    echo "</table>";
		    mysqli_free_result($sel);
}

if(!empty($_POST['city']))
{
    
	    if(isset($_POST['city']))
		{
			$city = $_POST['city'];
			if( is_array($city) || is_object($city)){
			    echo "<button><a href='select.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
    		foreach( $city as $value){
    			$cols = implode(',',$city);
    			$disp= str_replace('_',' ',$value);
    			echo "<th>";
    			echo $disp;
    			echo "</th>";
    		}
    		        echo "</tr>";
			}//end of is array
			else{
			    echo " error";
			}

		}//end of isset
    		        
    		$sqlsel = "SELECT ".$cols." FROM CITY;";
    		
    		        //checking for specific ID
    				 if(isset($_POST['speccityID'])){
	                         $specid = $_POST['speccityID'];
	                    }
	               	if(!empty($_POST['speccityID'])){
	                $sqlsel = "SELECT ".$cols." FROM CITY WHERE CITY_ID=".$specid.";";
	                    }
	                // end of checking for specific ID   
	                    
			$sel = mysqli_query($conn,$sqlsel);
						while($row=mysqli_fetch_assoc($sel)){
						echo"<tr>";
						
						foreach( $row as $k=>$v){
							echo "<td>".$v."</td>";
						} // end of foreach loop
						
						echo"</tr>";
						
					} //end of while loop
	        
		    echo "</table>";
		    mysqli_free_result($sel);
}

if(!empty($_POST['country']))
{
    
	    if(isset($_POST['country']))
		{
			$country = $_POST['country'];
			if( is_array($country) || is_object($country)){
			    echo "<button><a href='select.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
    		foreach( $country as $value){
    			$cols = implode(',',$country);
    			$disp= str_replace('_',' ',$value);
    			echo "<th>";
    			echo $disp;
    			echo "</th>";
    		}
    		        echo "</tr>";
			}//end of is array
			else{
			    echo " error";
			}

		}//end of isset
    		        
    		$sqlsel = "SELECT ".$cols." FROM COUNTRY;";
    		
    		        //checking for specific ID
    				 if(isset($_POST['speccountryID'])){
	                         $specid = $_POST['speccountryID'];
	                    }
	               	if(!empty($_POST['speccountryID'])){
	                $sqlsel = "SELECT ".$cols." FROM COUNTRY WHERE COUNTRY_ID=".$specid.";";
	                    }
	                // end of checking for specific ID   
	                    
			$sel = mysqli_query($conn,$sqlsel);
						while($row=mysqli_fetch_assoc($sel)){
						echo"<tr>";
						
						foreach( $row as $k=>$v){
							echo "<td>".$v."</td>";
						} // end of foreach loop
						
						echo"</tr>";
						
					} //end of while loop
	        
		    echo "</table>";
		    mysqli_free_result($sel);
}

if(!empty($_POST['customer']))
{
    
	    if(isset($_POST['customer']))
		{
			$customer = $_POST['customer'];
			if( is_array($customer) || is_object($customer)){
			    echo "<button><a href='select.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
    		foreach( $customer as $value){
    			$cols = implode(',',$customer);
    			$disp= str_replace('_',' ',$value);
    			echo "<th>";
    			echo $disp;
    			echo "</th>";
    		}
    		        echo "</tr>";
			}//end of is array
			else{
			    echo " error";
			}

		}//end of isset
    		        
    		$sqlsel = "SELECT ".$cols." FROM CUSTOMER;";
    		
    		        //checking for specific ID
    				 if(isset($_POST['speccustID'])){
	                         $specid = $_POST['speccustID'];
	                    }
	               	if(!empty($_POST['speccustID'])){
	                $sqlsel = "SELECT ".$cols." FROM CUSTOMER WHERE CUSTOMER_ID=".$specid.";";
	                    }
	                // end of checking for specific ID   
	                    
			$sel = mysqli_query($conn,$sqlsel);
						while($row=mysqli_fetch_assoc($sel)){
						echo"<tr>";
						
						foreach( $row as $k=>$v){
							echo "<td>".$v."</td>";
						} // end of foreach loop
						
						echo"</tr>";
						
					} //end of while loop
	        
		    echo "</table>";
		    mysqli_free_result($sel);
}

if(!empty($_POST['film']))
{
    
	    if(isset($_POST['film']))
		{
			$film = $_POST['film'];
			if( is_array($film) || is_object($film)){
			    echo "<button><a href='select.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
    		foreach($film as $value){
    			$cols = implode(',',$film);
    			$disp= str_replace('_',' ',$value);
    			echo "<th>";
    			echo $disp;
    			echo "</th>";
    		}
    		        echo "</tr>";
			}//end of is array
			else{
			    echo " error";
			}

		}//end of isset
    		        
    		$sqlsel = "SELECT ".$cols." FROM FILM;";
    		
    		        //checking for specific ID
    				 if(isset($_POST['specfilmID'])){
	                         $specid = $_POST['specfilmID'];
	                    }
	               	if(!empty($_POST['specfilmID'])){
	                $sqlsel = "SELECT ".$cols." FROM FILM WHERE FILM_ID=".$specid.";";
	                    }
	                // end of checking for specific ID   
	                    
			$sel = mysqli_query($conn,$sqlsel);
						while($row=mysqli_fetch_assoc($sel)){
						echo"<tr>";
						
						foreach( $row as $k=>$v){
							echo "<td>".$v."</td>";
						} // end of foreach loop
						
						echo"</tr>";
						
					} //end of while loop
	        
		    echo "</table>";
		    mysqli_free_result($sel);
}

if(!empty($_POST['filmactor']))
{
    
	    if(isset($_POST['filmactor']))
		{
			$filmactor = $_POST['filmactor'];
			if( is_array($filmactor) || is_object($filmactor)){
			    echo "<button><a href='select.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
    		foreach( $filmactor as $value){
    			$cols = implode(',',$filmactor);
    			$disp= str_replace('_',' ',$value);
    			echo "<th>";
    			echo $disp;
    			echo "</th>";
    		}
    		        echo "</tr>";
			}//end of is array
			else{
			    echo " error";
			}

		}//end of isset
    		        
    		$sqlsel = "SELECT ".$cols." FROM FILM_ACTOR;";
    		
    		        //checking for specific actor ID
    				if(isset($_POST['specactID'])){
	                $specid = $_POST['specactID'];
	               	if(!empty($_POST['specactID'])){
	                $sqlsel = "SELECT ".$cols." FROM FILM_ACTOR WHERE ACTOR_ID=".$specid.";";
	                    }	                         
	                }

	              
	                
    		        //checking for specific film ID
    				if(isset($_POST['specfilmID'])){
	                $specid = $_POST['specfilmID'];
	               	if(!empty($_POST['specfilmID'])){
	                $sqlsel = "SELECT ".$cols." FROM FILM_ACTOR WHERE FILM_ID=".$specid.";";
	                    }	                
	                }

	            
	                
    		        //checking for both specific ID
    		        if(isset($_POST['specactID']) && isset($_POST['specfilmID'])){
    			
	                $specid1 = $_POST['specactID'];
	                $specid2 = $_POST['specfilmID'];   
	               	if(!empty($_POST['specactID']) && !empty($_POST['specfilmID'])){
	                $sqlsel = "SELECT ".$cols." FROM FILM_ACTOR WHERE ACTOR_ID=".$specid1." AND FILM_ID=".$specid2.";";
	                    }   		            
    		        }
 
	           
	                    
			$sel = mysqli_query($conn,$sqlsel);
						while($row=mysqli_fetch_assoc($sel)){
						echo"<tr>";
						
						foreach( $row as $k=>$v){
							echo "<td>".$v."</td>";
						} // end of foreach loop
						
						echo"</tr>";
						
					} //end of while loop
	        
		    echo "</table>";
		    mysqli_free_result($sel);
}

// film category select
if(!empty($_POST['filmcategory']))
{
    
	    if(isset($_POST['filmcategory']))
		{
			$filmcategory = $_POST['filmcategory'];
			if( is_array($filmcategory) || is_object($filmcategory)){
			    echo "<button><a href='select.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
    		foreach( $filmcategory as $value){
    			$cols = implode(',',$filmcategory);
    			$disp= str_replace('_',' ',$value);
    			echo "<th>";
    			echo $disp;
    			echo "</th>";
    		}
    		        echo "</tr>";
			}//end of is array
			else{
			    echo " error";
			}

		}//end of isset
    		        
    		$sqlsel = "SELECT ".$cols." FROM FILM_CATEGORY;";
    		
    		        //checking for specific actor ID
    				if(isset($_POST['specfID'])){
	                $specid = $_POST['specfID'];
	               	if(!empty($_POST['specfID'])){
	                $sqlsel = "SELECT ".$cols." FROM FILM_CATEGORY WHERE FILM_ID=".$specid.";";
	                    }	                         
	                }

	              
	                
    		        //checking for specific film ID
    				if(isset($_POST['specIDcat'])){
	                $specid = $_POST['specIDcat'];
	               	if(!empty($_POST['specIDcat'])){
	                $sqlsel = "SELECT ".$cols." FROM FILM_CATEGORY WHERE CATEGORY_ID=".$specid.";";
	                    }	                
	                }

	            
	                
    		        //checking for both specific ID
    		        if(isset($_POST['specfID']) && isset($_POST['specIDcat'])){
    			
	                $specid1 = $_POST['specfID'];
	                $specid2 = $_POST['specIDcat'];   
	               	if(!empty($_POST['specfID']) && !empty($_POST['specIDcat'])){
	                $sqlsel = "SELECT ".$cols." FROM FILM_CATEGORY WHERE FILM_ID=".$specid1." AND CATEGORY_ID=".$specid2.";";
	                    }   		            
    		        }
 
	           
	                    
			$sel = mysqli_query($conn,$sqlsel);
						while($row=mysqli_fetch_assoc($sel)){
						echo"<tr>";
						
						foreach( $row as $k=>$v){
							echo "<td>".$v."</td>";
						} // end of foreach loop
						
						echo"</tr>";
						
					} //end of while loop
	        
		    echo "</table>";
		    mysqli_free_result($sel);
}

if(!empty($_POST['filmrental']))
{
    
	    if(isset($_POST['filmrental']))
		{
			$filmrental = $_POST['filmrental'];
			if( is_array($filmrental) || is_object($filmrental)){
			    echo "<button><a href='select.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
    		foreach($filmrental as $value){
    			$cols = implode(',',$filmrental);
    			$disp= str_replace('_',' ',$value);
    			echo "<th>";
    			echo $disp;
    			echo "</th>";
    		}
    		        echo "</tr>";
			}//end of is array
			else{
			    echo " error";
			}

		}//end of isset
    		        
    		$sqlsel = "SELECT ".$cols." FROM FILM_RENTAL;";
    		
    		        //checking for specific ID
    				 if(isset($_POST['specIDf'])){
	                         $specid = $_POST['specIDf'];
	                    }
	               	if(!empty($_POST['specIDf'])){
	                $sqlsel = "SELECT ".$cols." FROM FILM_RENTAL WHERE FILM_ID=".$specid.";";
	                    }
	                // end of checking for specific ID   
	                    
			$sel = mysqli_query($conn,$sqlsel);
						while($row=mysqli_fetch_assoc($sel)){
						echo"<tr>";
						
						foreach( $row as $k=>$v){
							echo "<td>".$v."</td>";
						} // end of foreach loop
						
						echo"</tr>";
						
					} //end of while loop
	        
		    echo "</table>";
		    mysqli_free_result($sel);
}

//text film table
if(!empty($_POST['filmt']))
{
    
	    if(isset($_POST['filmt']))
		{
			$filmt = $_POST['filmt'];
			if( is_array($filmt) || is_object($filmt)){
			    echo "<button><a href='select.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
    		foreach($filmt as $value){
    			$cols = implode(',',$filmt);
    			$disp= str_replace('_',' ',$value);
    			echo "<th>";
    			echo $disp;
    			echo "</th>";
    		}
    		        echo "</tr>";
			}//end of is array
			else{
			    echo " error";
			}

		}//end of isset
    		        
    		$sqlsel = "SELECT ".$cols." FROM FILM_TEXT;";
    		
    		        //checking for specific ID
    				 if(isset($_POST['specIDft'])){
	                         $specid = $_POST['specIDft'];
	                    }
	               	if(!empty($_POST['specIDft'])){
	                $sqlsel = "SELECT ".$cols." FROM FILM_TEXT WHERE FILM_ID=".$specid.";";
	                    }
	                // end of checking for specific ID   
	                    
			$sel = mysqli_query($conn,$sqlsel);
						while($row=mysqli_fetch_assoc($sel)){
						echo"<tr>";
						
						foreach( $row as $k=>$v){
							echo "<td>".$v."</td>";
						} // end of foreach loop
						
						echo"</tr>";
						
					} //end of while loop
	        
		    echo "</table>";
		    mysqli_free_result($sel);
}

//inventory table
if(!empty($_POST['int']))
{
    
	    if(isset($_POST['int']))
		{
			$int = $_POST['int'];
			if( is_array($int) || is_object($int)){
			    echo "<button><a href='select.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
    		foreach($int as $value){
    			$cols = implode(',',$int);
    			$disp= str_replace('_',' ',$value);
    			echo "<th>";
    			echo $disp;
    			echo "</th>";
    		}
    		        echo "</tr>";
			}//end of is array
			else{
			    echo " error";
			}

		}//end of isset
    		        
    		$sqlsel = "SELECT ".$cols." FROM INVENTORY;";
    		
    		        //checking for specific ID
    				 if(isset($_POST['speciID'])){
	                         $specid = $_POST['speciID'];
	                    }
	               	if(!empty($_POST['speciID'])){
	                $sqlsel = "SELECT ".$cols." FROM INVENTORY WHERE INVENTORY_ID=".$specid.";";
	                    }
	                // end of checking for specific ID   
	                    
			$sel = mysqli_query($conn,$sqlsel);
						while($row=mysqli_fetch_assoc($sel)){
						echo"<tr>";
						
						foreach( $row as $k=>$v){
							echo "<td>".$v."</td>";
						} // end of foreach loop
						
						echo"</tr>";
						
					} //end of while loop
	        
		    echo "</table>";
		    mysqli_free_result($sel);
}

//language table select
if(!empty($_POST['lang']))
{
    
	    if(isset($_POST['lang']))
		{
			$lang = $_POST['lang'];
			if( is_array($lang) || is_object($lang)){
			    echo "<button><a href='select.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
    		foreach($lang as $value){
    			$cols = implode(',',$lang);
    			$disp= str_replace('_',' ',$value);
    			echo "<th>";
    			echo $disp;
    			echo "</th>";
    		}
    		        echo "</tr>";
			}//end of is array
			else{
			    echo " error";
			}

		}//end of isset
    		        
    		$sqlsel = "SELECT ".$cols." FROM LANGUAGE;";
    		
    		        //checking for specific ID
    				 if(isset($_POST['speclID'])){
	                         $specid = $_POST['speclID'];
	                    }
	               	if(!empty($_POST['speclID'])){
	                $sqlsel = "SELECT ".$cols." FROM LANGUAGE WHERE LANGUAGE_ID=".$specid.";";
	                    }
	                // end of checking for specific ID   
	                    
			$sel = mysqli_query($conn,$sqlsel);
						while($row=mysqli_fetch_assoc($sel)){
						echo"<tr>";
						
						foreach( $row as $k=>$v){
							echo "<td>".$v."</td>";
						} // end of foreach loop
						
						echo"</tr>";
						
					} //end of while loop
	        
		    echo "</table>";
		    mysqli_free_result($sel);
}

//payment table select
if(!empty($_POST['pay']))
{
    
	    if(isset($_POST['pay']))
		{
			$pay = $_POST['pay'];
			if( is_array($pay) || is_object($pay)){
			    echo "<button><a href='select.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
    		foreach($pay as $value){
    			$cols = implode(',',$pay);
    			$disp= str_replace('_',' ',$value);
    			echo "<th>";
    			echo $disp;
    			echo "</th>";
    		}
    		        echo "</tr>";
			}//end of is array
			else{
			    echo " error";
			}

		}//end of isset
    		        
    		$sqlsel = "SELECT ".$cols." FROM PAYMENT;";
    		
    		        //checking for specific ID
    				 if(isset($_POST['specpID'])){
	                         $specid = $_POST['specpID'];
	                    }
	               	if(!empty($_POST['specpID'])){
	                $sqlsel = "SELECT ".$cols." FROM PAYMENT WHERE PAYMENT_ID=".$specid.";";
	                    }
	                // end of checking for specific ID   
	                    
			$sel = mysqli_query($conn,$sqlsel);
						while($row=mysqli_fetch_assoc($sel)){
						echo"<tr>";
						
						foreach( $row as $k=>$v){
							echo "<td>".$v."</td>";
						} // end of foreach loop
						
						echo"</tr>";
						
					} //end of while loop
	        
		    echo "</table>";
		    mysqli_free_result($sel);
}


//rental table select
if(!empty($_POST['rental']))
{
    
	    if(isset($_POST['rental']))
		{
			$rental = $_POST['rental'];
			if( is_array($rental) || is_object($rental)){
			    echo "<button><a href='select.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
    		foreach($rental as $value){
    			$cols = implode(',',$rental);
    			$disp= str_replace('_',' ',$value);
    			echo "<th>";
    			echo $disp;
    			echo "</th>";
    		}
    		        echo "</tr>";
			}//end of is array
			else{
			    echo " error";
			}

		}//end of isset
    		        
    		$sqlsel = "SELECT ".$cols." FROM RENTAL;";
    		
    		        //checking for specific ID
    				 if(isset($_POST['specrID'])){
	                         $specid = $_POST['specrID'];
	                    }
	               	if(!empty($_POST['specrID'])){
	                $sqlsel = "SELECT ".$cols." FROM RENTAL WHERE RENTAL_ID=".$specid.";";
	                    }
	                // end of checking for specific ID   
	                    
			$sel = mysqli_query($conn,$sqlsel);
						while($row=mysqli_fetch_assoc($sel)){
						echo"<tr>";
						
						foreach( $row as $k=>$v){
							echo "<td>".$v."</td>";
						} // end of foreach loop
						
						echo"</tr>";
						
					} //end of while loop
	        
		    echo "</table>";
		    mysqli_free_result($sel);
}


//staff table select
if(!empty($_POST['staff']))
{
    
	    if(isset($_POST['staff']))
		{
			$staff = $_POST['staff'];
			if( is_array($staff) || is_object($staff)){
			    echo "<button><a href='select.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
    		foreach($staff as $value){
    			$cols = implode(',',$staff);
    			$disp= str_replace('_',' ',$value);
    			echo "<th>";
    			echo $disp;
    			echo "</th>";
    		}
    		        echo "</tr>";
			}//end of is array
			else{
			    echo " error";
			}

		}//end of isset
    		        
    		$sqlsel = "SELECT ".$cols." FROM STAFF;";
    		
    		        //checking for specific ID
    				 if(isset($_POST['specsID'])){
	                         $specid = $_POST['specsID'];
	                    }
	               	if(!empty($_POST['specsID'])){
	                $sqlsel = "SELECT ".$cols." FROM STAFF WHERE STAFF_ID=".$specid.";";
	                    }
	                // end of checking for specific ID   
	                    
			$sel = mysqli_query($conn,$sqlsel);
						while($row=mysqli_fetch_assoc($sel)){
						echo"<tr>";
						
						foreach( $row as $k=>$v){
							echo "<td>".$v."</td>";
						} // end of foreach loop
						
						echo"</tr>";
						
					} //end of while loop
	        
		    echo "</table>";
		    mysqli_free_result($sel);
}



//STORE table select
if(!empty($_POST['store']))
{
    
	    if(isset($_POST['store']))
		{
			$store = $_POST['store'];
			if( is_array($store) || is_object($store)){
			    echo "<button><a href='select.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
    		foreach($store as $value){
    			$cols = implode(',',$store);
    			$disp= str_replace('_',' ',$value);
    			echo "<th>";
    			echo $disp;
    			echo "</th>";
    		}
    		        echo "</tr>";
			}//end of is array
			else{
			    echo " error";
			}

		}//end of isset
    		        
    		$sqlsel = "SELECT ".$cols." FROM STORE;";
    		
    		        //checking for specific ID
    				 if(isset($_POST['specstoreID'])){
	                         $specid = $_POST['specstoreID'];
	                    }
	               	if(!empty($_POST['specstoreID'])){
	                $sqlsel = "SELECT ".$cols." FROM STORE WHERE STORE_ID=".$specid.";";
	                    }
	                // end of checking for specific ID   
	                    
			$sel = mysqli_query($conn,$sqlsel);
						while($row=mysqli_fetch_assoc($sel)){
						echo"<tr>";
						
						foreach( $row as $k=>$v){
							echo "<td>".$v."</td>";
						} // end of foreach loop
						
						echo"</tr>";
						
					} //end of while loop
	        
		    echo "</table>";
		    mysqli_free_result($sel);
}



mysqli_close($conn);
?>
		
