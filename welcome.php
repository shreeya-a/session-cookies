<?php
    // session_start();

    // $isLoggedIn = isset($_SESSION['auth']);
    // if(!$isLoggedIn){
    //     echo"login bhako chaina";
    // }
    // else{
    //     echo"login bhako cha";
    // }
    $isLoggedIn = isset($_COOKIE['email']);
    if(!$isLoggedIn){
        echo"login bhako chaina";
    }
    else{
        echo"login bhako cha";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>
<body>
   <h1> Welcome you have logged in!!!</h1>
</body>
</html>