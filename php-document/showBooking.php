<?php


include("connection.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
else{
    $id=0;
}
$selectQuery = $conn->prepare("SELECT * FROM booking_details WHERE B_ID = '$id'");
$selectQuery->execute();
$result=$selectQuery->fetchAll();

echo "<table border='1'>";
echo "<th>B_ID</th>";
echo "<th>Name</th>";
echo "<th>Email</th>";
echo "<th>MobileNo</th>";
echo "<th>Address</th>";
echo "<th>City</th>";
echo "<th>State</th>";
echo "<th>Pincode</th>";
echo "<th>created_at</th>";
echo "<th>S_ID</th>";
echo "<th>BS_ID</th>";
echo "<th>SS_ID</th>";
echo "<th>PS_ID</th>";

foreach($result as $row){
   
    echo "<tr>.
    <td>".$row['B_ID']."</td>
    <td>".$row['Name']."</td>
    <td>".$row['Email']."</td>       
    <td>".$row['MobileNo']."</td>
    <td>".$row['Address']."</td>
    <td>".$row['City']."</td>
    <td>".$row['State']."</td>
    <td>".$row['Pincode']."</td>
    <td>".$row['created_at']."</td>
    <td><a href='#' onclick=\"fetchDetails('showServices.php?id=".$row['S_ID']."')\">".$row['S_ID']."</a></td>
    <td><a href='#' onclick=\"fetchDetails('basic_service.php?id=".$row['BS_ID']."')\">".$row['BS_ID']."</a></td>
    <td><a href='#' onclick=\"fetchDetails('standard_service.php?id=".$row['SS_ID']."')\">".$row['SS_ID']."</a></td>
    <td><a href='#' onclick=\"fetchDetails('premium_service.php?id=".$row['PS_ID']."')\">".$row['PS_ID']."</a></td>
    <td><form method='post'>
     <button name='delete' value=".$row['B_ID'].">DELETE</button>
    </form></td>
   
    </tr>";
}
echo "</table>";
echo "<div id='detailsContainer' ></div>";

if(isset($_POST['delete'])){
    $id=$_POST['delete'];
    $deleteQuery = $conn->prepare("DELETE  FROM booking_details WHERE B_ID='$id' ");
    if($deleteQuery->execute()){
        echo "Record Deleted..";
          header("Refresh:1");
    }
    else{
        echo "operation failed!";
    }
}

?>
