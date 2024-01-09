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
    </ul>
    <br>
    Hello, <?php echo $user_data['user_name']; ?>
</nav>

<script src="js/script.js"></script>

<main>
    <!-- Gradient Background Section -->
    <div class="gradient-section">
    </div>
    <section>
        <div class="box1">
            <div class="total-order">Total Order</div>
            <div class="number-of-total-order">15</div>
            <div class="order-completed">3 <span>Completed</span></div>
        </div>
        <div class="box2">
            <div class="total-order">Teams</div>
            <div class="number-of-total-order">3</div>
            <div class="order-completed">1 <span>Active</span></div>
        </div>
    </section>

    <section>
        <div class="team-table">
            <h3>Teams</h3>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Last Activity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe<br><span class="email">john.doe@example.com</span></td>
                        <td>Owner</td>
                        <td>Today</td>
                    </tr>
                    <tr>
                        <td>John Doe<br><span class="email">john.doe@example.com</span></td>
                        <td>Assistant</td>
                        <td>Today</td>
                    </tr>
                    <tr>
                        <td>John Doe<br><span class="email">john.doe@example.com</span></td>
                        <td>Assistant</td>
                        <td>Today</td>
                    </tr>
                    <tr>
                        <td>John Doe<br><span class="email">john.doe@example.com</span></td>
                        <td>Assistant</td>
                        <td>Today</td>
                    </tr>
                    <tr>
                        <td>John Doe<br><span class="email">john.doe@example.com</span></td>
                        <td>Assistant</td>
                        <td>Today</td>
                    </tr>
                    <tr>
                        <td>John Doe<br><span class="email">john.doe@example.com</span></td>
                        <td>Assistant</td>
                        <td>Today</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

</main>

</body>
</html>
