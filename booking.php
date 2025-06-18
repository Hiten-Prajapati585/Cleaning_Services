
 <?php 
session_start();
include ('./config.php');
// if (isset($_POST['service'])) {
//     $Sname = $_POST['service'];
//     $stmt = $conn->prepare("SELECT `S_ID` FROM `service_category` WHERE `Sname` = '$Sname'");
//     // $stmt->bind_param("s",$Sname);
//     $stmt->execute();
//     $stmt->bind_result($id);
//     $stmt->fetch();
//     $stmt->close();
// } else {
//     $id = null;
// }
//  include('./source.php');
if(isset($_POST['submit'])){
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address= $_POST['street_address'];
    $city = $_POST['city'];
    $state= $_POST['state'];
    $pincode = $_POST['zip'];
     $query = "INSERT INTO `booking_details`(`Name`,`Email`,`MobileNo`,`Address`,`City`,`State`,`Pincode`,`created_at`,`S_ID`,`BS_ID`,`SS_ID`,`PS_ID`) VALUES (?, ?, ?, ?, ?, ?, ?,now(), ?,?,?,?)";
     $stmt = $conn->prepare($query);
     $stmt->bind_param("sssssssiiii", $name, $email, $phone, $address, $city, $state, $pincode, $S_ID, $BS_ID,$SS_ID,$PS_ID);
     $result= $stmt->execute();
   
    $stmt->close();
    $SName = $_POST['service'];
    $workers=$_POST['workers'];

 
    $messege = "Thank you for Purchase the Service.
                Your Purchase service are:$SName and 
                Workers are:$workers";
    $subject = "Booking Confirmation";
    $headers = "From: brightwavecleaners17@gmail.com";

    if($result && mail($email, $subject, $messege, $headers)){
        echo "<script>
        alert(' Booking successful. Please proceed to payment');  
       </script>";
       header("refresh: 0; url=./payment.php");
    }else{
        echo "<script>
        alert('Not Book the service')
        window.location.href='./
       </script>";
    }
}
?>
<?php

// Include the configuration file
// require_once './config.php';

// // Check if the form has been submitted
// if (isset($_POST['submit'])) {
//     // Validate and sanitize user input
//     $name = filter_var($_POST['full_name'], FILTER_SANITIZE_STRING);
//     $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
//     $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
//     $address = filter_var($_POST['street_address'], FILTER_SANITIZE_STRING);
//     $city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
//     $state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
//     $pincode = filter_var($_POST['zip'], FILTER_SANITIZE_NUMBER_INT);
//     $sName = filter_var($_POST['service'], FILTER_SANITIZE_STRING);

//     // Prepare the SQL query
//     $query = "INSERT INTO `booking_details` (`Name`, `Email`, `MobileNo`, `Address`, `City`, `State`, `Pincode`, `S_ID`) 
//               VALUES ($name, $email, $phone, $address, $city, $state, $pincode, (SELECT `S_ID` FROM `service_category` WHERE `Sname` = $sName))";

//     // Prepare the statement
//     $stmt = $conn->prepare($query);

//     // Bind the parameters
//     $stmt->bind_param("ssssssss", $name, $email, $phone, $address, $city, $state, $pincode, $sName);

//     // Execute the query
//     if ($stmt->execute()) {
//         echo "Booking successful";
//     } else {
//         echo "Booking failed: " . $stmt->error;
//     }

//     // Close the statement
//     $stmt->close();
// }

?>

