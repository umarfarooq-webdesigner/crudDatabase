<?php
session_start();
require 'db_connection.php';

// save student data
    if(isset($_POST['save_student_data']))
    {
        $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $ripple = mysqli_real_escape_string($con, $_POST['ripple']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        $query = "INSERT INTO studentdata (firstName, lastName, email, ripple, address, phone, password) VALUES ('$firstName','$lastName','$email','$ripple', '$address', '$phone', '$password')";


        $query_run = mysqli_query($con, $query);
        if($query_run)
        {
            $_SESSION['message'] = "<b> Student Record Created Successfully </b>";
            header("Location: home.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Student Record Not Created";
            header("Location: home.php");
            exit(0);
        }
    }


// delete student record
    if(isset($_POST['delete_student']))
    {
        $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

        $query = "DELETE FROM studentdata WHERE id='$student_id' ";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            $_SESSION['message'] = "<b> Student Record Deleted Successfully </b>";
            header("Location: students_detail.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Student Record Not Deleted";
            header("Location: students_detail.php");
            exit(0);
        }
    }
