<?php 
    session_start();
    include_once '../Connection.php';
    $q = "update tbl_maintenance_status set payment_id = ".$_POST['razorpay_payment_id']." , status = 'Paid' , datetime = CURRENT_TIMESTAMP wher mid = ".$_SESSION['mid'];
    mysqli_query($conn,$q);
?>
