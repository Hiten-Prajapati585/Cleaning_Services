<?php
 include("./connection.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
else{
    $id=0;
}
$selectQuery = $conn->prepare("SELECT * FROM `service_category` WHERE S_ID='$id'  ");
$selectQuery->execute();
$result=$selectQuery->fetchAll();
echo "<table border='1'>";
echo "<th>S_ID</th>";
echo "<th>Sname</th>";
echo "<th>Frequency</th>";
echo "<th>Date</th>";
echo "<th>Time</th>";
echo "<th>Price</th>";
echo "<th>Worker Group</th>";
echo "<th>Workers</th>";     


foreach($result as $row){
   
    echo "<tr>.
    <td>".$row['S_ID']."</td>
    <td>".$row['Sname']."</td>
    <td>".$row['Frequency']."</td>
    <td>".$row['Date']."</td>
    <td>".$row['Time']."</td>
    <td>".$row['Price']."</td>
    <td>".$row['Worker_Group']."</td>
    <td>".$row['Workers']."</td>
    

    <td><form method='post'>
     <button name='delete' value=".$row['S_ID'].">DELETE</button>
    </form></td>
   
    </tr>";
}
echo "</table>";

if(isset($_POST['delete'])){
    $id=$_POST['delete'];
    $deleteQuery = $conn->prepare("DELETE  FROM service_category WHERE S_ID='$id' ");
    
    if($deleteQuery->execute()){
        echo "Record Deleted..";
          header("Refresh:1");
    }
    else{
        echo "operation failed!";
    }
}


?>