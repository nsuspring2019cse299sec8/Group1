    <?php

 {
		include("../dbcon.php");
		
		$ID=$_REQUEST['pid'];
		
		$query =mysqli_query($conn, "DELETE FROM `product_insert_table` WHERE `ID`='$ID';");
		
	
		
	
		if ($query == TRUE) 
		{
		{
			?>
			<script>
			       alert('Data Delete Succesfully !!');
				   window.open('deleteproduct.php','_self');
			</script>
			<?php
		}
		} else 
		{
			echo "   Error: ";
		}
		$conn->close();
			
			
	}

?> 