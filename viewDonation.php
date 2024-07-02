<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title> Add Staff </title>
  <link rel="stylesheet" href="css/Style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="title">View Donations</div>

    <div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
 <th>NO</th>   
<th>Donor Name</th>
<th>Contact No</th>
<th>Address</th>
<th>Date</th>
<th>Type</th>

</tr>

</thead>

<tbody class= "tbody">

<?php

$i = 0;

$get_pro = "select * from donars";

$run_pro = mysqli_query($Conn,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){


    $doname = $row_pro['doname'];
    //  $lastname = $row_pro['LastName'];
     $contactNo  = $row_pro['contactNo'];
     $address = $row_pro['address'];
     $date = $row_pro['date'];
     $dotype = $row_pro['dotype'];
$i++;

?>

<tr >

<td><?php echo $i; ?></td>

<td><?php echo $doname; ?></td>
<td><?php echo $contactNo; ?></td>
<td><?php echo $address; ?></td>
<td><?php echo $date; ?></td>
<td><?php echo $dotype; ?></td>





</tr>

<?php } ?>


</tbody>


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->


  </div>




</body>

</html>