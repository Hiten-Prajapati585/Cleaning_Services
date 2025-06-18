<?php
  //Sing up page code -------------------
  
  include('./config.php');
  session_start();
  if(isset($_POST['signup'])){
    $Username = $_POST['UName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //  $password = md5($password);
    $checkEmail= "SELECT * FROM user_registration WHERE Email='$email'";
    $result= $conn->query($checkEmail);
    if($result->num_rows>0){
      echo "<script>
       alert('Email already exists, please enter another Email')
       window.location.href='login.html'
      </script>";
    }
    else {
      $insertQuery="INSERT INTO user_registration(Username,Email,Password,Date) VALUES('$Username','$email','$password',now())";
      if($conn->query($insertQuery)==TRUE){
        header("location:./login.html");
      } else {
     
        echo "<script>
        alert('Error:".$conn->error."');
        window.location.href='login.html'
        </script>";
      }
    }
  }

  //Login page code -------------------

  if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    //  $password=md5($password);
     
    $sql="SELECT * FROM user_registration  WHERE Email='$email'  AND Password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0 ){
      $sql ="INSERT INTO user_login(Email,Password, Date) VALUES ('$email','$password', Now())";
      $conn->query($sql);
      //session_start();
      $row=$result->fetch_assoc();
      
      $_SESSION['user_id']=$row['U_ID'];
      $_SESSION['username']=$row['Username'];
      // Create a cookie for persistent login (valid for 30 days)
      setcookie('username', $row['Username'], time() + (30 * 24 * 60 * 60), "/"); // 30 days
      header("location:./index.php");
      exit();
    } else {  
      echo "<script>
      alert('Incorrect Email or Password')
      window.location.href='login.html'
      </script>";
    }
  }
?>