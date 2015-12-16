<?php
//connection to the databse
include_once 'dbconnect.php';

//get value
$da = $_POST['id'];  	 
$db = $_POST['name'];	
$dc = $_POST['email'];
$de = $_POST['comment'];
$df = $_POST['phone'];

//inserting into my table
$mysql = "INSERT INTO contatc(id, name, email, comment, phone) VALUES('$da', '$db', '$dc', '$de', '$df')" or die("never wake up");
$done = mysql_query($mysql) or die("Cannot");

header('location:index.php');
?>