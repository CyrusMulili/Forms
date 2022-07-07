<?php
$con = mysqli_connect('localhost', 'username', 'password','form');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM details");

echo "<table border='1'>
<tr>
<th>Registration number</th>
<th>First name</th>
<th>Last name</th>
<th>Gender</th>
<th>Dob</th>
<th>Nationality</th>
<th>County</th>
<th>Hobbies</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Registration number'] . "</td>";
echo "<td>" . $row['First Name'] . "</td>";
echo "<td>" . $row['Last Name'] . "</td>";
echo "<td>" . $row['Gender'] . "</td>";
echo "<td>" . $row['Dob'] . "</td>";
echo "<td>" . $row['Nationality'] . "</td>";
echo "<td>" . $row['County'] . "</td>";
echo "<td>" . $row['Hobbies'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

<break>
<break>
<button onClick="history.go(0);">Refresh Page</button>
<a href="index.html">
  <button>Register</button>
  <link rel="stylesheet" type="text/css" href="main.css">

