<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './classe/Text.php';


echo 'Objet Text : <br>';
$Text = new Text('My first Text', 12);

echo $Text->draw();


?>