<?php
session_start();

include('includes/database.php');

if(!isset($_SESSION['username'])){

  echo "<script>window.open('login.php','_self')</script>";
  
  }
  
  else {


  
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Samadhi Children Home </title>
  <link rel="stylesheet" href="css/sideBarStyle.css">
  
  <script src="https://kit.fontawesome.com/830935a74c.js" ></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div class="sidebar">
    <div class="logo-details">
    
      <span class="logo_name">Samadhi Children Home</span>
      
    </div>
    <div class="logo-details"><i class="fas fa-house-user"></i></div>
    <ul class="nav-links">
      <li>
        <a href="index.php?overview">
        <i class="fas fa-home "></i>
          <span class="link_name">Overview</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="index.php?overview">Overview</a></li>
        </ul>
      </li>
      <li>
        <div class="icon-link">
          <a href="#">
          <i class="fas fa-money-bill-alt"></i>
            <span class="link_name">Donation</span>
          </a>
          <i class="fas fa-caret-down arrow"></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Donation</a></li>
          <li><a href="index.php?insertDonation">Add Donation</a></li>
          <li><a href="index.php?viewDonations">View Donation</a></li>
        </ul>
      </li>
      <li>
        <div class="icon-link">
          <a href="#">
          <i class="fas fa-users"></i>
            <span class="link_name">Staff</span>
          </a>
          <i class="fas fa-caret-down arrow"></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Staff</a></li>
          <li><a href="index.php?insertStaff">Add Staff</a></li>
          <li><a href="index.php?viewStaff">View Staff</a></li>
        </ul>
      </li>
      <li>
        <div class="icon-link">
          <a href="#">
          <i class="fas fa-child"></i>
            <span class="link_name">Children</span>
          </a>
          <i class="fas fa-caret-down arrow"></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Children</a></li>
          <li><a href="index.php?insertChild">Add Children</a></li>
          <li><a href="index.php?viewChild">View Children</a></li>
        </ul>
      </li>
      <li>
        <div class="icon-link">
          <a href="#">
          <i class="fas fa-user-friends"></i>
            <span class="link_name">Labours</span>
          </a>
          <i class="fas fa-caret-down arrow"></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Labours</a></li>
          <li><a href="index.php?insertLabours">Add Labours</a></li>
          <li><a href="index.php?viewLabours">View Labours</a></li>
        </ul>
      </li>

      <li>
        <div class="profile-details">
        <a href="logout.php">
        <i class="fas fa-sign-out-alt out"></i></a>
            
            <div class="job">Logout</div>
          
            
        </div>
      </li>
    </ul>
  </div>

  <script src="js/sideBarScript.js"></script>

  <?php 

  if(isset($_GET['overview'])){
  include("overview.php");
  
  }
  if(isset($_GET['insertDonation'])) {
    include('addDonation.php');
  }

  if(isset($_GET['insertStaff'])) {
    include('addStaff.php');
  }
  
  if(isset($_GET['insertChild'])) {
    include('addChildren.php');
  }

  if(isset($_GET['insertLabours'])) {
    include('addLabours.php');
  }
  if(isset($_GET['viewStaff'])) {
    include('viewstaff.php');
  }

  if(isset($_GET['viewChild'])) {
    include('viewchild.php');
  }

  if(isset($_GET['viewDonations'])) {
    include('viewDonation.php');
  }

  if(isset($_GET['viewLabours'])) {
    include('viewLabours.php');
  }
  if(isset($_GET['editChild'])) {
    include('editChildren.php');
  }
  if(isset($_GET['editStaff'])) {
    include('editstaff.php');
  }
  if(isset($_GET['editLabors'])) {
    include('editLabour.php');
  }
  if(isset($_GET['deleteChild'])) {
    include('deleteChild.php');
  }
  if(isset($_GET['deleteLabors'])) {
    include('deleteLabors.php');
  }
  if(isset($_GET['deleteStaff'])) {
    include('deletestaff.php');
  }

  ?>

</body>

</html>

<?php } ?>



