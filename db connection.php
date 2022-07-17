<?php

$sname= "epiz_32185442_sitius";

$uname= "root";

$password = "Nd9YhZH0LhXr";

$db_name = "test_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
