<?php
include 'DB_Connect.php';
$conn = OpenCon();
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="INSERT INTO car_manufacturer (Manufacturer)
VALUES
('$_POST[Manufacturer]')";
if (!mysqli_query($conn,$sql)) {
    die('Error: ' . mysqli_error($conn));
} else { 
    echo '<script type="text/javascript">'; 
    echo 'alert("Manufacturer Added Successfully!");'; 
    echo 'window.location.href = "ADD_Manufacturer.html";';
    echo '</script>';
}


mysqli_close($conn);
?>