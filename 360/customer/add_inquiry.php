<?php
include 'dbcon.php';

if (isset($_POST['add_inquiry'])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $PhoneNum = $_POST['Phone_Num'];
    $Inquiry = $_POST['Inquiry'];

    // form validation
    if ($Name == "" || $Email == "" || $PhoneNum == "" || $Inquiry == "") {
        header('location: contact us.html?message=Please fill in the form');
    } else {
        $query = "INSERT INTO inquiry (cust_name, email, phone_num, message) VALUES ('$Name','$Email','$PhoneNum','$Inquiry');";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Query Failed" . mysqli_error($connection));
        } else {
            header('location: contact us.html?insert_msg=Thanks for the question');
        }
    }
}
?>
