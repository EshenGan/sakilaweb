<?php
	include_once('connect.php');
	
			       
		            $sqldel1 = "DELETE FROM ACTOR WHERE ACTOR_ID='$_GET[id1]';";
		            if (mysqli_query($conn,$sqldel1)){
		                header("refresh:0.5; url=actor.php");
		            }
		            else{
		                echo "not deleted";
		            }
		            
		      if( !empty($_GET['id2']) ){
			           $sqldel2 = "DELETE FROM ADDRESS WHERE ADDRESS_ID='$_GET[id2]';";
		            if (mysqli_query($conn,$sqldel2)){
		                header("refresh:0.5; url=address.php");
		            }
		            else{
		                echo "not deleted";
		            }	          
		          
		      }

		       if(!empty($_GET['id3']) ){
		        $sqldel3 = "DELETE FROM CATEGORY WHERE CATEGORY_ID='$_GET[id3]';";
		            if (mysqli_query($conn,$sqldel3)){
		                header("refresh:0.5; url=category.php");
		            }
		            else{
		                echo "not deleted";
		            }		            
		       }  
		            
		    if(!empty($_GET['id4'])){
		        $sqldel4 = "DELETE FROM CITY WHERE CITY_ID='$_GET[id4]';";
		            if (mysqli_query($conn,$sqldel4)){
		                header("refresh:0.5; url=city.php");
		            }
		            else{
		                echo "not deleted";
		            }		            		        
		    }
		    
		    if(!empty($_GET['id5'])){
		        $sqldel5 = "DELETE FROM COUNTRY WHERE COUNTRY_ID='$_GET[id5]';";
		            if (mysqli_query($conn,$sqldel5)){
		                header("refresh:0.5; url=country.php");
		            }
		            else{
		                echo "not deleted";
		            }		            		        
		    }
		    
		    if(!empty($_GET['id6'])){
		        $sqldel6 = "DELETE FROM CUSTOMER WHERE CUSTOMER_ID='$_GET[id6]';";
		            if (mysqli_query($conn,$sqldel6)){
		                header("refresh:0.5; url=customer.php");
		            }
		            else{
		                echo "not deleted";
		            }		            		        
		    }
		    
		    if(!empty($_GET['id7'])){
		        $sqldel7 = "DELETE FROM FILM WHERE FILM_ID='$_GET[id7]';";
		            if (mysqli_query($conn,$sqldel7)){
		                header("refresh:0.5; url=film.php");
		            }
		            else{
		                echo "not deleted";
		            }		            		        
		    }

		            
		      if(!empty($_GET['id8']) && !empty($_GET['id9'])){
		        $sqldel8 = "DELETE FROM FILM_ACTOR WHERE ACTOR_ID= '$_GET[id8]' AND FILM_ID='$_GET[id9]';";
		            if (mysqli_query($conn,$sqldel8)){
		                header("refresh:0.5; url=film_actor.php");
		            }
		            else{
		                echo "not deleted";
		            }		          
		      }
		      
		      
		      if(!empty($_GET['id10']) && !empty($_GET['id11'])){
		        $sqldel9 = "DELETE FROM FILM_CATEGORY WHERE FILM_ID= '$_GET[id10]' AND CATEGORY_ID='$_GET[id11]';";
		            if (mysqli_query($conn,$sqldel9)){
		                header("refresh:0.5; url=film_category.php");
		            }
		            else{
		                echo "not deleted";
		            }		          
		      }
		         
            if(!empty($_GET['id12'])){
		        $sqldel10 = "DELETE FROM FILM_RENTAL WHERE FILM_ID='$_GET[id12]';";
		            if (mysqli_query($conn,$sqldel10)){
		                header("refresh:0.5; url=film_rental.php");
		            }
		            else{
		                echo "not deleted";
		            }		            		        
		    }   

            if(!empty($_GET['id13'])){
		        $sqldel11 = "DELETE FROM FILM_TEXT WHERE FILM_ID='$_GET[id13]';";
		            if (mysqli_query($conn,$sqldel11)){
		                header("refresh:0.5; url=film_text.php");
		            }
		            else{
		                echo "not deleted";
		            }		            		        
		    }   
		    
            if(!empty($_GET['id14'])){
		        $sqldel12 = "DELETE FROM INVENTORY WHERE INVENTORY_ID='$_GET[id14]';";
		            if (mysqli_query($conn,$sqldel12)){
		                header("refresh:0.5; url=inventory.php");
		            }
		            else{
		                echo "not deleted";
		            }		            		        
		    }   
		    
            if(!empty($_GET['id15'])){
		        $sqldel13 = "DELETE FROM LANGUAGE WHERE LANGUAGE_ID='$_GET[id15]';";
		            if (mysqli_query($conn,$sqldel13)){
		                header("refresh:0.5; url=language.php");
		            }
		            else{
		                echo "not deleted";
		            }		            		        
		    }   
		    
            if(!empty($_GET['id16'])){
		        $sqldel14 = "DELETE FROM PAYMENT WHERE PAYMENT_ID='$_GET[id16]';";
		            if (mysqli_query($conn,$sqldel14)){
		                header("refresh:0.5; url=payment.php");
		            }
		            else{
		                echo "not deleted";
		            }		            		        
		    }
		  
            if(!empty($_GET['id17'])){
		        $sqldel15 = "DELETE FROM RENTAL WHERE RENTAL_ID='$_GET[id17]';";
		            if (mysqli_query($conn,$sqldel15)){
		                header("refresh:0.5; url=rental.php");
		            }
		            else{
		                echo "not deleted";
		            }		            		        
		    }
		    
            if(!empty($_GET['id18'])){
		        $sqldel16 = "DELETE FROM STAFF WHERE STAFF_ID='$_GET[id18]';";
		            if (mysqli_query($conn,$sqldel16)){
		                header("refresh:0.5; url=staff.php");
		            }
		            else{
		                echo "not deleted";
		            }		            		        
		    }   
		   
            if(!empty($_GET['id19'])){
		        $sqldel17 = "DELETE FROM STORE WHERE STORE_ID='$_GET[id19]';";
		            if (mysqli_query($conn,$sqldel17)){
		                header("refresh:0.5; url=store.php");
		            }
		            else{
		                echo "not deleted";
		            }		            		        
		    }   
		       
?>
