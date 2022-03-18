<?php
function controleerRegistratieInput($vraag, $antwoord, $categorie)
{
    $foutmelding = '';

    if(empty($vraag)){
        $foutmelding = "Voer een vraag in";
    }
    if(empty($antwoord)){
        $foutmelding .= "<br> voer een antwoord in ";
    }
    if(empty($categorie)){
        $foutmelding .= "<br> voer een categorie in ";
    }
    if (strlen($vraag) >=200) {
        $foutmelding .= "de vraag is te lang";
    }
    if (strlen($antwoord) >=200) {
        $foutmelding .= "het antwoord is te lang";
    }
    return $foutmelding;
}