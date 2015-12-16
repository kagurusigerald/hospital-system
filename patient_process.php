<?php

include_once 'dbconnect.php';

    $patient_id = $_POST['patient_id'];
	$pname = $_POST['pname'];
	$regno = $_POST['regno'];
	$email = $_POST['email'];
	$test = $_POST['test'];
	$address = $_POST['address'];
	$date = $_POST['date'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$passport = $_POST['passport'];
	$dob = $_POST['dob'];
	
//inserting into my table
$mysql = "INSERT INTO patient_tb(patient_id, pname, regno, email, test, address, date, name, city, passport, dob) VALUES('$patient_id', '$pname', '$regno', '$email', '$test', '$address', '$date', '$name', '$city', '$passport', '$dob')" or die("never wake up");
$done = mysql_query($mysql) or die("Cannot");

header("Location: index.php");
?>
