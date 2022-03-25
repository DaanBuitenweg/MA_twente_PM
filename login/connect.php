<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'Daan');
define('DB_PASSWORD', 'sbbFoX86UNS*47UD');
define('DB_NAME', 'login_db');

function maakPDO(){
try {
$pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $pdo;
} catch (PDOException $e) {
die("Verbinding maken mislukt, error:. " . $e->getMessage());
}
}
?>