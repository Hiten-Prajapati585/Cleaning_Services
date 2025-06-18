<?php
include("./connection.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
else{
    $id=0;
}
$selectQuery = $conn->prepare("SELECT * FROM `premium_service` WHERE PS_ID='$id'  ");
$selectQuery->execute();
$result=$selectQuery->fetchAll();
echo "<table border='1'>";
echo "<th>PS_ID</th>";
echo "<th>PSName</th>";
echo "<th>Frequency</th>";
echo "<th>Date</th>";
echo "<th>Time</th>";
echo "<th>Price</th>";
echo "<th>Worker Group</th>";
echo "<th>Workers</th>";     


foreach($result as $row){
   
    echo "<tr>.
    <td>".$row['PS_ID']."</td>
    <td>".$row['PSName']."</td>
    <td>".$row['Frequency']."</td>
    <td>".$row['Date']."</td>
    <td>".$row['Time']."</td>
    <td>".$row['Price']."</td>
    <td>".$row['Worker Group']."</td>
    <td>".$row['Workers']."</td>
    

    <td><form method='post'>
     <button name='delete' value=".$row['PS_ID'].">DELETE</button>
    </form></td>
   
    </tr>";
}
echo "</table>";

if(isset($_POST['delete'])){
    $id=$_POST['delete'];
    $deleteQuery = $conn->prepare("DELETE  FROM premium_service WHERE PS_ID='$id' ");
    
    if($deleteQuery->execute()){
        echo "Record Deleted..";
          header("Refresh:1");
    }
    else{
        echo "operation failed!";
    }
}


?>