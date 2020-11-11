<?php

	include 'connection.php';


if($con )
{


	$query="select * from subadmins";

	$result=$con->query($query);
	

	$output='';


	if(mysqli_num_rows($result)>0){

		while ($row=mysqli_fetch_array($result)) {
			$output .='

    <tr>
      <th scope="row">'.$row["id"].'</th>
      <td>'.$row["name"].'</td>
      <td>'.$row["last name"].'</td>
      <td>'.$row["contact"].'</td>
      <td>'.$row["email"].'</td>
      <td>'.$row["acc status"].'</td>
      <td><button type="button" class="btn btn-warning">update</button></td> 
      <td><button type="button" class="btn btn-danger">Delete</button></td>

    </tr>



			';

		}


	}
	else
	{
		$output .='
      <td>No data found</td>
      	
     
		';
	}


echo $output;


}
else{
	echo "Email & contact no is empty";
}


?>