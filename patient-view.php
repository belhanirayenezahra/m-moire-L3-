<?php
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

    <title>patient View</title>
</head>
<body>
<?php include_once('header.php');?>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-11 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4>patient View Details 
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
                                
                                    <div class="mb-3">
                                        <label>Patient Name</label>
                                        <p class="form-control">
                                            <?=$patient['firstname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label> Patient Last Name</label>
                                        <p class="form-control">
                                            <?=$patient['lastname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Patient Email</label>
                                        <p class="form-control">
                                            <?=$patient['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Patient Phone</label>
                                        <p class="form-control">
                                            <?=$patient['phone_numbre'];?>
                                        </p>
                                    </div>


                                    <div class="mb-3">
                                        <label>Patient Birthday</label>
                                        <p class="form-control">
                                            <?=$patient['birthday'];?>
                                        </p>
                                    </div>


                                    <div class="mb-3">
                                        <label>Patient gender</label>
                                        <p class="form-control">
                                            <?=$patient['gender'];?>
                                        </p>
                                    </div>


                                    <div class="mb-3">
                                        <label>Patient city</label>
                                        <p class="form-control">
                                            <?=$patient['city'];?>
                                        </p>
                                    </div>
                                    

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
