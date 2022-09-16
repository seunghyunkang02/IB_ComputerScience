<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Presenting DB data</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "id7267567_alice";
$password = "rkdtmdgus";
$dbname = "id7267567_db_students";
$table = "tbl_Students";

echo "<h1>Connect</h1>\n";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
echo "<h2>Connected successfully</h2>\n";
}
