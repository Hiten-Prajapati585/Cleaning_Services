<?php
include("./config.php");

if(isset($_POST['submit'])){
    $PSName= $_POST['service'];
    $Frequency=$_POST['frequency'];
    $Date = $_POST['cleaning_date'];
    $Time = $_POST['cleaning_time'];
    $Price=$_POST['prices'];
    $Worker_Group=$_POST['worker_group'];
    $Worker = $_POST['workers'];

    // $sql1 ="INSERT INTO `basic_service`(`BSName`,`Frequency`,`Date`,`Time`,`Price`,`Worker_Group`,`Workers`) VALUES('$BSName','$Frequency','$Date','$Time','$Price','$Worker_Group','$Worker')";
    $sql2= $conn->prepare("INSERT INTO `premium_service`(`PSName`,`Frequency`,`Date`,`Time`,`Price`,`Worker Group`,`Workers`)VALUES('$PSName','$Frequency','$Date','$Time','$Price','$Worker_Group','$Worker')");
    $sql2->execute();
    $PS_ID = $sql2->insert_id; // Get the last inserted ID
    $sql2->close();
    
    include('./booking.php');
    // $result1 =$conn->query($sql2);
    // if($result1){
    //         echo "recored Inserted";
    // }
    // else{
    //     echo "error";
    // }
}
?>