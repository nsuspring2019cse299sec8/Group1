<html lang="en">
<head>
  <title>mms</title>
  <meta charset="utf-8">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  

<style type="text/css">
.row 
{
    background-color:#F8918C;
}
h2
{
  background-color:#F54141;
}
a 
{
   padding: 5px;
}


</style>
</head>


<body>
<div class="container">
  <h2 class="text-center">Product Data Delete From</h2>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">

 

  
<form action="deleteproduct.php" method="post" enctype="multipart/form-data">
 
    <div class="form-group">
      <label for="PRODUCT NAME">Enter Product Search Key:</label>
      <input type="text" class="form-control" name="p_name" required="required"><br>
	  <td colspan="2"><input type="submit" name="submit" value="Search"/></td>
    </div>
	

</form>
</html>

<table align="center" width="10%" border="5" style="margin-top:10px" >

         <tr >
			  <th>PRODUCT SERIAL NO</th>		
              <th>PRODUCT ID NO</th>			 
              <th>PRODUCT NAME</th>
		      <th>PRODUCT PRICE</th>
		      <th>PRODUCT UPDATE PRICE</th>
		      <th>PRODUCT IMAGE</th>
		      <th>ACTION</th>
         </tr>	 
		 
<?php

     if(isset($_POST['submit']))
		 
     {
	 
	    include('../dbcon.php');
	
	    $PRODUCT_NAME = $_POST['p_name'];
	  
	    $query = mysqli_query($conn,"SELECT * FROM `product_insert_table` WHERE `PRODUCT_NAME` LIKE '%$PRODUCT_NAME%'");  

	  
	    $count = mysqli_num_rows($query);
	    if($count == "0")
	                   {
		                  $output = '<h2>No result found!</h2>';
						  ?>
			              <script>
			              alert(' not match !!');
				          </script>
			              <?php
						  
						  
						  
						   
	                   }
	    else
	                   {
		                  $count=0;
		                  while($data = mysqli_fetch_array($query))
		            
					   {
			              $count++;
						

						  
						  
?>			
           <tr> 
               <td>
			           <?php echo $count; ?></td>
			           <td><?php echo $data['PRODUCT_ID'];?></td>
			           <td><?php echo $data['PRODUCT_NAME'];?></td>
			           <td><?php echo $data['PRODUCT_PRICE'];?></td>
			           <td><?php echo $data['PRODUCT_UPDATE_PRICE'];?></td>
		               <td><img src="../dataimg/<?php echo $data['IMAGE']; ?>"style="max-width:100px;" /></td>
		       <td>    <a href="delete_form.php?pid=<?php echo $data['ID'] ?>">Delete</td>
          </tr>
					
<?php
			
		                }
		
	                    }

		  
	 
    }


   

?>



</table>