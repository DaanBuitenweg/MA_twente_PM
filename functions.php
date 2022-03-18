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
    return $foutmelding;
}