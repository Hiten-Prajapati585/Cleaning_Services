 <?php
    include('./config.php');
    if(isset($_POST['submit'])){

    $SName=$_POST['service'];
    $SFrequency=$_POST['frequency'];
    $SDate = $_POST['cleaning_date'];
    $STime = $_POST['cleaning_time'];
    $SPrice=$_POST['prices'];
    $Worker_Group=$_POST['worker_group'];
    $Worker = $_POST['workers'];
    

    $stmt = $conn->prepare("INSERT INTO `service_category`(`S_ID`,`Sname`,`Frequency`,`Date`,`Time`,`Price`,`Worker_Group`,`Workers`)
    VALUES (null,'$SName', '$SFrequency', '$SDate', '$STime', '$SPrice', '$Worker_Group', '$Worker')");
    //  $stmt->bind_param("sssssss", $SName, $SFrequency, $SDate, $STime, $SPrice, $Worker_Group, $Worker);
     $stmt->execute();
     $S_ID = $stmt->insert_id; // Get the last inserted ID
     $stmt->close();

    include('./booking.php');
    if($result){
        echo "New record created successfully";
    } else {
        echo "Error: ". $sql . "<br>";
    }
}



?> 
<!-- <?php
// // include('./config.php');
// // Connect to the database
// $conn = mysqli_connect("localhost", "root", null, "cleaning services");

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Retrieve form data
// $full_name = $_POST['full_name'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $street_address = $_POST['street_address'];
// $city = $_POST['city'];
// $state = $_POST['state'];
// $zip = $_POST['zip'];
// $service = $_POST['service'];
// $frequency = $_POST['frequency'];
// $cleaning_date = $_POST['cleaning_date'];
// $cleaning_time = $_POST['cleaning_time'];
// $worker_group = $_POST['worker_group'];
// $workers = $_POST['workers'];
// $prices = $_POST['prices'];
// $payment_method = $_POST['payment_method'];

// // Retrieve S_ID from service_category table
// $query = "SELECT S_ID FROM service_category WHERE Sname = '$service'";
// $result = mysqli_query($conn, $query);
// $row = mysqli_fetch_assoc($result);
// $S_ID = $row['S_ID'];

// // Prepare the insert query
// $stmt = $conn->prepare("INSERT INTO booking_details (Name, Email, MobileNo, Address, City, State, Pincode, S_ID) VALUES ($full_name, $email, $phone, $street_address, $city, $state, $zip, $S_ID)");

// // Bind parameters
// $stmt->bind_param("sssssssi", $full_name, $email, $phone, $street_address, $city, $state, $zip, $S_ID);

// // Execute the query
// $stmt->execute();

// // Check for errors
// if ($stmt->errno) {
//     echo "Error: " . $stmt->error;
// } else {
//     echo "Booking successful!";
// }

// // Close the statement and database connection
// $stmt->close();
// mysqli_close($conn); 
?>