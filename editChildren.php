<?php


if(isset($_GET['editChild'])){

$edit_id = $_GET['editChild'];

$get_pro = "select * from childdetails where id='$edit_id'";

$run_pro = mysqli_query($Conn,$get_pro);


$row_pro = mysqli_fetch_array($run_pro);

$initials = $row_pro['initials'];
$fullName = $row_pro['fullName'];
$birthdate = $row_pro['birthdate'];
$gender = $row_pro['gender'];


}

?>


<!DOCTYPE html>
<meta charset="UTF-8">
<title> Add Children </title>
<link rel="stylesheet" href="css/Style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="title">Add Children</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name with initials</span>
            <input type="text" placeholder="Enter name with initials" name="nameInitial" value="<?php echo $initials?>" required>
          </div>
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter full Name" name="fullName"  value="<?php echo $fullName?>" required>
          </div>
          <div class="input-box">
            <span class="details">Birthdate</span>
            <input type="date" name="birthday" id="" value="<?php echo $birthdate?>" required>
          </div>
          <!-- <div class="input-box">
            <span class="details">Child Image</span>
            <input type="file" name="uploadImage" id="uploadImage"   accept="image/png, image/jpeg">
          </div> -->
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="m" >
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
          <input type="submit" value="Update" name="editChildren">
        </div>
      </form>
    </div>
  </div>

</body>

</html>

<?php
    if (isset($_POST['editChildren'])) {

     $nameInitial = $_POST['nameInitial'];
     $fullName = $_POST['fullName'];
     $birthday =$_POST['birthday'];
     $gender =$_POST['gender'];
    

        $insert_staff = "update childdetails  set initials='$nameInitial',fullName='$fullName',birthdate='$birthday',gender='$gender' where id= '$edit_id'";
             

        $run_staff = mysqli_query($Conn, $insert_staff);

        if ($run_staff) {
            echo "<script> alert('child updated successfully ')</script>";
            echo "<script> window.open('index.php?viewChild ','_self')</script>";
        }
    }
    ?>

