<?php
if (isset($_POST["button"])) {
$name = $_POST["name"];
$surname = $_POST["surename"];
$age = $_POST["age"];
$adres = $_POST["adres"];
$email = $_POST["email"];

echo $name ." " . $surname;

}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
  <input type="text" name="name" placeholder="name"><br>
  <input type="text" name="surename" placeholder="surname"><br>
  <input type="text" name="age" placeholder="age"><br>
  <input type="text" name="adres" placeholder="adres"><br>
  <input type="text" name="email" placeholder="email"><br>
  <input type="submit" name="button" value="button">
</form>
</body>
</html>