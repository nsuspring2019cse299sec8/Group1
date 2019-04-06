<?php

 {
		include("../dbcon.php");
		
		$PRODUCT_ID = $_POST['p_id'];
		$PRODUCT_NAME = $_POST['p_name'];
		$PRODUCT_PRICE= $_POST['p_price'];
		$PRODUCT_UPDATE_PRICE= $_POST['p_u_price'];
		$ID=$_POST['pid'];
		
		
		$imagename = $_FILES['simg']['name'];
		$tempname = $_FILES["simg"]["tmp_name"];
		move_uploaded_file($tempname ,"../dataimg/$imagename");
		

       
		
		$query =mysqli_query($conn, "UPDATE `product_insert_table` SET `PRODUCT_ID`= '$PRODUCT_ID',`PRODUCT_NAME`= '$PRODUCT_NAME', 
		                    `PRODUCT_PRICE` = '$PRODUCT_PRICE', `PRODUCT_UPDATE_PRICE` = '$PRODUCT_UPDATE_PRICE', 
							`IMAGE` = '$imagename' WHERE `ID`= $ID");
		
	
		
	
		if ($query == TRUE) 
		{
		{
			?>
			<script>
			       alert('Data Update Succesfully !!');
				   window.open('update_form.php?pid=<?php echo $ID; ?>','_self');
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