<?php
//connection to the databse
include_once 'dbconnect.php';

//get value
$da = $_POST['id'];  	 
$db = $_POST['fname'];	
$dc = $_POST['lname'];
$de = $_POST['age'];
$di = $_POST['tel'];
$df = $_POST['adress'];
$dj = $_POST['email'];
$dk = $_POST['date'];
$dl = $_POST['humain'];
$dm = $_POST['nature'];
$dob = $_POST['dob'];

//inserting into my table
$mysql = "INSERT INTO apointment(id, fname, lname, age, tel, adress, email, date, humain, nature, dob ) VALUES('$da', '$db', '$dc', '$de', '$df', '$di', '$dj', '$dk', '$dl', '$dm', '$dob')" or die("never wake up");
$done = mysql_query($mysql) or die("Cannot");

header('location:index.php');
?>