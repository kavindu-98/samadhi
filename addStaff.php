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
    <div class="title">Add Staff</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text"  placeholder="Enter first name" name="FirstName" required id="name1" onkeyup="checkname1()">
            <span id="output1"></span>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text"  placeholder="Enter last name" name="LastName" required id="name2" onkeyup="checkname2()">
            <span id="output2"></span>
          </div>
          <div class="input-box">
            <span class="details">Name with initials</span>
            <input type="text"  placeholder="Enter name with initials" name="nameInitial" required id="name3" onkeyup="checkname3()">
            <!-- <span id="output3"></span> -->
          </div>
          <div class="input-box">
            <span class="details">Birthdate</span>
            <input type="date"  id="" name="birthday" required>
          </div>
          <div class="input-box">
            <span class="details">NIC</span>
            <input type="text" placeholder="Enter NIC" name="nic" required id="nic" onkeyup="checkNIC()">
            <span id="output5"></span>
          </div>
          <div class="input-box">
            <span class="details">Contact Number</span>
            <input type="text" placeholder="Enter contact number" name="contactNo" required id="tele" onkeyup="checkTelNo()">
            <span id="output"></span>
          </div>
          <div class="input-box">
            <span class="details">Permanent Address</span>
            <input type="text" placeholder="Enter address" name="address" required>
          </div>
          <div class="input-box">
            <span class="details">Email Address</span>
            <input type="text" placeholder="Enter email address" name="email" required id="email" onkeyup="checkemail()">
            <span id="output4"></span>
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
            <input type="text" placeholder="Enter user name" name="uname" required>
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
          <input type="submit" value="Add" name="addStaff">
        </div>
        
      </form>
    </div>
  </div>




</body>

<script>

function checkname1() {

// var Regex='/^[A-Za-z]+$/';

  let name = document.getElementById("name1").value;
  let output = document.getElementById("output1");
  if (!/[^a-zA-Z]/.test(name)){
      //enters an illegal character
      
  }
  else{
      output.style.color = "#ff1617";
      output.textContent = "First Name don't have Numbers!"
      
  }
}

function checkname2() {

// var Regex='/^[A-Za-z]+$/';

  let name = document.getElementById("name2").value;
  let output = document.getElementById("output2");
  if (!/[^a-zA-Z]/.test(name)){
      //enters an illegal character
      
  }
  else{
      output.style.color = "#ff1617";
      output.textContent = "Last Name don't have Numbers!"
      
  }
}

function checkname3() {

// var Regex='/^[A-Za-z]+$/';

  let name = document.getElementById("name3").value;
  let output = document.getElementById("output3");
  if (!/[^a-zA-Z]/.test(name)){
      //enters an illegal character
      
  }
  else{
      output.style.color = "#ff1617";
      output.textContent = "Name with initials don't have Numbers!"
      
  }
}

function checkemail() {

// var Regex='/^[A-Za-z]+$/';

  let name = document.getElementById("email").value;
  let output = document.getElementById("output4");
  if (!/\S+@\S+\.\S+/.test(name)){
      //enters an illegal character
      output.style.color = "#ff1617";
      output.textContent = "Enter Valid Email!"
  }
  else{
      output.style.color = "#52b69a";
      output.textContent = "Valid Email!"
      
  }
}




  function checkTelNo() {
    let telNo = document.getElementById("tele").value;
    let output = document.getElementById("output");
    if(isNaN(parseInt(telNo))){
        //enters an illegal character
        output.style.color = "#ff1617";
        output.textContent = "Telephone numbers don't have letters!"
    }
    else{
        if (telNo.length < 10) {
            output.style.color = "#ff1617";
            output.textContent = "Please provide a valid number!"
        }
        else if(telNo.length > 10){
            let initTen = telNo.slice(0, 10);
            output.style.color = "#ff1617";
            output.textContent = "Maximum length should be 10!"
            telNo.textContent = initTen;
        }
        else{
            output.style.color = "#52b69a";
            output.textContent = "Valid number"
        }
    }
}


function checkNIC() {
    let nic = document.getElementById("nic").value;
    let output = document.getElementById("output5");
    
        if (nic.length < 10) {
            output.style.color = "#ff1617";
            output.textContent = "Please provide a valid number!"
        }
        else if(nic.length > 12){
            let initTen = nic.slice(0, 10);
            output.style.color = "#ff1617";
            output.textContent = "Maximum length should be 12!"
            nic.textContent = initTen;
        }
        else{
            output.style.color = "#52b69a";
            output.textContent = "Valid number NIC Number"
        }
    
}
</script>

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