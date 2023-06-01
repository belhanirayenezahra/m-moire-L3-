
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="bootstrap.min.css" rel="stylesheet"> 
    
    <title>appioment </title>
   
</head>
<body>
<?php include_once('header.php');?>
  
    <div class="container mt-4">
   

    <div class="row">
        <div class="col-md-11 offset-md-2">
            <div class="card">
                <div class="card-header">
                        <h4>appioment list
                            
                        </h4>
                    </div>
                    <div class="card-body">
                    <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>FullName</th>
                                    <th>number</th>
                                    <th>date appioment</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                             

                            <?php

    $host= "localhost";
    $user= "root";
    $password= "";
    $dbName="memoir";

    $conn = mysqli_connect($host, $user, $password,$dbName);

    

    $query = "SELECT * FROM rdv";
    $result = mysqli_query($conn,$query);

    if ($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
            <td>" 
            . $row['id_rdv'] . "</td>
            <td>" . $row['FullName'] . "</td>
            <td>" .  $row['phone'] .  "</td>
            <td>" . $row['rdv'] . "</td>
            </tr>";
        }
        echo "</table>";
    }
    else{
        echo "something wrong ";
    }


?>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
