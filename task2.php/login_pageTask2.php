<?php

$login_name=$_POST["name"];
$login_email =$_POST["email"];


$register_name=$_COOKIE["name"];
$register_email =$_COOKIE["email"];
$register_passsword=$_COOKIE["password"];


if($login_email==$register_email&& $login_name==$register_name){



echo "hello"." ".$login_name;



}
else {
        echo"invalid user name or password ";
}



