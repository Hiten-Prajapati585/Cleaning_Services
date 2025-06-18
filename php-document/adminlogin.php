<?php
include_once("connection.php");
$admin= $conn->prepare("SELECT * FROM admin_login ");
$admin->execute();

$result=$admin->fetchAll();
echo "<table border='1'>";
echo "<th>A_ID</th>";
echo "<th>AdminName</th>";
echo "<th>Password</th>";


foreach($result as $row){
    echo "<tr>";
    echo "<td>".$row['A_ID']."</td>";
    echo "<td>".$row['AdminName']."</td>";
    echo "<td>".$row['Password']."</td>";
   
    echo "</tr>";
}
?>