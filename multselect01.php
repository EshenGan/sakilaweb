<?php
 include_once('connect.php');
//SELECT ADDRESS | STAFF
if(!empty($_POST['as'])){

	    if(isset($_POST['as']))
		{
			$as = $_POST['as'];
			if( is_array($as) || is_object($as)){
			    	echo "<table border='1' style='border-collapse:collapse'>";
			        echo "<tr>";
			        echo "<th>ADDRESS ID</th>";
    		foreach( $as as $value){
    			$cols = implode(',',$as);
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
    		        
    		$sqlsel3 = "SELECT ADDRESS.ADDRESS_ID, ".$cols." FROM ADDRESS INNER JOIN STAFF ON ADDRESS.ADDRESS_ID = STAFF.ADDRESS_ID;";
    		
    		        //checking for specific ADDR ID
    				 if(isset($_POST['specaddrID'])){
	                         $specid3 = $_POST['specaddrID'];
	                  
	               	if(!empty($_POST['specaddrID'])){
	                $sqlsel3 = "SELECT ADDRESS.ADDRESS_ID, ".$cols." FROM ADDRESS INNER JOIN STAFF ON ADDRESS.ADDRESS_ID = STAFF.ADDRESS_ID WHERE ADDRESS.ADDRESS_ID=".$specid3.";";
	                    }
    				 }
	                // end of checking for specific ID   
	                    
			$sel3 = mysqli_query($conn,$sqlsel3);
						while($rows=mysqli_fetch_assoc($sel3)){
						echo"<tr>";
						
						foreach( $rows as $k=>$v){
							echo "<td>".$k."=".$v."</td>";
						} // end of foreach loop
						
						echo"</tr>";
						
					} //end of while loop
					
		    echo "</table>";
	mysqli_free_result($sel3);
	
}//end of !empty()	
mysqli_close($conn);
?>