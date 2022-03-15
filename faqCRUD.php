<!-- <!DOCTYPE html>
<html lang="nl">
    <body>
    <div>
    <form action="" method="post">
        vraag <br>
        <input type="text" name="vraag" value=""> 
        <br />antwoord <br>
        <input type="text" name="antwoord" value="">
        <input type="submit" name="submit" value="voeg toe">
    </div>
    </body>
</html>
<?php
include 'functions.php';

if (isset($_POST["submit"])) {

    $vraag =         htmlspecialchars($_POST["vraag"]);
    $antwoord =      htmlspecialchars($_POST["antwoord"]);

    $foutmelding        = controleerRegistratieInput($vraag,$antwoord);

    if (!empty($foutmelding)) {
        echo "$foutmelding<br>";
    }

    echo $_POST["vraag"];
    echo "<br>";
    echo $_POST["antwoord"];
    echo "<br>";
} -->
