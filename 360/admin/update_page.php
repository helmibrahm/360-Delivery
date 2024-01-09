<?php include('dbcon.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dope2.css">
    <link rel="icon" href="image/logo.jpg" type="image/x-icon">
    <link rel="shortcut icon" href="image/logo.jpg" type="image/x-icon">

    <title>360 Delivery-Admin</title>
</head>
<body>

<nav>
    <div>
        <img src="logo.jpg" alt="logo pic">
        <a href="login.php" class="admin-btn">Logout</a>
    </div>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="services.php">Services Section</a></li>
        <li><a href="view_order.php">View Order</a>
        <li><a href="order_history.html">Order History</a>
        <li><a href="inquiry.html">Inquiry</a></li>
        <li><a href="sales summary.html">Sales Summary</a></li>    </ul>
</nav>
<script src="js/script.js"></script>

<main>
    <section class="section2">
        <h1>
            Edit Services
        </h1>
    </section>
    <section class="section2">
<div class="view-order-table">
<table>
<tbody>
	<?php

        if(isset($_GET['id'])){
            $id = $_GET['id'];

                $query = "select * from price where id = '$id'";

                $result = mysqli_query($connection, $query);

            if(!$result){

                    die("query Failed".mysqli_error($connection));

                }
                else{

                    $row = mysqli_fetch_assoc($result);

                }
            }

	?>


		<?php 
            //update operation
			if(isset($_POST['update_services']))
            {

				if(isset($_GET['id_new'])){
					$idnew = $_GET['id_new'];
				}

				$college_name = $_POST['college_name'];
				$parcel_price= $_POST['parcel_price'];

				$query = "update price set college_name = '$college_name', parcel_price ='$parcel_price' where id = '$idnew'";

				$result = mysqli_query($connection, $query);

				if(!$result){

                    die("query Failed".mysqli_error($connection));

                }
                else{

                   header('location:services.php?update_msg=You have successfully update the data.');
			    }

            }

		 ?>
</tbody>
</table>

	<form action="update_page.php?id_new=<?php echo $id; ?>" method="post">
	<div class="form-group">
                <label for="college_name">College Name</label>
                <input type="text" name="college_name" class="form-control" value="<?php echo $row ['college_name'] ?>">
            </div>
             <div class="form-group">
                <label for="parcel_price">Price</label>
                <input type="text" name="parcel_price" class="form-control" value="<?php echo $row ['parcel_price'] ?>">
            </div>
    
    <!--submit button-->
     <input type="submit" class="edit-button" name="update_services" value = "Edit">

    </form>

 </div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

