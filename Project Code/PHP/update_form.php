<!DOCTYPE html>
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
			background-color: #926EEA;
		}
		h2
		{
		  background-color:#DE53E6;
		}
		a 
		{
		   padding: 5px;
		}
	</style>
</head>


	<body>
		<div class="container">
			<h2 class="text-center">Product Data Update Form</h2>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<form action="update_data_form.php" method="post" enctype="multipart/form-data">
						<table>
							<div class="form-group">
								<label for="PRODUCT NAME">PRODUCT ID:</label>
								<input type="text" class="form-control" name="p_id" value=<?php echo $data['PRODUCT_ID']; ?> required*
							</div>

							<div class="form-group">
								<label for="PRODUCT NAME">PRODUCT NAME:</label>
								<input type="text" class="form-control" name="p_name" value=<?php echo $data['PRODUCT_NAME']; ?> required*
							</div>

							<div class="form-group">
								<label for="PRODUCT PRICE">PRODUCT PRICE</label>
								<input type="number" class="form-control" name="p_price" value=<?php echo $data['PRODUCT_PRICE']; ?> required*
							</div>

							<div class="form-group">
								<label for="PRODUCT UPDATE PRICE">PRODUCT UPDATE PRICE</label>
								<input type="number" class="form-control" name="p_u_price" value=<?php echo $data['PRODUCT_UPDATE_PRICE']; ?> required*
							</div>

							<div class="form-group">
								<label for="IMAGE">PRODUCT IMAGE:</label>
								<input type="file" class="form-control" name="simg">
							</div>

							<tr>
								<td colspan="2" align="center">
									<input type="hidden" name="pid" value="<?php echo $data['ID'];?>" />
									<input type="submit" name="submit" value="Submit" >
								</td>
							</tr>
						</table>
                </form>
			</div>
		</div>
	</body>			
</html>