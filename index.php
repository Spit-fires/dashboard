<?php
$ip = $_POST['1'];

$id = $_POST['2'];

$sname= "epiz_32185442_sitius";

$uname= "root";

$password = "Nd9YhZH0LhXr";

$db_name = "test_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

$sqlquery = "INSERT INTO table VALUE 

    ('$id', '$ip')"
if ($conn->query($sql) === TRUE) {

    echo "record inserted successfully";

} else {

    echo "Error: " . $sql . "<br>" . $conn->error;
}
  