<?php

switch ($card->categorie_id) {
    case '0':
        echo "Classics";
        break;
    case '1':
        echo "Personalitées";
        break;
    case '2':
        echo "Métiers";
        break;
    case '3':
        echo "Animaux";
        break;
    case '4':
        echo "Personnages fictifs";
        break;
    default:
        echo "classic";
        break;
}

?>
