<?php

	include 'connection.php';


if(isset($_POST['email']) &&  isset($_POST['contact']) )
{


$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$accStatus = $_POST['acc-status'];




$query="INSERT INTO `xeroxmens`( `name`, `last name`, `email`, `contact`, `acc status`) VALUES ('$fname','$lname','$email','$contact','$accStatus')";


	$res = $con->query($query);
	

	if($res)
	{
			echo "New xeroxmen added successfully" ;
	}
	else{
	
			echo "Error occured";

	}

}
	


else{
	echo "Email & contact no is empty";
}


?>