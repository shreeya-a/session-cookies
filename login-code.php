<?php
// session_start();
//     // include('./db_connect.php');

    if ($_SERVER['REQUEST_METHOD']==='POST'){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $db_email="shreeya@gmail.com";
        $db_password="hello";

        if($email==$db_email && $password==$db_password){
//             //login success
//             //variable name can be anything but must save a value
//             $_SESSION['auth']=true;
            // time() function le current instant of time then + no of seconds means ki future ma kati samma cookies should be available
            // "/" means cookies is set to all pages else jun page chahine tei rakhne
            //email bhanera just auta value pass gareko because session ma jasto kei value set bhako hunu parcha
            setcookie("email",$email,time()+5,"/");
            header('location:./welcome.php');
        }
        else{
            header('location: login.php');

        }
    }
?>