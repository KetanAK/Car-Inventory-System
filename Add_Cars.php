<?php
include 'DB_Connect.php';

$conn = OpenCon();
$sql="SELECT * FROM car_manufacturer";
if ($result=mysqli_query($conn,$sql))
  {
  $options = "";
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    $options = $options."<option>$row[1]</option>";
    }
?>
<html>
    <head>
        <title>Add Cars</title>
        <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
        <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    </head>
    <body>
        <form align="middle" method="post" action="http://localhost/add_c.php">
            <h1>Add Car</h1>
			<p><b>Manufacturer:</b></p>
            <p><select name="Manufacturer">
                <?php echo    $options; ?>
            </select></p>
			<p><b>Modle:</b></p>
			<p><span id="sprytextfield1">
			   <input type="text" name="Modle" id="Modle" placeholder="        NAME OF MODLE" />
			   <span class="textfieldRequiredMsg">A value is required.</span></span></p>
            <p><input name="button" type="submit" id="button" value="Submit" /></p>
        </form>
        <script type="text/javascript">
            var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
        </script>
    </body>
</html>
<?php
  
  mysqli_free_result($result);
}
mysqli_close($conn);
?>