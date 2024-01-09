<?php
include 'dbcon.php';

    if(isset($_POST['add_feedback'])){

        $Name = $_POST['Name'];
        $Feedback = $_POST['Feedback'];

        //form validation
        if (trim($Name) == "" || trim($Feedback) == ""){
            header('location:about_us.html?message=Please fill in the form');
        }

        else{
                                        //name in db
            $query = "insert into feedback (Name, Review) values ('$Name','$Feedback');";

            $result = mysqli_query($connection,$query);


            if(!$result){
                die("Query Failed".mysqli_error($connection));
            } 
            else{
                header('location:about_us.html?insert_msg=Thanks for your feedback');
            }
        }

    }

?>