<!DOCTYPE html>
<html lang="en">
<head>
<style>
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  height: 50px;
}
td {
  padding: 10px;
  text-align: left;
}

tr:nth-child(even) {background-color: #bdc3c7;}

</style>
</head>
<?php include 'header.php'?>
<?php
include "functie.php";
include_once "connection.php";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo "<a href=FAQ.php>alle vragen</a> | ";
toonAlleCAT();
echo"<table>";
echo "<tr><th>Vraag</th><th>Antwoord</th><th>Categorie</th></tr>";

if (empty($_GET["categorie"])) {
    toonAlleinfo();
} 
else {
    $categorie = $_GET["categorie"];
    toonfaqvraag($categorie);
}
echo"</table>";
?>
<?php include 'footer.php'?>