<?php
include('./config.php');

if(isset($_POST['submit'])){
    
    $SSName=$_POST['service'];
    $Frequency=$_POST['frequency'];
    $Date = $_POST['cleaning_date'];
    $Time = $_POST['cleaning_time'];
    $Price=$_POST['prices'];
    $Worker_Group=$_POST['worker_group'];
    $Worker = $_POST['workers'];
    $sql3= $conn->prepare("INSERT INTO `standard_service`(`SSName`,`Frequency`,`Date`,`Time`,`Price`,`Worker Group`,`Workers`)VALUES('$SSName','$Frequency','$Date','$Time','$Price','$Worker_Group','$Worker')");
    $sql3->execute();
     $SS_ID = $sql3->insert_id; // Get the last inserted ID
     $sql3->close();
     include('./booking.php');
    if($result1){
            echo "recored Inserted";
    }
    else{
        echo "error";
    }
}
?>