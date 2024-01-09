<?php
include 'dbcon.php';

    if(isset($_POST['add_services'])){

        $college_name = $_POST['college_name'];
        $parcel_price = $_POST['parcel_price'];


        //form validation
        if($college_name== ""||$parcel_price== ""){
            header('location:services.php?message=Please fill in the form');
        }

        else{

            $query = "insert into price (college_name, parcel_price) values ('$college_name','$parcel_price');";

            $result = mysqli_query($connection,$query);


            if(!$result){
                die("Query Failed".mysqli_error($connection));
            } 
            else{
                header('location:services.php?insert_msg=New services added successfully');
            }
        }

    }

?>