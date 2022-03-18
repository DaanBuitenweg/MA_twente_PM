<?php
include "database.php";

function geefFaqHtml($Faq)
{
    $html = '';
    foreach ($Faq as $key => $rij) {
        $vraag  = $rij["vragen"];
        $antwoord        = $rij["antwoorden"];
        $categorie      = $rij["categorie"];

        $html .= "$vraag - $antwoord -  $categorie  <br>";
    }
    return $html;
}


function toonAllefaq()
{
    $sql        = "SELECT vragen, antwoorden, categorie
    FROM faq";
    $pdo = maakPDO();

    $result = $pdo->query($sql);
    $faq = $result->fetchAll();

    echo geefFaqHtml($faq);
}


function toonfaqvraag($categorie)
{

    $sql = "SELECT vragen, categorie, antwoorden  
            FROM faq
            WHERE Categorie=:Categorie 
            ";

    $pdo = maakPDO();

    $statement = $pdo->prepare($sql);
    $statement->bindParam(":categorie", $param_categorie);
    $param_categorie = $categorie;
    $statement->execute();

    $vraag = $statement->fetchAll();
    echo geefFaqHtml($vraag);
}

function toonAlleCat()
{
    $sql        = "SELECT DISTINCT categorie
                   FROM faq
                   ORDER BY categorie";
    $pdo = maakPDO();

    $result = $pdo->query($sql);
    $categorie = $result->fetchAll();

    foreach ($categorie as $key => $rij) {
        $categorie = $rij["categorie"];
        echo "<a href=?categorie=$categorie>$categorie</a> | ";
        // echo $rij["Categorie"];
    }
}

