<?php
    include("dbcon.php");
?>

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
    <link rel="icon" href="logo.jpg" type="image/x-icon">
    <link rel="shortcut icon" href="image/logo.jpg" type="image/x-icon">

    <title>360 Delivery-Admin</title>
    <style>
        .view-order-table th,
        .view-order-table td {
            text-align: left;
            padding: 10px;
            border: 1px solid #d0d0d04b;
        }

        .view-order-table th {
            background-color: #F1F5F9;
        }

        .view-order-table th,
        .view-order-table td {
            width: 20%; /* Adjust the width according to your preference */
        }

        .modal-body .form-group {
            margin-bottom: 1rem;
        }
        .edit-button{
        	background-color: blue;
        }
        
    </style>
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
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="sales summary.html">Sales Summary</a></li>    </ul>
</nav>
<script src="js/script.js"></script>

<main>
    <section class="section2">
        <h1>
            All Services
        </h1>
    </section>
    
    <section class="section2">
        <div class="view-order-table">
        <table>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>College Name</th>
                        <th>Price</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                   <?php

                        $query = "SELECT * FROM price;";

                        $result = mysqli_query($connection, $query);

                       if(!$result){

                            die("query Failed".mysqli_error($connection));

                        }
                            else{

                                while($row = mysqli_fetch_assoc($result)){

                        ?>
                            <tr>
                                <td><?php echo $row['ID']; ?></td>
                                <td><?php echo $row['college_name']; ?></td>
                                <td><?php echo $row['parcel_price']; ?></td>
                                <td><a href="edit_page.php?id=<?php echo $row['ID']; ?>" class="edit-button">EDIT</a></td>
                                <td><a href="delete_page.php?id=<?php echo $row['ID']; ?>" class="delete-button">DELETE</a></td>
                            </tr>

                                    <?php 
                                }
                            }

                        ?>
                    </tbody>
            </table>
            <?php

        if(isset($_GET['message'])){

            echo "<h6>".$_GET['message']."</h6>";
        }

    ?>

    <?php

        if(isset($_GET['insert_msg'])){

            echo "<h3>".$_GET['insert_msg']."</h3>";
        }

    ?>
    <?php

        if(isset($_GET['update_msg'])){

            echo "<h3>".$_GET['update_msg']."</h3>";
        }

    ?>

    <?php

        if(isset($_GET['delete_msg'])){

            echo "<h3>".$_GET['delete_msg']."</h3>";
        }

    ?>
    <!-- Modal -->
        <form action="add_services.php" method="post">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD SERVICES</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
                    <div class="form-group">
                        <label for="college_name">College Name</label>
                        <input type="text" name="college_name" class="form-control">
                    </div>
                     <div class="form-group">
                        <label for="parcel_price">Parcel Price</label>
                        <input type="text" name="parcel_price" class="form-control">
                    </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-success" name="add_services" value="ADD">
              </div>
            </div>
          </div>
        </div>
        </form>

    </div>
    <div class="add_button">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Service</button>
        </div>
        
    </section>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
