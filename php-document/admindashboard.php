 <?php


// include("connection.php");
// $selectQuery = $conn->prepare("SELECT * FROM booking_details ");
// $selectQuery->execute();
// $result=$selectQuery->fetchAll();

// echo "<table border='1'>";
// echo "<th>B_ID</th>";
// echo "<th>Name</th>";
// echo "<th>Email</th>";
// echo "<th>MobileNo</th>";
// echo "<th>Address</th>";
// echo "<th>City</th>";
// echo "<th>State</th>";
// echo "<th>Pincode</th>";
// echo "<th>created_at</th>";
// echo "<th>S_ID</th>";
// echo "<th>BS_ID</th>";
// echo "<th>SS_ID</th>";
// echo "<th>PS_ID</th>";

// foreach($result as $row){
   
//     echo "<tr>.
//     <td>".$row['B_ID']."</td>
//     <td>".$row['Name']."</td>
//     <td>".$row['Email']."</td>       
//     <td>".$row['MobileNo']."</td>
//     <td>".$row['Address']."</td>
//     <td>".$row['City']."</td>
//     <td>".$row['State']."</td>
//     <td>".$row['Pincode']."</td>
//     <td>".$row['created_at']."</td>
//     <td><a href='#' onclick=\"fetchDetails('showServices.php?id=".$row['S_ID']."')\">".$row['S_ID']."</a></td>
//     <td><a href='#' onclick=\"fetchDetails('basic_service.php?id=".$row['BS_ID']."')\">".$row['BS_ID']."</a></td>
//     <td><a href='#' onclick=\"fetchDetails('standard_service.php?id=".$row['SS_ID']."')\">".$row['SS_ID']."</a></td>
//     <td><a href='#' onclick=\"fetchDetails('premium_service.php?id=".$row['PS_ID']."')\">".$row['PS_ID']."</a></td>
//     <td><form method='post'>
//      <button name='delete' value=".$row['B_ID'].">DELETE</button>
//     </form></td>
   
//     </tr>";
// }
// echo "</table>";
// echo "<div id='detailsContainer' ></div>";

// if(isset($_POST['delete'])){
//     $id=$_POST['delete'];
//     $deleteQuery = $conn->prepare("DELETE  FROM booking_details WHERE B_ID='$id' ");
//     if($deleteQuery->execute()){
//         echo "Record Deleted..";
//           header("Refresh:1");
//     }
//     else{
//         echo "operation failed!";
//     }
// }


///////

include("connection.php");
$selectQuery = $conn->prepare("SELECT * FROM booking_details ");
$selectQuery->execute();
$result = $selectQuery->fetchAll();

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

foreach ($result as $row) {
    echo "<tr>.
    <td>" . $row['B_ID'] . "</td>
    <td>" . $row['Name'] . "</td>
    <td>" . $row['Email'] . "</td>       
    <td>" . $row['MobileNo'] . "</td>
    <td>" . $row['Address'] . "</td>
    <td>" . $row['City'] . "</td>
    <td>" . $row['State'] . "</td>
    <td>" . $row['Pincode'] . "</td>
    <td>" . $row['created_at'] . "</td>
    <td><a href='#' onclick=\"fetchDetails('showServices.php?id=" . $row['S_ID'] . "')\">" . $row['S_ID'] . "</a></td>
    <td><a href='#' onclick=\"fetchDetails('basic_service.php?id=" . $row['BS_ID'] . "')\">" . $row['BS_ID'] . "</a></td>
    <td><a href='#' onclick=\"fetchDetails('standard_service.php?id=" . $row['SS_ID'] . "')\">" . $row['SS_ID'] . "</a></td>
    <td><a href='#' onclick=\"fetchDetails('premium_service.php?id=" . $row['PS_ID'] . "')\">" . $row['PS_ID'] . "</a></td>
    <td><form method='post'>
     <button name='delete' value=" . $row['B_ID'] . ">DELETE</button>
    </form></td>
    </tr>";
}
echo "</table>";
echo "<div id='detailsContainer' ></div>";

if (isset($_POST['delete'])) {
    $id = $_POST['delete'];

    // Fetch related IDs before deletion
    $fetchQuery = $conn->prepare("SELECT S_ID, BS_ID, SS_ID, PS_ID FROM booking_details WHERE B_ID = ?");
    $fetchQuery->execute([$id]);
    $relatedIds = $fetchQuery->fetch(PDO::FETCH_ASSOC);

    if ($relatedIds) {
        // Begin transaction for cascading deletions
        $conn->beginTransaction();

        try {
            // Delete related records
            if (!empty($relatedIds['S_ID'])) {
                $deleteService = $conn->prepare("DELETE FROM service_category WHERE S_ID = ?");
                $deleteService->execute([$relatedIds['S_ID']]);
            }
            if (!empty($relatedIds['BS_ID'])) {
                $deleteBasicService = $conn->prepare("DELETE FROM basic_service WHERE BS_ID = ?");
                $deleteBasicService->execute([$relatedIds['BS_ID']]);
            }
            if (!empty($relatedIds['SS_ID'])) {
                $deleteStandardService = $conn->prepare("DELETE FROM standard_service WHERE SS_ID = ?");
                $deleteStandardService->execute([$relatedIds['SS_ID']]);
            }
            if (!empty($relatedIds['PS_ID'])) {
                $deletePremiumService = $conn->prepare("DELETE FROM premium_service WHERE PS_ID = ?");
                $deletePremiumService->execute([$relatedIds['PS_ID']]);
            }

            // Delete the main record
            $deleteQuery = $conn->prepare("DELETE FROM booking_details WHERE B_ID = ?");
            $deleteQuery->execute([$id]);

            // Commit transaction
            $conn->commit();
            echo "Record and related data deleted successfully.";
            header("Refresh:1");
        } catch (Exception $e) {
            // Rollback transaction on failure
            $conn->rollBack();
            echo "Operation failed: " . $e->getMessage();
        }
    } else {
        echo "Record not found.";
    }
}



?> 
