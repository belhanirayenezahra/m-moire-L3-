<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    
    <title>patient </title>
   
</head>
<body>
<?php include_once('header.php');?>
  
    <div class="container mt-4">
   

    <div class="row">
        <div class="col-md-11 offset-md-2">
            <div class="card">
                <div class="card-header">
                        <h4>patient Details
                            <a href="signup.php" class="btn btn-primary float-end">Add patient</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                     <th>Birthday</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th> gender</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM users";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $Patient)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $Patient['id']; ?></td>
                                                <td><?= $Patient['firstname']; ?></td>
                                                <td><?= $Patient['lastname']; ?></td>
                                                 <td><?= $Patient['birthday']; ?></td>
                                                <td><?= $Patient['email']; ?></td>
                                                <td><?= $Patient['phone_numbre']; ?></td>
                                                <td><?= $Patient['gender']; ?></td>
                                               
                                                
                                                <td>
                                                    <a href="patient-view.php?id=<?= $Patient['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="patient-edit.php?id=<?= $Patient['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_patient" value="<?=$Patient['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                   
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
                       -->
</body>
</html>