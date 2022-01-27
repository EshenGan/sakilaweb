<?php

	include_once('connect.php');
	
echo "<link rel='stylesheet' href='styles.css' text='text/css'/>";

/* SELECT ADDRESS|STORE */
if(!empty($_POST['adst'])){

	    if(isset($_POST['adst']))
		{
			$adst = $_POST['adst'];
			if( is_array($adst) || is_object($adst)){
			        echo "<button><a href='multselect.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
			        echo "<th>ADDRESS ID</th>";
    		foreach( $adst as $value){
    			$cols = implode(',',$adst);
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
    		        
    		$sqlsel = "SELECT ADDRESS.ADDRESS_ID, ".$cols." FROM ADDRESS INNER JOIN STORE ON ADDRESS.ADDRESS_ID = STORE.ADDRESS_ID ;";
    		
    		        //checking for specific ADDR ID
    				 if(isset($_POST['said'])){
	                         $specid = $_POST['said'];
	                    }
	               	if(!empty($_POST['said'])){
	                $sqlsel = "SELECT ADDRESS.ADDRESS_ID, ".$cols." FROM ADDRESS INNER JOIN STORE ON ADDRESS.ADDRESS_ID = STORE.ADDRESS_ID WHERE ADDRESS.ADDRESS_ID=".$specid.";";
	                    }
	                // end of checking for specific ID   
	                    
			$sel = mysqli_query($conn,$sqlsel);
						while($row=mysqli_fetch_assoc($sel)){
						echo"<tr id='data'>";
						
						foreach( $row as $k=>$v){
							echo "<td>".$v."</td>";
						} // end of foreach loop
						
						echo"</tr>";
						
					} //end of while loop
	        
		    echo "</table>";
	mysqli_free_result($sel);
	
}//end of !empty()	


//SELECT ADDRESS | CITY
if(!empty($_POST['adc'])){

	    if(isset($_POST['adc']))
		{
			$adc = $_POST['adc'];
			if( is_array($adc) || is_object($adc)){
			        echo "<button><a href='multselect.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse;  margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
			        echo "<th>CITY ID</th>";
    		foreach( $adc as $value){
    			$cols = implode(',',$adc);
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
    		        
    		$sqlsel = "SELECT ADDRESS.CITY_ID, ".$cols." FROM ADDRESS INNER JOIN CITY ON ADDRESS.CITY_ID = CITY.CITY_ID ;";
    		
    		        //checking for specific ADDR ID
    				 if(isset($_POST['scid'])){
	                         $specid = $_POST['scid'];
	                    }
	               	if(!empty($_POST['scid'])){
	                $sqlsel = "SELECT ADDRESS.CITY_ID, ".$cols." FROM ADDRESS INNER JOIN CITY ON ADDRESS.CITY_ID = CITY.CITY_ID WHERE ADDRESS.CITY_ID=".$specid.";";
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


		    
//SELECT ADDRESS | STORE |STAFF
if(!empty($_POST['adstst'])){

	    if(isset($_POST['adstst']))
		{
			$adstst = $_POST['adstst'];
			if( is_array($adstst) || is_object($adstst)){
			        echo "<button><a href='multselect.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto' align='center'>";
			        echo "<tr>";
			        echo "<th>ADDRESS ID</th>";
    		foreach( $adstst as $value){
    			$cols = implode(',',$adstst);
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
    		$cont1 = " FROM ((ADDRESS INNER JOIN STORE ON ADDRESS.ADDRESS_ID = STORE.ADDRESS_ID) INNER JOIN STAFF ON ADDRESS.ADDRESS_ID = STAFF.ADDRESS_ID);";
    		$sqlsel = "SELECT ADDRESS.ADDRESS_ID, ".$cols.$cont1;
    		
    		        //checking for specific ADDR ID
    				 if(isset($_POST['sassid'])){
	                         $specid = $_POST['sassid'];
	                    }
	               $cont2 = " FROM ((ADDRESS INNER JOIN STORE ON ADDRESS.ADDRESS_ID = STORE.ADDRESS_ID) INNER JOIN STAFF ON ADDRESS.ADDRESS_ID = STAFF.ADDRESS_ID) WHERE ADDRESS.ADDRESS_ID=";
	               	if(!empty($_POST['sassid'])){
	                $sqlsel = "SELECT ADDRESS.ADDRESS_ID, ".$cols.$cont2.$specid.";";
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


//SELECT ADDRESS | STORE |STAFF|CITY
if(!empty($_POST['assc'])){

	    if(isset($_POST['assc']))
		{
			$assc = $_POST['assc'];
			if( is_array($assc) || is_object($assc)){
			        echo "<button><a href='multselect.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto' align='center'>";
			        echo "<tr>";
			        echo "<th>ADDRESS ID</th>";
			        echo "<th>CITY ID</th>";
    		foreach( $assc as $value){
    			$cols = implode(',',$assc);
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
    		
    		$cont3 = " INNER JOIN CITY ON ADDRESS.CITY_ID = CITY.CITY_ID";
    		$cont1 = " FROM (((ADDRESS INNER JOIN STORE ON ADDRESS.ADDRESS_ID = STORE.ADDRESS_ID) INNER JOIN STAFF ON ADDRESS.ADDRESS_ID = STAFF.ADDRESS_ID)".$cont3.");";
    		$sqlsel = "SELECT ADDRESS.ADDRESS_ID,CITY.CITY_ID ".$cols.$cont1;
    	
    		        //checking for specific city ID
    				 if(isset($_POST['c4'])){
	                         $specid2 = $_POST['c4'];
	                    }
	               //checking for specific addr ID     
                    if(isset($_POST['a4'])){
	                         $specid1 = $_POST['a4'];
	                    }
	               
	               $cont4 = " INNER JOIN CITY ON ADDRESS.CITY_ID = CITY.CITY_ID) WHERE ADDRESS.ADDRESS_ID=".$specid1."AND ADDRESS.CITY_ID=".$specid2.";";
                    $cont2 = " FROM (((ADDRESS INNER JOIN STORE ON ADDRESS.ADDRESS_ID = STORE.ADDRESS_ID) INNER JOIN STAFF ON ADDRESS.ADDRESS_ID = STAFF.ADDRESS_ID) ".$cont4;	               
	               	if(!empty($_POST['c4']) && !empty($_POST['a4'])){
	                $sqlsel = "SELECT ADDRESS.ADDRESS_ID,ADDRESS.CITY_ID ".$cols.$cont2;
	                	
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
		    

/* SELECT CATEGORY | FILM_CATEGORY */
if(!empty($_POST['catfcat'])){

	    if(isset($_POST['catfcat']))
		{
			$catfcat = $_POST['catfcat'];
			if( is_array($catfcat) || is_object($catfcat)){
			        echo "<button><a href='multselect.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
			        echo "<th>CATEGORY ID</th>";
    		foreach( $catfcat as $value){
    			$cols = implode(',',$catfcat);
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
    		        
    		$sqlsel = "SELECT CATEGORY.CATEGORY_ID, ".$cols." FROM CATEGORY INNER JOIN FILM_CATEGORY ON CATEGORY.CATEGORY_ID = FILM_CATEGORY.CATEGORY_ID ;";
    		
    		        //checking for specific ADDR ID
    				 if(isset($_POST['scatid'])){
	                         $specid = $_POST['scatid'];
	                    }
	               	if(!empty($_POST['scatid'])){
	                $sqlsel = "SELECT CATEGORY.CATEGORY_ID, ".$cols." FROM CATEGORY INNER JOIN FILM_CATEGORY ON CATEGORY.CATEGORY_ID = FILM_CATEGORY.CATEGORY_ID WHERE CATEGORY.CATEGORY_ID=".$specid.";";
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




/* SELECT COUNTRY | CITY */
if(!empty($_POST['cc'])){

	    if(isset($_POST['cc']))
		{
			$cc = $_POST['cc'];
			if( is_array($cc) || is_object($cc)){
			        echo "<button><a href='multselect.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
			        echo "<th>COUNTRY ID</th>";
    		foreach( $cc as $value){
    			$cols = implode(',',$cc);
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
    		        
    		$sqlsel = "SELECT COUNTRY.COUNTRY_ID, ".$cols." FROM COUNTRY INNER JOIN CITY ON COUNTRY.COUNTRY_ID = CITY.COUNTRY_ID ;";
    		
    		        //checking for specific ADDR ID
    				 if(isset($_POST['scid'])){
	                         $specid = $_POST['scid'];
	                    }
	               	if(!empty($_POST['scid'])){
	                $sqlsel = "SELECT COUNTRY.COUNTRY_ID, ".$cols." FROM COUNTRY INNER JOIN CITY ON COUNTRY.COUNTRY_ID = CITY.COUNTRY_ID WHERE COUNTRY.COUNTRY_ID=".$specid.";";
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

/* SELECT CUSTOMER | PAYMENT */
if(!empty($_POST['cp'])){

	    if(isset($_POST['cp']))
		{
			$cp = $_POST['cp'];
			if( is_array($cp) || is_object($cp)){
			        echo "<button><a href='multselect.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
			        echo "<th>CUSTOMER ID</th>";
    		foreach( $cp as $value){
    			$cols = implode(',',$cp);
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
    		        
    		$sqlsel = "SELECT CUSTOMER.CUSTOMER_ID, ".$cols." FROM CUSTOMER INNER JOIN PAYMENT ON CUSTOMER.CUSTOMER_ID = PAYMENT.CUSTOMER_ID ;";
    		
    		        //checking for specific ADDR ID
    				 if(isset($_POST['scusid'])){
	                         $specid = $_POST['scusid'];
	                    }
	               	if(!empty($_POST['scid'])){
	                $sqlsel = "SELECT CUSTOMER.CUSTOMER_ID, ".$cols." FROM CUSTOMER INNER JOIN PAYMENT ON CUSTOMER.CUSTOMER_ID = PAYMENT.CUSTOMER_ID WHERE CUSTOMER.CUSTOMER_ID =".$specid.";";
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

/* SELECT CUSTOMER | RENTAL */
if(!empty($_POST['cr'])){

	    if(isset($_POST['cr']))
		{
			$cr = $_POST['cr'];
			if( is_array($cr) || is_object($cr)){
			        echo "<button><a href='multselect.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
			        echo "<th>CUSTOMER ID</th>";
    		foreach( $cr as $value){
    			$cols = implode(',',$cr);
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
    		        
    		$sqlsel = "SELECT CUSTOMER.CUSTOMER_ID, ".$cols." FROM CUSTOMER INNER JOIN RENTAL ON CUSTOMER.CUSTOMER_ID = RENTAL.CUSTOMER_ID ;";
    		
    		        //checking for specific ADDR ID
    				 if(isset($_POST['scusid2'])){
	                         $specid = $_POST['scusid2'];
	                    }
	               	if(!empty($_POST['scusid2'])){
	                $sqlsel = "SELECT CUSTOMER.CUSTOMER_ID, ".$cols." FROM CUSTOMER INNER JOIN RENTAL ON CUSTOMER.CUSTOMER_ID = RENTAL.CUSTOMER_ID WHERE CUSTOMER.CUSTOMER_ID =".$specid.";";
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

/* SELECT CUSTOMER | RENTAL | PAYMENT */
if(!empty($_POST['cpr'])){

	    if(isset($_POST['cpr']))
		{
			$cpr = $_POST['cpr'];
			if( is_array($cpr) || is_object($cpr)){
			        echo "<button><a href='multselect.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
			        echo "<th>CUSTOMER ID</th>";
    		foreach( $cpr as $value){
    			$cols = implode(',',$cpr);
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
    		        
    		$sqlsel = "SELECT CUSTOMER.CUSTOMER_ID, ".$cols." FROM ((CUSTOMER 
INNER JOIN PAYMENT ON CUSTOMER.CUSTOMER_ID = PAYMENT.CUSTOMER_ID) 
INNER JOIN RENTAL ON CUSTOMER.CUSTOMER_ID = RENTAL.CUSTOMER_ID);";
    		
    		        //checking for specific ADDR ID
    				 if(isset($_POST['scusid3'])){
	                         $specid = $_POST['scusid3'];
	                    }
	               	if(!empty($_POST['scusid3'])){
	                $sqlsel = "SELECT CUSTOMER.CUSTOMER_ID, ".$cols." FROM ((CUSTOMER 
INNER JOIN PAYMENT ON CUSTOMER.CUSTOMER_ID = PAYMENT.CUSTOMER_ID) 
INNER JOIN RENTAL ON CUSTOMER.CUSTOMER_ID = RENTAL.CUSTOMER_ID) WHERE CUSTOMER.CUSTOMER_ID =".$specid.";";
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

/* SELECT FILM | FILM_TEXT */
if(!empty($_POST['fft'])){

	    if(isset($_POST['fft']))
		{
			$fft = $_POST['fft'];
			if( is_array($fft) || is_object($fft)){
			        echo "<button><a href='multselect.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
			        echo "<th>FILM ID</th>";
    		foreach( $fft as $value){
    			$cols = implode(',',$fft);
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
    		        
    		$sqlsel = "SELECT FILM.FILM_ID, ".$cols." FROM FILM INNER JOIN FILM_TEXT ON FILM.FILM_ID = FILM_TEXT.FILM_ID ;";
    		
    		        //checking for specific ADDR ID
    				 if(isset($_POST['sfid'])){
	                         $specid = $_POST['sfid'];
	                    }
	               	if(!empty($_POST['sfid'])){
	                $sqlsel = "SELECT FILM.FILM_ID, ".$cols." FROM FILM INNER JOIN FILM_TEXT ON FILM.FILM_ID = FILM_TEXT.FILM_ID WHERE FILM.FILM_ID =".$specid.";";
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

/* SELECT FILM FILM_RENTAL */

if(!empty($_POST['filmfr'])){

	    if(isset($_POST['filmfr']))
		{
			$filmfr = $_POST['filmfr'];
			if( is_array($filmfr) || is_object($filmfr)){
			        echo "<button><a href='multselect.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
			        echo "<th>FILM ID</th>";
    		foreach( $filmfr as $value){
    			$cols = implode(',',$filmfr);
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
    		        
    		$sqlsel = "SELECT FILM.FILM_ID, ".$cols." FROM FILM INNER JOIN FILM_RENTAL ON FILM.FILM_ID = FILM_RENTAL.FILM_ID ;";
    		
    		        //checking for specific ADDR ID
    				 if(isset($_POST['sfilmfrid'])){
	                         $specidfr = $_POST['sfilmfrid'];
	                    }
	               	if(!empty($_POST['sfilmfrid'])){
	                $sqlsel = "SELECT FILM.FILM_ID, ".$cols." FROM FILM INNER JOIN FILM_RENTAL ON FILM.FILM_ID = FILM_RENTAL.FILM_ID WHERE FILM.FILM_ID=".$specidfr.";";
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

/* SELECT FILM FILM_CATEGORY */

if(!empty($_POST['filmfc'])){

	    if(isset($_POST['filmfc']))
		{
			$filmfc = $_POST['filmfc'];
			if( is_array($filmfc) || is_object($filmfc)){
			    echo "<button><a href='multselect.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
			        echo "<th>FILM ID</th>";
    		foreach( $filmfc as $value){
    			$cols = implode(',',$filmfc);
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
    		        
    		$sqlsel = "SELECT FILM.FILM_ID, ".$cols." FROM FILM INNER JOIN FILM_CATEGORY ON FILM.FILM_ID = FILM_CATEGORY.FILM_ID ;";
    		
    		        //checking for specific ADDR ID
    				 if(isset($_POST['sfilmfcid'])){
	                         $specidfc = $_POST['sfilmfcid'];
	                    }
	               	if(!empty($_POST['sfilmfcid'])){
	                $sqlsel = "SELECT FILM.FILM_ID, ".$cols." FROM FILM INNER JOIN FILM_CATEGORY ON FILM.FILM_ID = FILM_CATEGORY.FILM_ID WHERE FILM.FILM_ID=".$specidfc.";";
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

/* SELECT FILM FILM_TEXT FILM_RENTAL */

if(!empty($_POST['filmftfr'])){

	    if(isset($_POST['filmftfr']))
		{
			$filmftfr = $_POST['filmftfr'];
			if( is_array($filmftfr) || is_object($filmftfr)){
			    echo "<button><a href='multselect.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto' align='center'>";
			        echo "<tr>";
			        echo "<th>FILM ID</th>";
    		foreach( $filmftfr as $value){
    			$cols = implode(',',$filmftfr);
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
    		$cont1 = " FROM ((FILM INNER JOIN FILM_TEXT ON FILM.FILM_ID = FILM_TEXT.FILM_ID) INNER JOIN FILM_RENTAL ON FILM.FILM_ID = FILM_RENTAL.FILM_ID);";
    		$sqlsel = "SELECT FILM.FILM_ID, ".$cols.$cont1;
    		
    		        //checking for specific ADDR ID
    				 if(isset($_POST['sfilmftfrid'])){
	                 $specidftfr = $_POST['sfilmftfrid'];
	                    }
	                $cont2 = " FROM ((FILM INNER JOIN FILM_TEXT ON FILM.FILM_ID = FILM_TEXT.FILM_ID) INNER JOIN FILM_RENTAL ON FILM.FILM_ID = FILM_RENTAL.FILM_ID) WHERE FILM.FILM_ID=".$specidftfr.";";
	               	if(!empty($_POST['sfilmftfrid'])){
	                $sqlsel = "SELECT FILM.FILM_ID, ".$cols.$cont2.$specidftfr.";";
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


/* SELECT FILM FILM_TEXT FILM_CATEGORY */

if(!empty($_POST['filmftfc'])){

	    if(isset($_POST['filmftfc']))
		{
			$filmftfc = $_POST['filmftfc'];
			if( is_array($filmftfc) || is_object($filmftfc)){
			    echo "<button><a href='multselect.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto' align='center'>";
			        echo "<tr>";
			        echo "<th>FILM ID</th>";
    		foreach( $filmftfc as $value){
    			$cols = implode(',',$filmftfc);
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
    		$cont1 = " FROM ((FILM INNER JOIN FILM_TEXT ON FILM.FILM_ID = FILM_TEXT.FILM_ID) INNER JOIN FILM_CATEGORY ON FILM.FILM_ID = FILM_CATEGORY.FILM_ID);";
    		$sqlsel = "SELECT FILM.FILM_ID, ".$cols.$cont1;
    		
    		        //checking for specific ADDR ID
    				 if(isset($_POST['sfilmftfcid'])){
	                 $specidftfc = $_POST['sfilmftfcid'];
	                    }
	                $cont2 = " FROM ((FILM INNER JOIN FILM_TEXT ON FILM.FILM_ID = FILM_TEXT.FILM_ID) INNER JOIN FILM_CATEGORY ON FILM.FILM_ID = FILM_CATEGORY.FILM_ID) WHERE FILM.FILM_ID=".$specidftfc.";";
	               	if(!empty($_POST['sfilmftfrid'])){
	                $sqlsel = "SELECT FILM.FILM_ID, ".$cols.$cont2.$specidftfc.";";
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


/* SELECT FILM FILM_RENTAL FILM_CATEGORY */

if(!empty($_POST['filmfrfc'])){

	    if(isset($_POST['filmfrfc']))
		{
			$filmfrfc = $_POST['filmfrfc'];
			if( is_array($filmfrfc) || is_object($filmfrfc)){
			    echo "<button><a href='multselect.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto' align='center'>";
			        echo "<tr>";
			        echo "<th>FILM ID</th>";
    		foreach( $filmfrfc as $value){
    			$cols = implode(',',$filmfrfc);
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
    		$cont1 = " FROM ((FILM INNER JOIN FILM_RENTAL ON FILM.FILM_ID = FILM_RENTAL.FILM_ID) INNER JOIN FILM_CATEGORY ON FILM.FILM_ID = FILM_CATEGORY.FILM_ID);";
    		$sqlsel = "SELECT FILM.FILM_ID, ".$cols.$cont1;
    		
    		        //checking for specific ADDR ID
    				 if(isset($_POST['sfilmfrfcid'])){
	                 $specidfrfc = $_POST['sfilmfrfcid'];
	                    }
	                $cont2 = " FROM ((FILM INNER JOIN FILM_RENTAL ON FILM.FILM_ID = FILM_RENTAL.FILM_ID) INNER JOIN FILM_CATEGORY ON FILM.FILM_ID = FILM_CATEGORY.FILM_ID) WHERE FILM.FILM_ID=".$specidfrfc.";";
	               	if(!empty($_POST['sfilmfrfcid'])){
	                $sqlsel = "SELECT FILM.FILM_ID, ".$cols.$cont2.$specidfrfc.";";
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

/* SELECT STORE STAFF */

if(!empty($_POST['ss'])){

	    if(isset($_POST['ss']))
		{
			$ss = $_POST['ss'];
			if( is_array($ss) || is_object($ss)){
			    echo "<button><a href='multselect.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
			        echo "<th>STORE ID</th>";
    		foreach( $ss as $value){
    			$cols = implode(',',$ss);
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
    		        
    		$sqlsel = "SELECT STORE.STORE_ID, ".$cols." FROM STORE INNER JOIN STAFF ON STORE.STORE_ID = STAFF.STORE_ID ;";
    		
    		        //checking for specific ADDR ID
    				 if(isset($_POST['sssid'])){
	                         $specidss = $_POST['sssid'];
	                    }
	               	if(!empty($_POST['sssid'])){
	                $sqlsel = "SELECT STORE.STORE_ID, ".$cols." FROM FILM INNER JOIN STAFF ON STORE.STORE_ID = STAFF.STORE_ID WHERE STORE.STORE_ID=".$specidss.";";
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

/* SELECT LANGUAGE FILM */

if(!empty($_POST['langf'])){

	    if(isset($_POST['langf']))
		{
			$langf = $_POST['langf'];
			if( is_array($langf) || is_object($langf)){
			    echo "<button><a href='multselect.php' style='text-decoration:none;color:black' >BACK</a></button>";
			    	echo "<table border='1' style='border-collapse:collapse; margin-left:auto; margin-right:auto'>";
			        echo "<tr>";
			        echo "<th>FILM ID</th>";
    		foreach( $langf as $value){
    			$cols = implode(',',$langf);
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
    		        
    		$sqlsel = "SELECT LANGUAGE.LANGUAGE_ID, ".$cols." FROM LANGUAGE INNER JOIN FILM ON LANGUAGE.LANGUAGE_ID = FILM.LANGUAGE_ID ;";
    		
    		        //checking for specific ADDR ID
    				 if(isset($_POST['slangfid'])){
	                         $specidlangf = $_POST['slangfid'];
	                    }
	               	if(!empty($_POST['slangfid'])){
	                $sqlsel = "SELECT FILM.FILM_ID, ".$cols." FROM LANGUAGE INNER JOIN FILM ON LANGUAGE.LANGUAGE_ID = FILM.LANGUAGE_ID WHERE LANGUAGE.LANGUAGE_ID=".$specidlangf.";";
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
		
