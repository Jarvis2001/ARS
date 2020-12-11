<?php
include_once 'dbconnect.php';

$sql = "SELECT * FROM airport";
if(! ($result = mysqli_query($conn, $sql)))
{
	
	echo "Errormessage: ".mysqli_error($conn)."\n";
}
else
{
	echo "<table>
		<tr><th>Code</th>
		<th>Name</th>
		</tr>";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr><td>".$row['Code']."</td><td>".$row['Name']."</td></tr>";
	}
	echo "</table>";
}

mysqli_close($conn);


?>