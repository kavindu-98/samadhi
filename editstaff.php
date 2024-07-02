<?php

if(isset($_GET['editStaff'])){

$edit_id = $_GET['editStaff'];

$get_pro = "select * from staff where staffId='$edit_id'";

$run_pro = mysqli_query($Conn,$get_pro);


$row_pro = mysqli_fetch_array($run_pro);



    $firstname = $row_pro['FirstName'];   
     $lastname = $row_pro['LastName'];
     $nameinitial  = $row_pro['nameInitial'];
     $birthday = $row_pro['birthday'];
     $nic = $row_pro['nic'];
     $contactno = $row_pro['ContactNo'];
     $address = $row_pro['Address'];
     $email = $row_pro['email'];
     $uname = $row_pro['uname'];

}

?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title> Update Staff </title>
  <link rel="stylesheet" href="css/Style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="title">Update Staff</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text"  placeholder="Enter first name" name="FirstName" value="<?php echo $firstname?>" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text"  placeholder="Enter last name" name="LastName" value="<?php echo $lastname?>" required>
          </div>
          <div class="input-box">
            <span class="details">Name with initials</span>
            <input type="text"  placeholder="Enter name with initials" name="nameInitial" value="<?php echo $nameinitial?>" required>
          </div>
          <div class="input-box">
            <span class="details">Birthdate</span>
            <input type="date"  id="" name="birthday" value="<?php echo $birthday?>" required>
          </div>
          <div class="input-box">
            <span class="details">NIC</span>
            <input type="text" placeholder="Enter NIC" name="nic" value="<?php echo $nic?>" required>
          </div>
          <div class="input-box">
            <span class="details">Contact Number</span>
            <input type="text" placeholder="Enter contact number" name="contactNo" value="<?php echo $contactno?>" required>
          </div>
          <div class="input-box">
            <span class="details">Permanent Address</span>
            <input type="text" placeholder="Enter address" name="address" value="<?php echo $address?>" required>
          </div>
          <div class="input-box">
            <span class="details">Email Address</span>
            <input type="text" placeholder="Enter email address" name="email" value="<?php echo $email?>" required>
          </div>
          <!-- <div class="input-box">
            <span class="details">Post</span>
            <input type="text" placeholder="Enter email address" required>
          </div> -->
          <!-- <div class="input-box">
            <span class="details">Employee Image</span>
            <input type="file" name="uploadImage" id="uploadImage" required accept="image/png, image/jpeg">
          </div> -->
          <div class="input-box">
            <span class="details">User Name</span>
            <input type="text" placeholder="Enter user name" name="uname" value="<?php echo $uname?>" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="Password" placeholder="Enter password" name="pass" required>
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
          <input type="submit" value="Add" name="updateStaff">
        </div>
        
      </form>
    </div>
  </div>




</body>

</html>

<?php
    if (isset($_POST['addStaff'])) {

     $firstname = $_POST['FirstName'];
     $lastname = $_POST['LastName'];
     $nameinitial  = $_POST['nameInitial'];
     $birthday = $_POST['birthday'];
     $nic = $_POST['nic'];
     $contactno = $_POST['contactNo'];
     $address = $_POST['address'];
     $email = $_POST['email'];
     $uname = $_POST['uname'];
     $pass = $_POST['pass'];
     $gender = $_POST['gender'];

        $insertStaff = "INSERT INTO staff(FirstName,LastName,nameInitial,birthday,nic,ContactNo,Address,email,uname,pass,gender)"
                . " VALUES ('$firstname', '$lastname', '$nameinitial', '$birthday', '$nic', '$contactno', '$address', '$email', '$uname','$pass','$gender')";

        $runStaff = mysqli_query($Conn, $insertStaff);

        if ($runStaff) {
            echo "<script> alert('User Added successfully ')</script>";
            // echo "<script> window.open('index.php ','_self')</script>";
        }else{
          echo "<script> alert('User didn't Added successfully ')</script>";
        }


    }
  //       if ($Conn->query($insertStaff) === TRUE) {
  //         echo "New record created successfully";
  //       } else {
  //         echo "Error: " . $insertStaff . "<br>" . $Conn->error;
  //       }
  //  }

  //       else {
  //       echo "<script> alert('child Didnt Added  ')</script>";


  //       }

        
    
  
    ?>

     <?php
    if (isset($_POST['updateStaff'])) {

        $firstname = $_POST['FirstName'];
        $lastname = $_POST['LastName'];
        $nameinitial  = $_POST['nameInitial'];
        $birthday = $_POST['birthday'];
        $nic = $_POST['nic'];
        $contactno = $_POST['contactNo'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
        $gender = $_POST['gender'];

        $insert_staff = "update  staff set FirstName='$firstname',LastName='$lastname',nameInitial='$nameinitial',birthday='$birthday',nic='$nic',ContactNo='$contactno',address='$address',email='$email',uname='$uname',pass='$pass',gender='$gender' where staffId = '$edit_id'";
               

        $run_staff = mysqli_query($Conn, $insert_staff);

        if ($run_staff) {
            echo "<script> alert('User updated successfully ')</script>";
            echo "<script> window.open('index.php?viewStaff ','_self')</script>";
        }
    }
    ?>