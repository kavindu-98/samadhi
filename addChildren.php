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
            <input type="text" placeholder="Enter name with initials" name="nameInitial" required id="name" onkeyup="checkname()">
            <span id="output"></span>
          </div>
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter full Name" name="fullName" required id="name1" onkeyup="checkname1()">
            <span id="output1"></span>
          </div>
          <div class="input-box">
            <span class="details">Birthdate</span>
            <input type="date" name="birthday" id="" required>
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
          <input type="submit" value="Add" name="addChildren">
        </div>
      </form>
    </div>
  </div>

</body>
<script>
function checkname() {

  // var Regex='/^[A-Za-z]+$/';

    let name = document.getElementById("name").value;
    let output = document.getElementById("output");
    if (/^[a-z][a-z\s]*$/.test(name)){
        //enters an illegal character
        
    }
    else{
        output.style.color = "#ff1617";
        output.textContent = "Name with initials don't have Numbers!"
        
    }
}

function checkname1() {

// var Regex='/^[A-Za-z]+$/';

  let name = document.getElementById("name1").value;
  let output = document.getElementById("output1");
  if (/^[a-z][a-z\s]*$/.test(name)){
      //enters an illegal character
      
  }
  else{
      output.style.color = "#ff1617";
      output.textContent = "Name with initials don't have Numbers!"
      
  }
}
</script>



</html>

<?php 

if (isset($_POST['addChildren'])) {
  $nameInitial = $_POST['nameInitial'];
  $fullName = $_POST['fullName'];
  $birthday = $_POST['birthday'];
  $gender = $_POST['gender'];

  $insertChild = "INSERT INTO childdetails(initials,fullName,birthdate,gender)" . "VALUES ('$nameInitial', '$fullName', '$birthday', '$gender' )";


  $runChild = mysqli_query($Conn, $insertChild);

  if ($runChild) {
    echo "<script> alert('child Added successfully ')</script>";
    echo "<script> window.open('index.php?insertChild ','_self')</script>";
}
}
  

?>