<?php
session_start();
include('./config.php');

if(isset($_POST['submit'])){
   
    $BSName=$_POST['service'];
    $Frequency=$_POST['frequency'];
    $Date = $_POST['cleaning_date'];
    $Time = $_POST['cleaning_time'];
    $Price=$_POST['prices'];
    $Worker_Group=$_POST['worker_group'];
    $Worker = $_POST['workers'];

    $sql1 =$conn->prepare("INSERT INTO `basic_service`(`BSName`,`Frequency`,`Date`,`Time`,`Price`,`Worker_Group`,`Workers`) VALUES('$BSName','$Frequency','$Date','$Time','$Price','$Worker_Group','$Worker')");
    // $sql2= "INSERT INTO `premium_service`(`PSName`,`Frequency`,`Date`,`Time`,`Price`,`Worker_Group`,`Workers`)VALUES('$PSName','$Frequency','$Date','$Time','$Price','$Worker_Group','$Worker')";
    $sql1->execute();
     $BS_ID = $sql1->insert_id; // Get the last inserted ID
     $sql1->close();
     include('./booking.php');
    // if($result1){
    //         echo "recored Inserted";
    // }
    // else{
    //     echo "error";
    // }
}
?>