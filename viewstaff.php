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
    <div class="title">View Staff</div>

    <div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
 <th>NO</th>   
<th>First Name</th>
<th>Name With Initials</th>
<th>Birthday</th>
<th>NIC</th>
<th>Contact No</th>
<th>Address</th>
<th>Email</th>
<th>Gender</th>
<th>Edit</th>
<th>Delete</th>
</tr>

</thead>

<tbody class= "tbody">

<?php

$i = 0;

$get_pro = "select * from staff";

$run_pro = mysqli_query($Conn,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){


    $firstname = $row_pro['FirstName'];
    //  $lastname = $row_pro['LastName'];
     $nameinitial  = $row_pro['nameInitial'];
     $birthday = $row_pro['birthday'];
     $nic = $row_pro['nic'];
     $ContactNo = $row_pro['ContactNo'];
     $Address = $row_pro['Address'];
     $email = $row_pro['email'];
     $gender = $row_pro['gender'];
     $staffId = $row_pro['staffId'];
$i++;

?>

<tr >

<td><?php echo $i; ?></td>

<td><?php echo $firstname; ?></td>
<!-- <td><?php echo $lastname; ?></td> -->
<td><?php echo $nameinitial; ?></td>
<td><?php echo $birthday; ?></td>
<td><?php echo $nic; ?></td>
<td><?php echo $ContactNo; ?></td>
<td><?php echo $Address; ?></td>
<td><?php echo $email; ?></td>
<td><?php echo $gender; ?></td>

<td class= "ico">

<a href="index.php?editStaff=<?php echo $staffId; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>
<td class= "ico">

<a href="index.php?deleteStaff=<?php echo $staffId; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>



</tr>

<?php } ?>


</tbody>


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->


  </div>




</body>

</html>