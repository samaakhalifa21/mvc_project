<?php 

$dsn = 'mysql:host=localhost;dbname=assignment_tracker';
$username = 'root';
$password="samaa";

try {
$db=new PDO($dsn,$username,$password);
}
catch (PDOException $e){
    $error="Database Erorr:";
    $error .=$e->getMessage();
    include ('view/error.php');
    exit();
}









?>