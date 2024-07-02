<html>
<head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<script src="https://kit.fontawesome.com/830935a74c.js" ></script>
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<style>
    .grey-bg {  
        background: linear-gradient(-130deg, #ffffff, #6c757d);
        width: 80%;
        height: 100vh;
        margin-left: 300px;
}
.card{
    background-color: #e9ecef ;
}
.ico{
    margin-left: 100px;
    font-size:20px;
}
.card a{
    margin-left: 20px;
   
}

.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    width:100%;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #168aad;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
   
}
.styled-table td {
    background-color: #e9ecef;
   
}


.styled-table tbody tr {
    border-bottom: 1px solid #168aad;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #ffffff;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #168aad;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #ffffff;
}



</style>
</head>
<body>

<?php

$get_labor = "select count(laborid) from labor ";
$run_labor = mysqli_query($Conn,$get_labor);
$row_labor=mysqli_fetch_array($run_labor);
$alllabor = $row_labor['count(laborid)'];

$get_staff = "select count(staffid) from staff ";
$run_staff = mysqli_query($Conn,$get_staff);
$row_staff=mysqli_fetch_array($run_staff);
$allstaff = $row_staff['count(staffid)'];

$get_child = "select count(id) from childdetails ";
$run_child = mysqli_query($Conn,$get_child);
$row_child=mysqli_fetch_array($run_child);
$allchild = $row_child['count(id)'];

$get_donation = "select sum(cashAmount) from donationcashdetails ";
$run_donation = mysqli_query($Conn,$get_donation);
$row_donation=mysqli_fetch_array($run_donation);
$alldonation = $row_donation['sum(cashAmount)'];

?>
    

<div class="grey-bg container-fluid">


  <section id="minimal-statistics">

  
    <div class="row">
    
      <div class="col-12 mt-3 mb-1">
      <div><span style="font-size: 30px; margin-left:40px; margin-top: 40px; color:#e9ecef; ">Overview</span></div>
      </div>
      
    </div>
    
    <div class="row">
      <div class="col-xl-3 col-sm-6 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="far fa-money-bill-alt primary font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3>Rs. <?php echo $alldonation ?>.00</h3>
                  <span>Total Donations</span>
                </div>
                
              </div>
              
            </div>
            <a href="index.php?viewDonations"><span>View Details</span><i class="fas fa-arrow-circle-right ico"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="fas fa-child warning font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3><?php echo $allchild ?></h3>
                  <span>Children Details</span>
                </div>
              </div>
            </div>
            <a href="index.php?viewChild"><span>View Details</span><i class="fas fa-arrow-circle-right ico"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="fas fa-users success font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3><?php echo $allstaff ?></h3>
                  <span>Staff Details</span>
                </div>
              </div>
            </div>
            <a href="index.php?viewStaff"><span>View Details</span><i class="fas fa-arrow-circle-right ico"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="fas fa-user-friends danger font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3> <?php echo $alllabor ?></h3>
                  <span>Labors Details</span>
                </div>
              </div>
            </div>
            <a href="index.php?viewLabours"><span>View Details</span><i class="fas fa-arrow-circle-right ico"></i></a>
          </div>
        </div>
      </div>
    </div>

  
    
 </section>

 <table class="styled-table">

 <div><span style="font-size: 20px; margin-left:30px; color:#e9ecef;">Cash Donation Details</span></div>
    <thead>
        <tr>
        <th>Donar Name</th>
        <th>Fund Amount</th>
        <th>Contact Number</th>
        <th>Date</th>
        </tr>
    </thead>
    <?php
  
  
    $get_order = "select * from donars d inner join donationcashdetails dcd on d.donarId = dcd.donarid limit 5 ";
    $run_order = mysqli_query($Conn,$get_order);

    while($row_order=mysqli_fetch_array($run_order)){
    $id = $row_order['donarId'];
    $name = $row_order['doname'];

    $contact = $row_order['contactNo'];

    $address = $row_order['address'];
    $date = $row_order['date'];
    $amount = $row_order['cashAmount'];
    ?>
    <tbody>
        <tr>
        <td><?php echo $name?></td>
        <td><?php echo $amount?></td>
        <td><?php echo $contact?></td>
        <td><?php echo substr($date, 0,10) ?></td>

        </tr>
        <!-- and so on... -->
        <?php }?>
    </tbody>
</table>

</div>
</body>
</html>