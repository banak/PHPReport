<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function ecrirefichier($filename, $txt) {
    if (is_writable($filename)) 
    {
        if (!$fCss = fopen($filename, 'w+')) {
            echo 'Error : erreur lors de louverture du fichier ' . $filename . '. Mauvaise mise en forme <br>';
        }


        if (fwrite($fCss, $txt) === FALSE) {
            echo "Impossible d'écrire dans le fichier ($filename). Mauvaise mise en forme <br>";
        }

        if (false === fclose($fCss)) {
            echo 'erreur lors de la fermeture du css Object';
        }
    }
}


