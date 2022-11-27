<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="" method="POST">
      <p>Panjang</p>
      <p>
        <input type="text" name="panjang" value="<?php echo (isset($_POST) && $_POST["panjang"] ? $_POST["panjang"] : "") ?>"
        />
      </p>
      <p>Lebar</p>
      <p>
        <input type="text" name="lebar" value="<?php echo (isset($_POST) && $_POST["lebar"] ? $_POST["lebar"] : "") ?>"
        />
      </p>
      <input type="submit" value="Hitung" />
    </form>
    <p>
      <?php echo (isset($_POST) && isset($_POST["panjang"]) ? "Luas : " .$_POST["panjang"] * $_POST["lebar"] : "") ?>
    </p>
  </body>
</html>

