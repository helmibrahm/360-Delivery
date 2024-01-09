<?php
    include("dbcon.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dope2.css">
    <link rel="icon" href="logo.jpg" type="image/x-icon">
    <link rel="shortcut icon" href="image/logo.jpg" type="image/x-icon">

    <style>
         .view-order-table th,
        .view-order-table td {
            text-align: left;
            padding: 10px;
            border: 1px solid #d0d0d04b;
        }

        .view-order-table th:nth-child(2),
        .view-order-table td:nth-child(2) {
            width: 200px; /* Adjust the width as desired */
        }

         .view-order-table th {
            background-color: #F1F5F9;
        }

        .view-btn {
            color: blue;
        }
    </style>
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
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="sales summary.html">Sales Summary</a></li>    </ul>
</nav>
<script src="js/script.js"></script>

<main>
    <section class="section2">
        <h1>
            View Order
        </h1>
    </section>

    <section class="section2">
        <div class="view-order-table">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer Name</th>
                        <th>Pick Up Point</th>
                        <th>Drop Point</th>
                        <th>Amount</th>
                        <th>Details</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                   <?php

                        $query = "SELECT ID, Name, Pickup, Drop_Point, amount FROM booking;";

                        $result = mysqli_query($connection, $query);

                       if(!$result){

                            die("query Failed".mysqli_error($connection));

                        }
                            else{

                                while($row = mysqli_fetch_assoc($result)){

                        ?>
                            <tr>
                                <td><?php echo $row['ID']; ?></td>
                                <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis;"><?php echo $row['Name']; ?></td>
                                <td><?php echo $row['Pickup']; ?></td>
                                <td><?php echo $row['Drop_Point']; ?></td>
                                <td><?php echo $row['amount']; ?></td>
                                <td><a href="details.php?id=<?php echo $row['ID']; ?>" class="edit-button" style="background-color: #538c50;">View Details</a></td>
                                <td><a href="details.php?id=<?php echo $row['ID']; ?>" class="edit-button" style="background-color: #f7cb73;">Pending</a></td>
                            </tr>

                                    <?php 
                                }
                            }

                        ?>
                </tbody>
            </table>
        </div>
    </section>

</main>
<script>
    // Check if there is a message parameter in the URL
    const params = new URLSearchParams(window.location.search);
    
    // Display a pop-up message if the "insert_msg" parameter is present
    if (params.has('insert_msg')) {
        const message = params.get('insert_msg');
        window.alert(message);
    }
</script>

</body>
</html>
