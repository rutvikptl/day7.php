<?php


$connection = mysqli_connect("localhost","root","","db_internship");

$q=mysqli_query($connection,"select * from tbl_user") or die("error".mysqli_error($connection));

echo "<table border='1'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>name</th>";
echo "<th>gender</th>";
echo "<th>mobile</th>";
echo "<th>Action</th>";

echo "<tr>";
$i=0;
while ($row = mysqli_fetch_array($q)) {
	$i++;
    echo "<tr>";
    echo "<td>{$row['user_id']}</td>";
	echo "<td>{$row['user_name']}</td>";
	echo "<td>{$row['user_gender']}</td>";
	echo "<td>{$row['user_mobile']}</td>";
	echo "<td><a href='delete.php?deleteid={$row['user_id']}'>Delete</a></td>";
	echo "</tr>";
}
echo "</table>";

echo "<a href='databaseform.php'>Add record</a>";