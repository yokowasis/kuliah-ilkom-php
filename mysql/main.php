<?php

include ("./mysql.php");

$rows = $conn->query("SELECT * FROM buku_tamu");

if ($rows->num_rows > 0) {
  // output data of each row
  while($row = $rows->fetch_assoc()) {
    echo "id: " . $row["id_bt"]. " <br/> Name: " . $row["nama"]. "<br/> Email : " . $row["email"]. "<br/> Isi :" . $row["isi"];
  }
}