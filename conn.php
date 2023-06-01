<?php
session_start();
$host = 'localhost';
$dbname= 'memoire';
$username= 'root';
$password = '';



try{
  $con = new PDO("mysql:host=$host; memoir=$dbname", $username, $password );
                  echo "connecte a la BD!";
                      }
                      catch (PDOException $e) {
                        die('Erreur : ' . $e->getMessage()) ;
                         }

if(isset($_POST['ok'])){
$username=$_POST['email'];
$password=$_POST['password'];

if ($username == 'admin@gmail.com' && $password == '0000') {
  header('location: indexM.php');
} else {

$sql="SELECT * FROM users WHERE email ='$username' AND password ='$password'";