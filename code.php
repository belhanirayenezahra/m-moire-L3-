<?php
require 'dbcon.php';

if(isset($_POST['delete_patient']))
{
    $patient_id = mysqli_real_escape_string($con, $_POST['delete_patient']);

    $query = "DELETE FROM users WHERE id='$patient_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "patient Deleted Successfully";
        header("Location: indexsec.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "patient Not Deleted";
        header("Location: indexsec.php");
        exit(0);
    }
}



if(isset($_POST['update_patient']))
{
    $patient_id = mysqli_real_escape_string($con, $_POST['patient_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $LastName = mysqli_real_escape_string($con, $_POST['LastName']);
    $birthday = mysqli_real_escape_string($con, $_POST['birthday']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
   

    $query = "UPDATE users SET firstname='$name', lastname='$LastName', birthday='$birthday', email='$email', phone_numbre='$phone', gender='$gender' WHERE id='$patient_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "patient Updated Successfully";
        header("Location: indexsec.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "patient Not Updated";
        header("Location: indexsec.php");
        exit(0);
    }

}
