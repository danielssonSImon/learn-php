
<?php
require_once('index.php');


function connect(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "wesweb01";

$conn = new mysqli($servername, $username, $password, $dbname);
 mysqli_set_charset($conn,"UTF8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
return $conn;
}
?>
