<?php
   include("./config.php");
   if(isset($_POST['Send'])){
    $name =$_POST['Name'];
    $address =$_POST['Address'];
    $mobile_no =$_POST['Phone'];
    $message = $_POST['Message'];

    $sql = "INSERT INTO `feedback-details`(`Name`,`Address`,`MobileNo`,`Message`)
    VALUES ('$name', '$address', '$mobile_no', '$message')";
    $result = $conn->query($sql);
    session_start();
    if($result){
        header("Location:./index.php");
    } else {
        echo "<script>
        alert('Error: " . $conn->error . "');
        </script>";
    }
   }
?>