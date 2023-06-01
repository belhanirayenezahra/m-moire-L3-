<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Al shifa Hospital</title>
    <link rel="stylesheet" href="stylerdv.css">
 
</head>
<body>
   

<div class="main">
        <div class="logo"><a href="home.php">
            <img src="logo1.png"></a>
           <h2>Clinique EL-bassair<h2>
        </div>
        <div class="book">
        
            <p>Welcome to Al Basair Clinic<br> fill out the form to schedule an appointment with a doctor</p>
            <form action="booking.php" method="post">
                <input type="text" placeholder="Full Name" name="FullName" required="true"/>
                <input type="text" placeholder="Phone Number" name="phone" required="true"/>
               
                <input type="date" name="date" required="treu"/>
                <input type="submit" value="appoiment" name="send"/>
            </form>





            <?php

            $host= "localhost";
            $user= "root";
            $password= "";
            $dbName= "memoir";
        
            $conn = mysqli_connect($host, $user, $password,$dbName);

         
            
            if(isset($_POST['send'])){
            
                $pName= $_POST['FullName'];
                $phonee= $_POST['phone'];
                $prdv= $_POST['date'];
              
                            
            
                $query = "INSERT INTO rdv(FullName,phone,rdv) VALUE('$pName ','$phonee ','$prdv ')";
                $result = mysqli_query($conn,$query);
                echo "<p style='color:green'>" . "Reservation done" . "</p>";
            }
            else{
                echo "<p style='color:red'>" . "Sorry, something went wrong. Try again" . "</p>";
            }


            ?>


        </div>
    </div>
</body>
</html>