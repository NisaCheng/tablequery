<!DOCTYPE html>
<html>
<head>
<title>List Users</title>
<style>
td {
width: 100px;
}
thead {
font-weight: bold;
}
.center {
text-align:center;
}

</style>
</head>
<body>
<?php 
require('mysqli_connect.php'); // use require because we want to force this to exist before running our queries

echo "<h1>List of Website Users</h1>";
//And now to perform a simple query to make sure it's working
$query = "SELECT * FROM DEPARTMENT ORDER BY department_name";
$result = mysqli_query($connection, $query);


echo "<table><thead><td class='center'>Department ID: </td><td>Department Name: </td><td> # of Employees:  </td><td> Building #: </td></thead>"; // open table and include table headings

while ($row = mysqli_fetch_assoc($result)) {
echo "<tr><td class='center'>" . $row['department_id'] . "</td><td>" . $row['department_name'] . "</td><td>" . $row['num_of_employees'] . "</td><td>" . $row['building_number'] . "</td></tr>";
}
echo "</table>"; // close table

?>
<p><a href="list_users.php"> List Users</a></p>
</body>
</html>  