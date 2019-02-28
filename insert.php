<?php
$servername = "localhost";
$database = "jyothi";
$username = "root";
$password = "mysql";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}


$CustomerId = $_POST['cid'];
$Name = $_POST['ccfname'];
$lName = $_POST['cclname'];
$Mobile = $_POST['ccmobile'];
$Email = $_POST['ccemail'];
$Address = $_POST['ccaddress'];
$sql = "INSERT INTO customer (cid, cfname, clname, cmobile, cemail, caddress) VALUES ('$cid', '$cfname', '$clname', '$cmobile', '$cemail',

'$caddress')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
     
