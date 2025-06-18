<?php
session_start();
include_once('./config.php');
if(isset($_POST['login'])){
    $adminUserName=$_POST['username'];
    $adminPassword=$_POST['password'];
    // $password=md5($password);
    //$sql="INSERT INTO userlogin(Email,Password) SELECT Email,Password FROM registration"; 
     $sql="SELECT * FROM admin_login  WHERE AdminName='$adminUserName'  AND Password='$adminPassword'";
    $result=$conn->query($sql);
    
    if($result->num_rows>0 ){
        // $sql ="INSERT INTO user_login(Email,Password, Date) VALUES ('$email','$password', Now())";
        // $conn->query($sql);
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['username']=$row['Username'];
        header("location:./php-document/adminDashboard.html");
        exit();
    }
    else{
        echo "<script>
        alert('Not found,Incorrect Email or Password')
        window.location.href='adminlogin.html'
        </script>";
    }
 }
?>