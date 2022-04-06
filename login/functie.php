<?php

function controleerLegeInvoer($formElementen){
$foutmelding = '';
foreach ($formElementen as $element => $waarde) {
if(empty($waarde)){
$foutmelding .= "$element is niet ingevoerd<br>" ;
}
}
return $foutmelding;
}

function controleerWachtwoorden($wachtwoord, $wachtwoordherhaling){
$foutmelding ='';
if ($wachtwoord<>$wachtwoordherhaling){
$foutmelding = "wachtwoorden zijn niet identiek";
}
return $foutmelding;
}

function gebruikersnaamBeschikbaar($gebruikersnaam){
$query = 'SELECT *
FROM users
WHERE (Username = :Username)';
$values = [':gebruikersnaam' => $gebruikersnaam];
try {
$pdo = maakPDO();
$res = $pdo->prepare($query);
$res->execute($values);
} catch (PDOException $e) {
echo 'Er heeft zich een fout voorgedaan: ' . $e->getMessage();
die();
}
$row = $res->fetch(PDO::FETCH_ASSOC);
if ($row) {
return false;
} else {
return true;
}
}

function voegGebruikerToe($gebruikersnaam, $wachtwoord){
$versleuteldWachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT);
$query = 'INSERT INTO user (Username, wachtwoord)
VALUES (:Username, :wachtwoord)';
$values = [':gebruikersnaam' => $gebruikersnaam, ':wachtwoord' => $versleuteldWachtwoord];
$pdo = maakPDO();
try {
$res = $pdo->prepare($query);
$res->execute($values);
} catch (PDOException $e) {
echo 'Er heeft zich een fout voorgedaan: ' . $e->getMessage();
echo 'Query error.';
die();
}
}

function loginGebruiker($gebruikersnaam, $wachtwoord){
$query = 'SELECT wachtwoord
FROM User
WHERE (Username = :Username)';
$values = [':gebruikersnaam' => $gebruikersnaam];
try {
$pdo = maakPDO();
$res = $pdo->prepare($query);
$res->execute($values);
} catch (PDOException $e) {
echo 'Er heeft zich een fout voorgedaan: ' . $e->getMessage();
die();
}
$row = $res->fetch(PDO::FETCH_ASSOC);
if ($row){
if (password_verify($wachtwoord, $row['wachtwoord'])) {
return true;
} else {
return false;
}
}
}
