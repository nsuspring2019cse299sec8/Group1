<html lang="en">
<head>
  <title>mms</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style type="text/css">
.row 
{
    background-color: #CED6CA;
}
h2
{
  background-color: #DCE613;
}
a 
{
   padding: 5px;
}

</style>
</head>


<body>
<div class="container">
  <h2 class="text-center">Product Insert From</h2>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">

 
  
  
  
  
  
  <!-- THIS PART ARE THE FROM PART -->
  
  <form action="insert_product.php" method="post" enctype="multipart/form-data">
 
    <div class="form-group">
      <label for="PRODUCT NAME">PRODUCT NAME:</label>
      <input type="text" class="form-control"  placeholder="Enter product name" name="p_name">
    </div>

    <div class="form-group">
      <label for="PRODUCT ID">PRODUCT ID:</label>
      <input type="number" class="form-control"  placeholder="Enter product id " name="p_id">
    </div>

    <div class="form-group">
      <label for="PRODUCT PRICE">PRODUCT PRICE</label>
      <input type="number" class="form-control"  placeholder="Enter product price" name="p_price">
    </div>
	
	 <div class="form-group">
      <label for="PRODUCT UPDATE PRICE">PRODUCT UPDATE PRICE</label>
      <input type="number" class="form-control"  placeholder="Enter product update price" name="p_u_price">
    </div>

    <div class="form-group">
      <label for="IMAGE">PRODUCT IMAGE:</label>
      <input type="file" class="form-control"   name="simg">
    </div>
	
    <tr>
    <td colspan="2" align="center"><input type="submit" name="submit"  value="Submit"></td>
    </tr>

    
	
</form>
</div>
</div>
</div>
</body>
</html>

<?php

if (isset($_POST['submit'])) 

{
		include_once "../dbcon.php";
		
		$PRODUCT_NAME = $_POST['p_name'];
		$PRODUCT_ID= $_POST['p_id'];
		$PRODUCT_PRICE= $_POST['p_price'];
		$PRODUCT_UPDATE_PRICE= $_POST['p_u_price'];
		
		
		$imagename = $_FILES['simg']['name'];
		$tempname = $_FILES["simg"]["tmp_name"];
		
		
		move_uploaded_file($tempname ,"../dataimg/$imagename");
		

       
		
		
		
		
		$query = "INSERT INTO    product_insert_table(PRODUCT_NAME,PRODUCT_ID,PRODUCT_PRICE,PRODUCT_UPDATE_PRICE,IMAGE) 
						   
			                   VALUES ('".$PRODUCT_NAME."', '".$PRODUCT_ID. "', '".$PRODUCT_PRICE ."' , 
							           '".$PRODUCT_UPDATE_PRICE."','".$imagename."' )";

	
		if ($conn->query($query) === TRUE) 
		{
		{
			?>
			<script>
			       alert('new record submited !!');
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


