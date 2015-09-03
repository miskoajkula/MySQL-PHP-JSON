<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
	require 'connection.php';
	createStudent();
}


function createstudent()
{
	global $connect;
	
	$firstname = $_POST["firstname"];	
	$lastname = $_POST["lastname"];
	$age = $_POST["age"];
	
	$query = " Insert into student(firstname,lastname,age) values ('$firstname','$lastname','$age');";
	
	mysqli_query($connect, $query) or die (mysqli_error($connect));
	mysqli_close($connect);
	
}








?>