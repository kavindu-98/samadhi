<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Add Donation</title>
  <link rel="stylesheet" href="css/Style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="title">Add Donations</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Donor Name</span>
            <input type="text" placeholder="Enter name" name="doname" required id="name" onkeyup="checkname()">
            <span id="output1"></span>
          </div>
          <div class="input-box">
            <span class="details">Contact Number</span>
            <input type="text" placeholder="Enter the contact number" name="contactNo" required id="tele" onkeyup="checkTelNo()">
            <span id="output"></span>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter address" name="address" required>
          </div>
          <div class="input-box">
            <span class="details">Date</span>
            <input type="date" name="date" id="" required>
          </div>
          
          <div class="input-box">
            <span class="details">Donation Type</span>
            <select name="dotype" id="post" required>
              <option value="Cash">Cash</option>
              <option value="Items">Items</option>
              <option value="Both">Both</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Cash Amount</span>
            <input type="text" name="amount" id="" >
          </div>
      
        </div>
        
       
        <div class="button">
          <input type="submit" value="Add" name="addDonations">
        </div>

      </form>
    </div>
  </div>

</body>

<script>

function checkname() {

// var Regex='/^[A-Za-z]+$/';

  let name = document.getElementById("name").value;
  let output = document.getElementById("output1");
  if (/^[a-z][a-z\s]*$/.test(name)){
      //enters an illegal character
      
  }
  else{
      output.style.color = "#ff1617";
      output.textContent = "Donor Name don't have Numbers!"
      
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
    if (isset($_POST['addDonations'])) {

     
     $doname  = $_POST['doname'];
     $contactNo = $_POST['contactNo'];
     $address = $_POST['address'];
     $date = $_POST['date'];
     $dotype = $_POST['dotype'];
     $amount = $_POST['amount'];
    

        $insertDonations = "INSERT INTO donars(doname,contactNo,address,date,dotype,amount)"
                . " VALUES ('$doname', '$contactNo', '$address', '$date', '$dotype', '$amount')";

        $runDonations = mysqli_query($Conn, $insertDonations);

        if ($runDonations) {
            echo "<script> alert('Donation Added successfully ')</script>";
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