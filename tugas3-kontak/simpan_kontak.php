<?php
$servername = "localhost:3306";
$username = "root";
$password = "123123";
$dbname = "algoritma";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

print_r($_POST);

$sql = "INSERT INTO kontak (nama, jkel, email, alamat, kota, pesan) VALUES ('" . $_POST['nama'] . "', '" . $_POST['jkel'] . "', '" . $_POST['email'] . "', '" . $_POST['alamat'] . "', '" . $_POST['kota'] . "', '" . $_POST['pesan'] . "')";

echo $sql;

if (
  $conn->query($sql) === TRUE
) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
