<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
 
 <br>
    <?php
    include "verwijderfunctie.php";

    toonAlleCat();
    echo "<br>";
    echo "<br>";


    //Filter of niet?
    if (empty($_GET["categorie"])) {
        toonAllefaq();
    } else {
        $categorie = $_GET["categorie"];
        toonfaqvraag($categorie);
    }
    echo "<br>";
    ?>
    
</body>

</html>