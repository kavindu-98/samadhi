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
    <div class="title">View Child</div>

    <div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
 <th>NO</th>   
<th>Name With Initials</th>
<th>Full Name</th>
<th>Birthday</th>
<th>Gender</th>
<th>Edit</th>
<th>Delete</th>
</tr>

</thead>

<tbody class= "tbody">

<?php

$i = 0;

$get_pro = "select * from childdetails";

$run_pro = mysqli_query($Conn,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){


    $initial = $row_pro['initials'];
    //  $lastname = $row_pro['LastName'];
     $fullName  = $row_pro['fullName'];
     $birthday = $row_pro['birthdate'];
     $gender = $row_pro['gender'];
     $id = $row_pro['id'];
    
$i++;

?>

<tr >

<td><?php echo $i; ?></td>

<td><?php echo $initial; ?></td>
<td><?php echo $fullName; ?></td>
<td><?php echo $birthday; ?></td>
<td><?php echo $gender; ?></td>

<td class= "ico">

<a href="index.php?editChild=<?php echo $id; ?>">

<i class="fa fa-pencil "> </i> Edit

</a>

</td>
<td class= "ico">

<a href="index.php?deleteChild=<?php echo $id; ?>">

<i class="fa fa-trash-o "> </i> Delete

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