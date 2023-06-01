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

      <link href="bootstrap.min.css" rel="stylesheet"> 
 

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
   
    
    <title>patient </title>
   
</head>
<body>
<?php include_once('headerM.php');?>
  
    <div class="container mt-4">


    <div class="row">
        <div class="col-md-11 offset-md-2">
            <div class="card">
                <div class="card-header">
                        <h4>patient list
                          
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
                                    <th>Phone</th>
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
                                                <td><?= $Patient['id'];?></td>
                                                <td><?= $Patient['firstname']; ?></td>
                                                <td><?= $Patient['lastname']; ?></td>
                                                <td><?= $Patient['birthday']; ?></td>
                                                <td><?= $Patient['phone_numbre']; ?></td>
                                                
                                                <td>
                                                    <a href="all_consultation.php?id33=<?= $Patient['id']?>" class="btn btn-info btn-sm">View</a>
                                                    

   <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Add new consultation </h5>


                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="insertcode.php" method="POST">

                    <div class="modal-body">
                        <div class="form-group">
                            <label> Id malade</label>
                            <input type="text" name="id" class="form-control" placeholder="id malade">
                        </div>

                        <div class="form-group">
                            <label> date consultauin</label>
                            <input type="date" name="date_consult" class="form-control" placeholder="Date consyltation"  >
                        </div>

          
                        <div class="form-group">
                            <label> Diagnosed </label>
                            <input type="text" name="diagnostique" class="form-control" placeholder="diagnosed">
                        </div>
 

                        <div class="form-group">
                            <label> medical dose </label>
                            <input type="text" name="dose_med" class="form-control" placeholder="dose medical" >
                        </div>


                        <div class="form-group">
                            <label> medical glasses </label>
                            <input type="text" name="type_lunett" class="form-control" placeholder="glasses">
                        </div>


                        <div class="form-group">
                            <label> right eye </label>
                            <input type="text" name="loeil droit" class="form-control" placeholder="right eye">
                        </div>


                        <div class="form-group">
                            <label> left eye </label>
                            <input type="text" name="loeil gauche" class="form-control" placeholder="left eye" >
                        </div>


                        <div class="form-group">
                            <label> signature </label>
                            <input type="text" name="signature med" class="form-control" placeholder="signature" >
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertdata" class="btn btn-primary">Save Consultation</button>
                    </div>
                </form>

            </div>
        </div>
    </div> 
 

        </div>
    </div>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

 

                                    

    
























  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        Consultation
                    </button>
                                                    
            
                                                    
             
















    <div class="modal fade" id="studentaddmodala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Add new operation</h5>


                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="insertcode.php" method="POST">

                    <div class="modal-body">
                        <div class="form-group">
                            <label> Id malade</label>
                            <input type="text" name="id" class="form-control" placeholder="id malade">
                        </div>

                        <div class="form-group">
                            <label> operation hour </label>
                            <input type="heur" name="heur_operation" class="form-control" placeholder="00:00:00" required="true">
                        </div>

                        <div class="form-group">
                            <label>  operation date</label>
                            <input type="date" name="date_operation" class="form-control" placeholder="operation date" required="true">
                        </div>

                        <div class="form-group">
                            <label>Eye</label>
                            <input type="text" name="oeil" class="form-control" placeholder="Eye" required="true">
                        </div>
 

                        <div class="form-group">
                            <label> a result </label>
                            <input type="text" name="resultat" class="form-control" placeholder=" result" required="true">
                        </div>


                        <div class="form-group">
                            <label> protocol </label>
                            <input type="text" name="protocole" class="form-control" placeholder="protocol"required="true">
                        </div>


                        <div class="form-group">
                            <label> type operation </label>
                            <input type="text" name="type" class="form-control" placeholder="type operation" required="true">
                        </div>



                        <div class="form-group">
                            <label> prix </label>
                            <input type="text" name="prix" class="form-control" placeholder="prix operation" required="true">
                        </div>



                

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertdataa" class="btn btn-primary">Save Operation</button>
                    </div>
                </form>

            </div>
        </div>
    </div> 
 

    </div>
                    
                   
                  
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodala">
                        Operation
                    </button>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form action="supp.php" method="POST" class="d-inline">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>