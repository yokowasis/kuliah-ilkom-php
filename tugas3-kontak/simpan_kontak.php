<?php
include "./koneksi.inc.php";
$sql = "INSERT INTO kontak (nama, jkel, email, alamat, kota, pesan) VALUES ('" . $_POST['nama'] . "', '" . $_POST['jkel'] . "', '" . $_POST['email'] . "', '" . $_POST['alamat'] . "', '" . $_POST['kota'] . "', '" . $_POST['pesan'] . "')";

if (
  $conn->query($sql) === TRUE
) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
