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
        .row {
            background-color: #CED6CA;
        }

        h2 {
            background-color: #DCE613;
        }

        a {
            padding: 5px;
        }
    </style>
</head>


<body>
    <div class="container">
        <h2 class="text-center">Product Insert Form</h2>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">







                <!-- THESE ARE THE FORM PART -->

                <form action="insert_product.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="PRODUCT NAME">PRODUCT NAME:</label>
                        <input type="text" class="form-control" placeholder="Enter product name" name="p_name">
                    </div>

                    <div class="form-group">
                        <label for="PRODUCT ID">PRODUCT ID:</label>
                        <input type="number" class="form-control" placeholder="Enter product id " name="p_id">
                    </div>

                    <div class="form-group">
                        <label for="PRODUCT PRICE">PRODUCT PRICE</label>
                        <input type="number" class="form-control" placeholder="Enter product price" name="p_price">
                    </div>

                    <div class="form-group">
                        <label for="PRODUCT UPDATE PRICE">PRODUCT UPDATE PRICE</label>
                        <input type="number" class="form-control" placeholder="Enter product update price" name="p_u_price">
                    </div>

                    <div class="form-group">
                        <label for="IMAGE">PRODUCT IMAGE:</label>
                        <input type="file" class="form-control" name="simg">
                    </div>

                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
                    </tr>



                </form>
            </div>
        </div>
    </div>
</body>
</html>




