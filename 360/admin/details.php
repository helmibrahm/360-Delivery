<?php
include('dbcon.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM booking WHERE ID = '$id'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query Failed" . mysqli_error($connection));
    }
}
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
            Booking Details
        </h1>
    </section>
    <section class="section2">
        <div class="view-order-table">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Contact(+60)</th>
                        <th>Courier</th>
                        <th>Tracking Num</th>
                        <th>Notes</th>
                        <th>Payment(RM)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>{$row['ID']}</td>";
                        echo "<td>{$row['Name']}</td>";
                        echo "<td>{$row['Contact']}</td>";
                        echo "<td>{$row['Courier']}</td>";
                        echo "<td>{$row['TrackingNum']}</td>";
                        echo "<td>{$row['Notes']}</td>";
                        echo "<td>{$row['Payment']}</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
                    <tr>
                        <td colspan="1"><a href="view_order.php" class="edit-button" style="background-color:blue; font-size: 12px; padding: 5px 10px;">&#8617;</a></td>
                    </tr>
            </table>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>