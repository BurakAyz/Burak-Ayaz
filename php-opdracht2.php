<?php
//$variabele1 = 10;
//$variabele2 = 10;

//if($variabele1 == $variabele2) {
  //  echo "De twee waarden zijn gelijk";
//}  else {

  //  echo "De twee waarden zijn ongelijk";
    //  }




//$variabele1 = 10;
//$variabele2 = 12;

//if($variabele1 != $variabele2) {
  //  echo "De twee waarden zijn ongelijk";
//}


//$variabele1 = 10;
//$variabele2 = 10;

//if($variabele1 == $variabele2) {
 //   echo "De twee waarden zijn gelijk";
//} else {
 //   echo "De twee waarden zijn ongelijk";
//}

if (isset($_POST['knopje'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    

    echo $username ." " . $password;


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
<input type="text" name="username" placeholder="username">
<input type="text" name="password" placeholder="password">
<input type="submit" name="knopje" value="knopje">

</form>

</body>
</html>