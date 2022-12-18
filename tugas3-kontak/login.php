<?php
include("./koneksi.inc.php");

if (isset($_POST) && isset($_POST['username'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM user WHERE username = ? AND password = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
  $result = $stmt->get_result();
  $pesan_error = "";
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION['username'] = $row['username'];
    header("Location: ./admin/cetak.php");
  } else {
    $pesan_error = "Username / Password tidak ditemukan";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bs4 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <title>Login</title>
</head>

<body>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Login</h3>
          </div>
          <div class="card-body">
            <p class="text-danger"><?= $pesan_error ?></p>
            <form action="login.php" method="post">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" id="password" class="form-control">
              </div>
              <button class="btn btn-block btn-primary">
                Login
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>