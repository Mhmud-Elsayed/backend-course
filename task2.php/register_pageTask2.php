<?php
// foreach ($_POST as $key => $value) {
//     echo "$key :  $value .<br>";
// }

$name =$_POST["name"];
$password=$_POST["password"];
$email =$_POST["email"];
setcookie("name","$name",time()+(60*60*24*12),"/");
setcookie("password","$password",time()+(60*60*24*12),"/");
setcookie("email","$email",time()+(60*60*24*12),"/");
echo "register done";
