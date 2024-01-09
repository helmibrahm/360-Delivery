<?php
include 'dbcon.php';

if (isset($_POST['booking'])) {
    $Name = $_POST['name'];
    $Matric = $_POST['matric'];
    $Email = $_POST['email'];
    $Contact = $_POST['contact'];
    $Pickup = $_POST['pickup'];
    $Drop = $_POST['drop'];
    $Courier = $_POST['courier'];
    $Tracking = $_POST['tracking_num'];
    $Date = $_POST['date'];
    $Image = $_POST['img'];
    $Amount = $_POST['amount'];
    $Notes = $_POST['notes'];

    // Form validation
    if (trim($Name) == "" || trim($Matric) == "" || trim($Email) == "" || trim($Contact) == "" || trim($Pickup) == "" || trim($Drop) == "" || trim($Courier) == "" || trim($Tracking) == "" || trim($Date) == "" || trim($Amount) == "" || trim($Notes) == "") {
        header('location: book_services.html?message=Please fill in the form');
    } else {
        // Use a prepared statement to calculate total_payment
        $college_name = mysqli_real_escape_string($connection, $Drop);
        $selectQuery = "SELECT amount * parcel_price AS Payment
                FROM booking
                INNER JOIN price ON booking.Drop_Point = price.college_name
                WHERE price.college_name = ?;";

        
        $stmt = mysqli_prepare($connection, $selectQuery);
        mysqli_stmt_bind_param($stmt, "s", $college_name);
        mysqli_stmt_execute($stmt);

        $selectResult = mysqli_stmt_get_result($stmt);

        if (!$selectResult) {
            die("Select Query Failed" . mysqli_error($connection));
        }

        // Fetch the result of the SELECT query
        $row = mysqli_fetch_assoc($selectResult);
        $Payment = $row['Payment'];

        // Use an INSERT statement to insert data into the booking table
        $insertQuery = "INSERT INTO booking (Name, Matric, Email, Contact, Pickup, Drop_Point, Courier, TrackingNum, `Date`, Images, amount, Notes, Payment)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

        $stmt = mysqli_prepare($connection, $insertQuery);
        mysqli_stmt_bind_param($stmt, "sisisssssbisi", $Name, $Matric, $Email, $Contact, $Pickup, $Drop, $Courier, $Tracking, $Date, $Image, $Amount, $Notes, $Payment);
        $insertResult = mysqli_stmt_execute($stmt);

        if (!$insertResult) {
            die("Insert Query Failed" . mysqli_error($connection));
        } else {
            header('location: book_services.html?insert_msg=Book accepted. Please Check Your email.');
        }
    }
}
?>
