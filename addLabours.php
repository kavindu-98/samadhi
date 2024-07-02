<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title> Add Labours </title>
  <link rel="stylesheet" href="css/Style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="title">Add Labours</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name with initials</span>
            <input type="text" placeholder="Enter name with initials" name="nameInitial" required id="name1" onkeyup="checkname1()">
            <span id="output1"></span>
          </div>
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter full name" name="fullName" required id="name2" onkeyup="checkname2()">
            <span id="output2"></span>
          </div>
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter first name" name="FirstName" required id="name3" onkeyup="checkname3()">
            <span id="output3"></span>
          </div>
          <div class="input-box">
            <span class="details">Birthdate</span>
            <input type="date" name="birthday" id="" required>
          </div>
          <div class="input-box">
            <span class="details">Contact number</span>
            <input type="text" placeholder="Enter contact number" name="contactNo" required id="tele" onkeyup="checkTelNo()">
            <span id="output"></span>
          </div>
          <div class="input-box">
            <span class="details">Permanent Address</span>
            <input type="text" placeholder="Enter permanent address" name="address" required>
          </div>
          <div class="input-box">
            <span class="details">Company</span>
            <select name="post" id="post" required>
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
          <input type="submit" value="Add" name="addLabours">
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
  if (/^[a-z][a-z\s]*$/.test(name)){
      //enters an illegal character
      
  }
  else{
      output.style.color = "#ff1617";
      // output.textContent = "Name with initials don't have Numbers!"
      
  }
}

function checkname2() {

// var Regex='/^[A-Za-z]+$/';

  let name = document.getElementById("name2").value;
  let output = document.getElementById("output2");
  if (/^[a-z][a-z\s]*$/.test(name)){
      //enters an illegal character
      
  }
  else{
      output.style.color = "#ff1617";
      // output.textContent = "Full Name don't have Numbers!"
      
  }
}

function checkname3() {

// var Regex='/^[A-Za-z]+$/';

  let name = document.getElementById("name3").value;
  let output = document.getElementById("output3");
  if (/^[a-z][a-z\s]*$/.test(name)){
      //enters an illegal character
      
  }
  else{
      output.style.color = "#ff1617";
      // output.textContent = "First Name don't have Numbers!"
      
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



</script>
</html>

<?php
    if (isset($_POST['addLabours'])) {

     
     $nameinitial  = $_POST['nameInitial'];
     $fullName = $_POST['fullName'];
     $FirstName = $_POST['FirstName'];
     $birthday = $_POST['birthday'];
     $contactno = $_POST['contactNo'];
     $address = $_POST['address'];
     $gender = $_POST['gender'];
     $company = $_POST['post'];

        $insertLabours = "INSERT INTO labor(nameInitial,fullName,FirstName,birthday,ContactNo,Address,gender,company)"
                . " VALUES ('$nameinitial', '$fullName', '$FirstName', '$birthday', '$contactno', '$address', '$gender', '$company')";

        $runLabour = mysqli_query($Conn, $insertLabours);

        if ($runLabour) {
            echo "<script> alert('Labour Added successfully ')</script>";
            // echo "<script> window.open('index.php ','_self')</script>";
        }else{
          echo "<script> alert('User didn't Added successfully ')</script>";
        }


    }
  //       if ($Conn->query($insertLabours) === TRUE) {
  //         echo "New record created successfully";
  //       } else {
  //         echo "Error: " . $insertLabours . "<br>" . $Conn->error;
  //       }
  //  }

  //       else {
  //       echo "<script> alert('child Didnt Added  ')</script>";


  //       }

        
    
  
    ?>