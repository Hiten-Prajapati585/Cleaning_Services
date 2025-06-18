<?php
include("./connection.php");
$selectQuery = $conn->prepare("SELECT * FROM `payment`  ");
$selectQuery->execute();
$result=$selectQuery->fetchAll();
echo "<table border='1'>";
echo "<th>P_ID</th>";
echo "<th>B_ID</th>";
echo "<th>Payment Method</th>";
echo "<th>Date</th>";
    


foreach($result as $row){
   
    echo "<tr>.
    <td>".$row['P_ID']."</td>
    <td><a href='#' onclick=\"fetchDetails('showBooking.php?id=".$row['B_ID']."')\">".$row['B_ID']."</a></td>
    <td>".$row['Payment Method']."</td>
    <td>".$row['Date']."</td>
  

    <td><form method='post'>
     <button name='delete' value=".$row['P_ID'].">DELETE</button>
    </form></td>
   
    </tr>";
}
echo "</table>";
echo "<div id='detailsContainer' ></div>";

if(isset($_POST['delete'])){
    $id=$_POST['delete'];
    $deleteQuery = $conn->prepare("DELETE  FROM payment WHERE P_ID='$id' ");
    
    if($deleteQuery->execute()){
        echo "<script>alert('Are you want to Delete Record...')
        window.location.href='showPayment.php'</script>";
          header("Refresh:1");
    }
    else{
        echo "operation failed!";
    }
}


?>