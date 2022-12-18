<?php include("../koneksi.inc.php");

session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bs4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Hasil Cetak</title>
</head>

<body>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Pesan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM kontak";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["id"] . "</td>";
          echo "<td>" . $row["nama"] . "</td>";
          echo "<td>" . $row["jkel"] . "</td>";
          echo "<td>" . $row["email"] . "</td>";
          echo "<td>" . $row["alamat"] . "</td>";
          echo "<td>" . $row["kota"] . "</td>";
          echo "<td>" . $row["pesan"] . "</td>";
          echo "</tr>";
        }
      } else {
      }
      $conn->close();
      ?>
    </tbody>
  </table>
  <p><a href="/">Kembali</a></p>
</body>

</html>