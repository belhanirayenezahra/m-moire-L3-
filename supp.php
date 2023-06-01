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
        header("Location: indexM.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "patient Not Deleted";
        header("Location: indexM.php");
        exit(0);
    }
}