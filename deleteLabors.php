<?php



if(isset($_GET['deleteLabors'])){

$delete_id = $_GET['deleteLabors'];

$delete_pro = "delete from labor where laborId='$delete_id'";

$run_delete = mysqli_query($Conn,$delete_pro);

if($run_delete){

echo "<script>alert('One Labor Has been deleted')</script>";

echo "<script>window.open('index.php?viewLabours','_self')</script>";

}

}

?>
