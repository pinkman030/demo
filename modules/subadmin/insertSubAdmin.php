<?php

	include 'connection.php';


if(isset($_POST['email']) &&  isset($_POST['contact']) )
{


$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$accStatus = $_POST['acc-status'];




$query="INSERT INTO `subadmins`( `name`, `last name`, `contact`, `email`, `acc status`) VALUES ('$fname','$lname','$contact','$email','$accStatus')";


	$res = $con->query($query);
	

	if($res)
	{
			echo "New subadmin added successfully" ;
	}
	else{
	
			echo "Error occured";

	}

}
	


else{
	echo "Email & contact no is empty";
}


?>