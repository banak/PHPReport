<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './classe/Text.php';
include './pattern/init.php';

require_once './pattern/header.php';

echo 'Objet Text : <br>';
$Text = new Text('My first Text ', 18, 'Arial');

echo $Text->draw();

$Text2 = new Text('My second Text', 28, 'Comic Sans MS');
echo $Text2->draw();

?>