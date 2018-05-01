<?php
include 'DB_Connect.php';
$conn = OpenCon();
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['Modle']) && $_POST['Modle'] != "") {
$modle=$_POST['Modle'];
}

$sql = "UPDATE car1 SET Count = Count + 1 WHERE Modle = '$modle'";

if (!mysqli_query($conn, $sql)) {
	mysqli_close($conn);
    header('Location: inv.php');
    exit;
} else {
    $sql1="INSERT INTO car1 (Manufacturer,Modle,Count) VALUES ('$_POST[Manufacturer]','$_POST[Modle]','1')";
	echo '<script type="text/javascript">'; 
    echo 'alert("Quantity increased!");'; 
    echo 'window.location.href = "Add_Cars.php";';
    echo '</script>';
    if ($conn->query($sql1) === TRUE) {
        mysqli_close($conn);
        header('Location: Add_Cars.php');
		echo "New Car Added";
        exit;
	}
}
?>