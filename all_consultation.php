<?php
    session_start();
    // require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> el Bassaair clinic </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
   <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">-->
</head>

<body>
<?php include_once('headerM.php');?>
 
    <div class="container">
    <div class="col-md-11 offset-md-2">
        <div class="jumbotron">
            <div class="card">
                <h2> All Consultation </h2>
            </div>


            <div class="card">
                <div class="card-body">

                    <?php
                    $connection = mysqli_connect("localhost", "root", "");
                    $db = mysqli_select_db($connection, 'memoir');
                    $id33=$_GET['id33'];
                    $query = "SELECT * FROM consultatiion where id=$id33";
                    $query_run = mysqli_query($connection, $query);
                    ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                
                                <th scope="col">id malade</th>
                                <th scope="col">date consultation </th>
                                <th scope="col">diagnostique</th>
                                <th scope="col">medical dose</th>
                                <th scope="col">medical glasses</th>
                                <th scope="col">right eye</th>
                                <th scope="col">left eye </th>
                                
                            </tr>
                        </thead>
                        <?php
                        if ($query_run) {
                            foreach ($query_run as $row) {
                        ?>
                                <tbody>
                                    <tr>
                                        
                                        <td> <?php echo $row['id']; ?> </td>
                                        <td> <?php echo $row['date_consult']; ?> </td>
                                        <td> <?php echo $row['diagnostique']; ?> </td>
                                        <td> <?php echo $row['dose_med']; ?> </td>
                                        <td> <?php echo $row['type_lunett']; ?> </td>
                                        <td> <?php echo $row['loeil_droit']; ?> </td>
                                        <td> <?php echo $row['loeil_gauche']; ?> </td>

                                        
                                        
                                    </tr>
                                </tbody>
                        <?php
                            }
                        } else {
                            echo "No Record Found";
                        }
                        ?>
                    </table>
                </div>
            </div>


        </div>
        </div>
    </div>


    <hr   />


    <div class="container">
    <div class="col-md-11 offset-md-2">
        <div class="jumbotron">
            <div class="card">
                <h2> All Operation </h2>
            </div>


            <div class="card">
                <div class="card-body">

                    <?php
                    $connection = mysqli_connect("localhost", "root", "");
                    $db = mysqli_select_db($connection, 'memoir');
                    $id33=$_GET['id33'];
                    $query = "SELECT * FROM opération where id=$id33";
                    $query_run = mysqli_query($connection, $query);
                    ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                
                                <th scope="col">id malade</th>
                                <th scope="col">time operation</th>
                                <th scope="col">date operation</th>
                                <th scope="col">eye</th>
                                <th scope="col">resultat</th>
                                <th scope="col">protocole</th>
                                <th scope="col">type operation</th>
                                <th scope="col">prix </th>
                                
                            </tr>
                        </thead>
                        <?php
                        if ($query_run) {
                            foreach ($query_run as $row) {
                        ?>
                                <tbody>
                                    <tr>
                                        
                                        <td> <?php echo $row['id']; ?> </td>
                                        <td> <?php echo $row['heur_operation']; ?> </td>
                                        <td> <?php echo $row['date_operation']; ?> </td>
                                        <td> <?php echo $row['oeil']; ?> </td>
                                        <td> <?php echo $row['resultat']; ?> </td>
                                        <td> <?php echo $row['protocole']; ?> </td>
                                        <td> <?php echo $row['type']; ?> </td>
                                        <td> <?php echo $row['prix']; ?> </td>

                                        
                                        
                                    </tr>
                                </tbody>
                        <?php
                            }
                        } else {
                            echo "No Record Found";
                        }
                        ?>
                    </table>
                </div>
            </div>


        </div>
        </div>
    </div>





    


</body>

</html>