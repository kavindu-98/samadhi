<?php


if(isset($_GET['editLabors'])){

$edit_id = $_GET['editLabors'];

$get_pro = "select * from labor where laborId='$edit_id'";

$run_pro = mysqli_query($Conn,$get_pro);


$row_pro = mysqli_fetch_array($run_pro);

$nameInitial = $row_pro['nameInitial'];
$fullName = $row_pro['fullName'];
$FirstName = $row_pro['FirstName'];
$birthday = $row_pro['birthday'];
$ContactNo = $row_pro['ContactNo'];
$Address = $row_pro['Address'];


}

?>


<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title> Add Labours </title>
  <link rel="stylesheet" href="css/Style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="title">Update Labours</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name with initials</span>
            <input type="text" placeholder="Enter name with initials" name="nameInitial" value="<?php echo $nameInitial ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter full name" name="fullName" value="<?php echo $fullName ?>" required>
          </div>
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter first name" name="FirstName" value="<?php echo $FirstName ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Birthdate</span>
            <input type="date" name="birthday" id="" value="<?php echo $birthday ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Contact number</span>
            <input type="text" placeholder="Enter contact number" name="contactNo" value="<?php echo $ContactNo ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Permanent Address</span>
            <input type="text" placeholder="Enter permanent address" name="address" value="<?php echo $Address ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Company</span>
            <select name="company" id="post" required>
              <option value="Sunshine">Sunshine</option>
              <option value="Moonlight">Moonlight</option>
              
            </select>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="m">
          <input type="radio" name="gender" id="dot-2" value="f">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Female</span>
            </label>
          </div>
        </div>

        <div class="button">
          <input type="submit" value="Add" name="editLabours">
        </div>
      </form>
    </div>
  </div>

</body>

</html>

<?php
    if (isset($_POST['editLabours'])) {

     $nameInitial = $_POST['nameInitial'];
     $fullName = $_POST['fullName'];
     $FirstName  =$_POST['FirstName'];
     $birthday =$_POST['birthday'];
     $contactNo =$_POST['contactNo'];
     $address =$_POST['address'];
     $gender =$_POST['gender'];
     $company =$_POST['company'];
     
    

        $insert_staff = "update labor set nameInitial='$nameInitial', fullName='$fullName', FirstName='$FirstName' ,birthday='$birthday', contactNo='$contactNo', address='$address', gender='$gender', company='$company' where laborId='$edit_id'";

        $run_staff = mysqli_query($Conn, $insert_staff);

        if ($run_staff) {
            echo "<script> alert('labor updated successfully ')</script>";
            echo "<script> window.open('index.php?viewLabours ','_self')</script>";
        }
    }
    ?>