<!DOCTYPE html>
<html lang="en">
<head>
  <title>all product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link real="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

  
<!-- THIS PART ARE DESIGN PART -->  
  
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
   padding: 10px;
}

</style>
</head>


<body>
<div class="container">
  <h2 class="text-center">Product Collected Now</h2>
 
<!-- THIS PART ARE DESIGN PART OF FROM EDIT AND DELETE DATA -->


<div class="row">
<div class="col-md-12">
<table class="table table-hover">
    <thead>
      <tr>
        <th>PRODUCT NAME </th>
        <th>PRODUCT ID</th>
        <th>PRODUCT PRICE </th>
        <th>PRODUCT UPDATE PRICE </th>
        <th>IMAGE</th>
		<th>ACTION</th>
      </tr>
    </thead>


    <tbody>
    
      <tr>

        <td>Demo 01</td>
		<td>Demo 02</td>
		<td>Demo 03</td>
		<td>Demo 04</td>
       
        <td><img src="{{asset('public/img/'.$user['IMAGE'])}}" width="150px" height="150px" /></td>
       
        <td><a class="w3-jumbo w3-spin fa fa-money" href=" ">  Buy </td>
      </tr> 

    </tbody>

</table>
</div>
</div>   

</div>
</body>
</html>

