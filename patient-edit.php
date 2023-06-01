<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Pateint Edit</title>
</head>
<body>
<?php include_once('header.php');?>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-11 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Patient Edit 
                            <a href="indexsec.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $patient_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM users WHERE id='$patient_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $patient = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="patient_id" value="<?= $patient['id']; ?>">

                                    <div class="mb-3">
                                        <label>patient Name</label>
                                        <input type="text" name="name" value="<?=$patient['firstname'];?>" class="form-control">
                                    </div> 
                                    <div class="mb-3">
                                        <label>patient last name</label>
                                        <input type="text" name="LastName" value="<?=$patient['lastname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>patient birthdat</label>
                                        <input type="text" name="birthday" value="<?=$patient['birthday'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>patient Email</label>
                                        <input type="email" name="email" value="<?=$patient['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>patient Phone</label>
                                        <input type="text" name="phone" value="<?=$patient['phone_numbre'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>patient gender</label>
                                        <input type="text" name="gender" value="<?=$patient['gender'];?>" class="form-control">
                                    </div>
                                   
                                    <div class="mb-3">
                                        <button type="submit" name="update_patient" class="btn btn-primary">
                                            Update patient
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>

