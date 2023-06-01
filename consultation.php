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
                   <h5 class="modal-title" id="exampleModalLabel">Add new consultation </h5>


                </div>

                <form action="insertcode.php" method="POST">

                    <div class="modal-body">
                        <div class="form-group">
                            <label> Id malade</label>
                            <input type="text" name="id" class="form-control" placeholder="id malade">
                        </div>

                        <div class="form-group">
                            <label> date consultauin</label>
                            <input type="date" name="date_consult" class="form-control" placeholder="Date consyltation">
                        </div>

                        <div class="form-group">
                            <label> Patient Problem </label>
                            <input type="text" name="problem" class="form-control" placeholder="Enter problem">
                        </div>

                        <div class="form-group">
                            <label> Diagnosed </label>
                            <input type="text" name="diagnostique" class="form-control" placeholder="diagnosed">
                        </div>
 

                        <div class="form-group">
                            <label> medical dose </label>
                            <input type="text" name="dose_med" class="form-control" placeholder="dose medical">
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
                            <input type="text" name="loeil gauche" class="form-control" placeholder="left eye">
                        </div>


                        <div class="form-group">
                            <label> signature </label>
                            <input type="text" name="signature med" class="form-control" placeholder="signature">
                        </div>

                    </div>
                    <div class="modal-footer">
                          <button type="submit" name="insertdata" class="btn btn-primary">Save Consultation</button>
                    </div>
                </form>

            </div>
        </div>
    </div> 
 

    </div>
    
</body>
</html>