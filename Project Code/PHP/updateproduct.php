<html lang="en">
<head>
  <title>mms</title>
  <meta charset="utf-8">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  

<style type="text/css">
.row 
{
    background-color:#A2F6F0;
}
h2
{
  background-color:#4BF378;
}
a 
{
   padding: 5px;
}

</style>
</head>


<body>
<div class="container">
  <h2 class="text-center">Product Data Update From</h2>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">

 

  
<form action="updateproduct.php" method="post" enctype="multipart/form-data">
 
    <div class="form-group">
      <label for="PRODUCT NAME">Enter Product Search Key:</label>
      <input type="text" class="form-control" name="p_name" required="required">
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


</table>
