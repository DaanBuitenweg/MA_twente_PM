<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>
<body>

    <div id="box">
        <form method="post">
            <input id="text" type="text" name="vraag" placeholder="vraag"> 
            <br>
            <input id="password" type="password" name="antwoord" placeholder="antwoord" >
            <br>
            <input id="password" type="password" name="categorie" placeholder="categorie" >
            <br>
            <input id="button" type="submit" name="submit" value="maak aan"><br>
        </form>
    </div>
    <button onclick="window.location.href='verwijderfaq.php';">Verwijder Lijst</button>
</body>
</html>

<?php
include 'functions.php';
if (isset($_POST["submit"])) {

    $vraag =            htmlspecialchars($_POST["vraag"]);
    $antwoord =         htmlspecialchars($_POST["antwoord"]);
    $categorie =        htmlspecialchars($_POST["categorie"]);
    unset($_POST["submit"]);

    $foutmelding        = controleerRegistratieInput($user,$pass,$repeatpass);

    if (!empty($foutmelding)) {
        echo $foutmelding;
    }
}