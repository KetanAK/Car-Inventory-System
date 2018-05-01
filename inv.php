<?php
include 'DB_Connect.php';

$conn = OpenCon();
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
$sql = 'SELECT * 
		FROM car1';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Inventory</title>
</head>
<body>
	<table style="border-collapse: collapse; text-align: center" class="data-table" border="5px">
		<form action="http://localhost:8080/sold1.php" method="post">
		    <h1>Cars Database</h1>
		    <thead>
		    	<tr>
		    		<th>Serial Number</th>
		    		<th>Manifacturer Name</th>
		    		<th>Modle Name</th>
		    		<th>Count</th>
		    		<th>Sold Button</th>
		    	</tr>
		    </thead>
	    	<tbody>
	        	<?php

        		while ($row = mysqli_fetch_array($query))
        		{
        			echo "<tr>";
        			echo "  <td>".$row['Serial']."</td>";
        			echo "	<td>".$row['Manufacturer']."</td>";
        			echo "	<td>".$row['Modle']."</td>";
        			echo "	<td>".$row['Count']."</td>";
    	    		echo "	<td><a href='sold1.php?modle=".$row['Modle']."'><input type='button' value='Sold' /></a></td>";
    	    		echo "</tr>";
    	    	}
			?>
    		</tbody>
		</form>
	</table>
</body>
</html>