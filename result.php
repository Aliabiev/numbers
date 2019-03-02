<?php
$host = 'localhost';
$user = 'root';
$pswd = '';
$db = 'first';

$pdo = new PDO("mysql:host={$host}; dbname={$db}; charset=utf8", $user, $pswd);

$numA = $_POST['numA'];

$sql = "SELECT numB FROM numbers WHERE numA = ?";
$pz = $pdo->prepare($sql); 
$pz->execute([$numA]);
echo $pz->fetch(PDO::FETCH_COLUMN);
 
