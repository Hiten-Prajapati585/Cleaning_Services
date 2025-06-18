<?php
include("./connection.php");
$selectQuery = $conn->prepare("SELECT * FROM user_registration ");
$selectQuery->execute();
$result=$selectQuery->fetchAll();

echo "<table border='1'>";
echo "<th>U_ID</th>";
echo "<th>UserName</th>";
echo "<th>Email</th>";
echo "<th>Password</th>";
echo "<th>Date</th>";


foreach($result as $row){
   
    echo "<tr>.
    <td>".$row['U_ID']."</td>
    <td>".$row['Username']."</td>
    <td>".$row['Email']."</td>
    <td>".$row['Password']."</td>
    <td>".$row['Date']."</td>
    

    <td><form method='post'>
     <button name='delete' value=".$row['U_ID'].">DELETE</button>
    </form></td>
   
    </tr>";
}
echo "</table>";

if(isset($_POST['delete'])){
    $id=$_POST['delete'];
    $deleteQury = $conn->prepare("DELETE  FROM user_registration WHERE U_ID='$id' ");
    
    if($deleteQury->execute()){
        echo "Record Deleted..";
          header("Refresh:1");
    }
    else{
        echo "operation failed!";
    }
}

?>