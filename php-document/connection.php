<?php
$host='localhost';
$username='root';
$password=null;
$database='cleaning_services';



// $conn =new  mysqli($host,$username,$password,$database);
// if($conn->connect_error){
//     echo "Failed to connect DB".$conn->connect_error;
// }
// else{
//     echo "Connect";
// }

$conn= new PDO("mysql:host=$host;dbname=cleaning_services",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


?>