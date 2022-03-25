<?php
include 'connection.php';
function geefinfoHtml($info)
{

    $html = '';
    foreach ($info as $key => $rij) {
        $vraag          = $rij["vraag"];
        $antwoord       = $rij["antwoord"];
        $categorie       = $rij["categorie"];

        $html .= "<tr><td>$vraag</td><td>$antwoord</td><td>$categorie</td></tr>";
    }

    return $html;
}

function toonAlleinfo()
{
    $sql        = "SELECT vraag, antwoord, categorie
                    FROM faqbeheer
                    ORDER BY vraag";
                    
    $pdo = maakPDO();

    $result = $pdo->query($sql);
    $info = $result->fetchAll();

    echo geefinfoHtml($info);
}

?>