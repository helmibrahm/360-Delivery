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
    <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">


    <style>
        .inquiry-table th,
        .inquiry-table td {
            text-align: left;
            padding: 10px; /* Adjust the padding according to your preference */
            border: 1px solid #d0d0d04b;
        }

        .inquiry-table th {
            background-color: #F1F5F9;
             width: 50px;
        }

        .inquiry-table th:nth-child(2),
        .inquiry-table td:nth-child(2) {
            width: 200px; /* Set the width as desired for Customer Name column */
        }

        .inquiry-table th:nth-child(3),
        .inquiry-table td:nth-child(3) {
            width: 400px; /* Set the width as desired for Feedback column */
        }

        .table-cell {
            /* Add any common styles for table cells here */
            padding: 8px;
        }

        .review-cell {
            white-space: pre-wrap; /* Allow text to wrap within the cell */
            /* Add any specific styles for the review cell here */
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
        <h1>Inquiry</h1>
    </section>
    <section class="section2">
        <div class="inquiry-table">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer Name</th>
                        <th>Feedback</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $query = "SELECT * FROM feedback;";

                        $result = mysqli_query($connection, $query);

                       if(!$result){

                            die("query Failed".mysqli_error($connection));

                        }
                            else{

                                while($row = mysqli_fetch_assoc($result)){

                        ?>
                            <tr class="table-row">
                                <td class="table-cell"><?php echo $row['Id']; ?></td>
                                <td class="table-cell"><?php echo $row['Name']; ?></td>
                                <td class="table-cell review-cell"><?php echo $row['Review']; ?></td>
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

        </div>
    </section>

</main>

</body>
</html>
