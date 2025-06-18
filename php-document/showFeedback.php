<?php
include("./connection.php");
// if(isset($_GET['id'])){
//     $id=$_GET['id'];
// }
// else{
//     $id=0;
// }
$selectQuery = $conn->prepare("SELECT * FROM `feedback-details`  ");
$selectQuery->execute();
$result=$selectQuery->fetchAll();
echo "<table border='1'>";
echo "<th>F_ID</th>";
echo "<th>Name</th>";
echo "<th>Address</th>";
echo "<th>MobileNo</th>";
echo "<th>Message</th>";
    


foreach($result as $row){
   
    echo "<tr>.
    <td>".$row['F_ID']."</td>
    <td>".$row['Name']."</td>
    <td>".$row['Address']."</td>
    <td>".$row['MobileNo']."</td>
    <td>".$row['Message']."</td>

    <td><form method='post'>
     <button name='delete' value=".$row['F_ID'].">DELETE</button>
    </form></td>
   
    </tr>";
}
echo "</table>";

if(isset($_POST['delete'])){
    $id=$_POST['delete'];
    $deleteQuery = $conn->prepare("DELETE  FROM `feedback-details` WHERE F_ID=? ");
    $deleteQuery->bindParam(1,$id);
    if($deleteQuery->execute()){
        echo "<script>alert('Record Deleted..');</script>";
                echo "<script>setTimeout(function(){ window.location.reload(); }, 1000);</script>";

        //   header("Refresh:1");
    }
    else{
        echo "operation failed!";
    }
}


?>