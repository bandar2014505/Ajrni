<?php
$username = "root";
$password = "";
$datebase = new 
PDO("mysql:host=localhost;dbname=ajrnidb;charset=utf8;",$username,$password,);
if($datebase){
   echo 'تم الاتصال بقاعدة البيانات' ;
}
?>