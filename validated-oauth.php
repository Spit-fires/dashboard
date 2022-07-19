<?php
session_start();
extract($_SESSION['userData']);
$avatar_url = "https://cdn.discordapp.com/avatars/$id/$avatar.jpg";
$host="sql309.epizy.com";
$user="epiz_32185442_sitius";
$password="DBPASS";
$database="epiz_32185442_sitius";
    function getIPAddress() {  
     if(!emptyempty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    elseif (!emptyempty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
$ip = getIPAddress();  

$conn = new mysqli($host, $name, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ips (id, ip)
VALUES ('$id', '$ip')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: index.html");
exit();
?>
