<?php
// Define connection parameters
define("db_SERVER", "localhost");
define("db_USER", "root");
define("db_PASSWORD", "");
define("db_DBNAME", "reviews1");

// Create connection
$con = mysqli_connect(db_SERVER, db_USER, db_PASSWORD, db_DBNAME);

if (!$con) {
    die("connection failed: " . mysqli_connect_error());//as exist 
}

// Get POST data
$costumer_name = $_POST['costumer_name'];
$costumer_review= $_POST['costumer_review'];


// Create SQL query with embedded variables
$sql = "INSERT INTO reviews (costumer_name,costumer_review)
 VALUES ($costumer_name,$costumer_review)";

// Execute query and check for success
if (mysqli_query($con, $sql)) {
    echo "New review added successfully.";

} else {
    echo "Error: " .mysqli_error($con);
}

// Close connection
mysqli_close($con);
?>