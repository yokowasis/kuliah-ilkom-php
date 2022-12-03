<?php

echo $_POST['name'];
echo "<br/>";
echo $_POST['email'];
echo "<br/>";

//date and time login

echo "Tanggal dan Waktu Login : ";
date_default_timezone_set('Asia/Singapore');

echo date('h:i:s a, l F jS Y');


