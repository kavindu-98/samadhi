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
    <div class="title">View Labours</div>

    <div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead class="thead">

<tr>
 <th>NO</th>   
<th>Name With Initials</th>
<th>Full Name</th>
<th>First Name</th>
<th>Birthday</th>
<th>Contact No</th>
<th>Address</th>
<th>Gender</th>
<th>Company</th>
<th>Edit</th>
<th>Delete</th>
</tr>

</thead>

<tbody class= "tbody">

<?php

$i = 0;

$get_pro = "select * from labor";

$run_pro = mysqli_query($Conn,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){


    $nameInitial = $row_pro['nameInitial'];
    //  $lastname = $row_pro['LastName'];
     $fullName  = $row_pro['fullName'];
     $FirstName  = $row_pro['FirstName'];
     $birthday = $row_pro['birthday'];
     $ContactNo = $row_pro['ContactNo'];
     $Address = $row_pro['Address'];
     $gender = $row_pro['gender'];
     $company = $row_pro['company'];
     $laborId = $row_pro['laborId'];
    
$i++;

?>

<tr >

<td><?php echo $i; ?></td>

<td><?php echo $nameInitial; ?></td>
<td><?php echo $fullName; ?></td>
<td><?php echo $FirstName; ?></td>
<td><?php echo $birthday; ?></td>
<td><?php echo $ContactNo; ?></td>
<td><?php echo $Address; ?></td>
<td><?php echo $gender; ?></td>
<td><?php echo $company; ?></td>


<td class= "ico">

<a href="index.php?editLabors=<?php echo $laborId; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>
<td class= "ico">

<a href="index.php?deleteLabors=<?php echo $laborId; ?>">

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