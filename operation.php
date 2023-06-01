<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> el Bassaair clinic </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">

</head>
<body>
<?php include_once('headerM.php');?>
   
<div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Add new operation</h5>


                    
                </div>

                <form action="insertcode.php" method="POST">

                    <div class="modal-body">
                        <div class="form-group">
                            <label> Id malade</label>
                            <input type="text" name="id" class="form-control" placeholder="id malade" require="true">
                        </div>

                        <div class="form-group">
                            <label> heur</label>
                            <input type="heur" name="heur_operation" class="form-control" placeholder="00:00:00" require="true">
                        </div>

                        <div class="form-group">
                            <label> date operation </label>
                            <input type="date" name="date_operation" class="form-control" placeholder="Enter problem" require="true">
                        </div>

                        <div class="form-group">
                            <label>oeil</label>
                            <input type="text" name="oeil" class="form-control" placeholder="diagnosed"require="true">
                        </div>
 

                        <div class="form-group">
                            <label> resultat </label>
                            <input type="text" name="resultat" class="form-control" placeholder="dose medical" require="true">
                        </div>


                        <div class="form-group">
                            <label> protocole </label>
                            <input type="text" name="protocole" class="form-control" placeholder="glasses" require="true">
                        </div>
                       


                       
                        <div class="form-group">
                            <label> type operaton </label>
                            <input type="text" name="type" class="form-control" placeholder="type"require="true">
                        </div>
                        <div class="form-group">
                            <label> prix operation </label>
                            <input type="text" name="prix" class="form-control" placeholder="prix"require="true">
                        </div>




                    </div>
                    <div class="modal-footer">
                      <button type="submit" name="insertdataa" class="btn btn-primary">Save operation</button>
                    </div>
                </form>

            </div>
        </div>
    </div> 
 

        </div>
       


    </div>
   
</body>
</html>