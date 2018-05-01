<?php
$modle = $_GET['modle'];
include 'DB_Connect.php';
$conn = OpenCon();
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE car1 SET Count = Count - 1 WHERE Modle = '$modle'"; 

if (mysqli_query($conn, $sql)) {
	$sql1 = "DELETE FROM car1 WHERE Count = 0";
    if ($conn->query($sql1) === TRUE) {
        mysqli_close($conn);
        header('Location: inv.php');
        exit;
	}
} else {
    echo "Error deleting record";
}
?>