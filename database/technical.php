<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "id7267567_alice";
$password = "hello";
$dbname = "id7267567_db_students";
$table = "tbl_Students";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "<h2>Connected successfully</h2>";

// Create table
$sql = "CREATE TABLE $table (
    StudentID INT(6) UNSIGNED PRIMARY KEY,
    Student varchar(25),
    House varchar(25),
    DOB date
)
";

echo "<h2>About to execute $sql</h2>";
if (mysqli_query($conn, $sql)) {
    echo "Table $table created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

// Add data
$sql = "INSERT INTO $table 
	VALUES (1,'Maria Anders','Crozier','2001-01-01'),
(2,'Ana Trujillo','Nightingale','2002-02-02'),
(3,'Antonio Moreno','Rowell','2001-5-3'),
(4,'Thomas Hardy','Upsdell','2002-12-05'),
(5,'Christina Berglund','Crozier','2002-4-12'),
(6,'Hanna Moos','Nightingale','2003-11-02')
";


if (mysqli_query($conn, $sql)) {
    echo "New records created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the connection to the database.
mysqli_close($conn);
?>
</body>
</html>