<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'memoir');

if(isset($_POST['insertdata']))
{
   
    $idmalade = $_POST['id'];
    $date = $_POST['date_consult'];
    $diagnostiqeu = $_POST['diagnostique'];
    $dose = $_POST['dose_med'];
    $typelunett = $_POST['type_lunett'];
    $droit = $_POST['loeil_droit'];
    $gauche = $_POST['loeil_gauche'];
    $sign = $_POST['signature_med'];
    

    $query = "INSERT INTO consultatiion (`id`,`date_consult`,`diagnostique`,`dose_med`,`type_lunett`,`loeil_droit`,`loeil_gauche`,`signature_med`) VALUES ('$idmalade','$date','$diagnostiqeu','$dose','$typelunett','$droit','$gauche','$sign')";

    
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location:indexM.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}





if(isset($_POST['insertdataa']))
{
   
    $idmalade = $_POST['id'];
    $heur = $_POST['heur_operation'];
    $date = $_POST['date_operation'];
    $oeil = $_POST['oeil'];
    $resultat = $_POST['resultat'];
    $protocole = $_POST['protocole'];
    $type = $_POST['type'];
    $prix = $_POST['prix'];
   
    

    $query = "INSERT INTO opération (`id`,`heur_operation`,`date_operation`,`oeil`,`resultat`,`protocole`,`type`,`prix`)
     VALUES ('$idmalade','$heur','$date','$oeil','$resultat','$protocole','$type','$prix')";


    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location:indexM.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}







?>


