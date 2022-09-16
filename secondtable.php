<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "id7267567_alice";
$password = "rkdtmdgus";
$dbname = "id7267567_db_students";
$table = "tbl_Students";
$table2 = 'tbl_Houses';
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT $table.StudentID, $table.Student, $table.House, $table.DOB, $table2.Head_Of_House, $table2.Colour FROM $table INNER JOIN $table2 ON $table.House = $table2.House";
$result = mysqli_query($conn, $sql);
echo "<table border='1'>";
$headingsNeeded = true;
while ($row = mysqli_fetch_assoc($result)) {
	if ($headingsNeeded){
		echo "<tr>\n";
		foreach ($row as $key => $item){
			echo "<th>$key</th>";
		}
		echo "</tr>\n";		
		$headingsNeeded = false;
	}
	echo "<tr>";
	foreach ($row as $key => $item) {
		echo "<td>$item</td>";
	}
	echo "</tr>";
}
echo "</table>";
echo "</ul>\n";
?>
</body>
</html>