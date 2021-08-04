<?php
$mysqli = new mysqli('localhost','root','','php_example1') or die(mysqli_error($mysqli));

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $city = $_POST['city'];
    
    $mysqli->query("INSERT INTO data (Name,City) VALUES ('$name','$city')") or 
    die($mysqli->error);
    header("Location: http://localhost/phpCrud1/index.php");
}






?>