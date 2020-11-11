<?php

    include 'connection.php';
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Sub-Admin</title>
    <!-- bs -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dis
t/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>




<!-- add subadmin form -->

<div class="container">

<h1 class="bg-dark text-white p-2 mb-5">
    Create New Sub Admin
</h1>





<form action="insertSubAdmin.php" method="post" class="row" id="subadmin-form"  >
   
<div class="form-group col ">
    <label >First Name</label>
    <input type="text" name="fname" id="fname" class="form-control">
  </div>

<div class="form-group col ">
   <label >Last Name</label>
    <input type="text" name="lname" id="lname" class="form-control" >
 
</div>
   

    <div class="w-100"></div>
  
  <div class="form-group col ">
    <label >Email</label>
    <input type="email" id="emailid" name="email" id="email" class="form-control" >
  </div>
   
    <div class="form-group col ">
    <label >Contact no</label>
    <input type="number" id="contactno" name="contact" id="contact"  class="form-control">
  </div>
   
    <div class="w-100"></div>


  <div class="form-group col-sm-2">
    <label >Activate</label>
    <input type="number" name="acc-status" id="acc_status" class="form-control" min="0" max="1">

  </div>
  
    <div class="w-100"></div>


  <input type="submit" id="submit" name="submit" name="submit" class="btn btn-danger ml-3">


</form>


 </div>



<!-- list table -->

<div class="container mt-5">   

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Contact no</th>
      <th scope="col">Email id</th>
      <th scope="col">Acc Status</th>

    </tr>
  </thead>
  <tbody>
  </tbody>
</table>


</div>










<!-- js -->




<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>






<script type="text/javascript">
    
$(document).ready(function(){



// fetch list of subadmins
function loadList()
{

  $.ajax({
    url:"fetchSubAdmin.php",
    method:"GET",
    dataType:"html",
    success:function(data){
      $("table > tbody").html(data);


     }
  });


}


setInterval(function(){

 loadList();

},2000);



});

</script>
<script src="insert.js"></script>

</body>
</html>