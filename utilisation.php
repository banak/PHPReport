<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './classe/TextObject.php';
include './classe/LinearGraph.php';
include './pattern/init.php';
require_once './pattern/header.php';

echo 'Objet Text : <br>';
$Text = new TextObject('My first Text ', 18, 'Arial');

echo $Text->draw();

$Text2 = new TextObject('My second Text', 28, 'Comic Sans MS');
echo $Text2->draw();

echo '<br><br>graphique linéaire: <br>';

$linearG = new LinearGraph(array(1,3,4,5,3,1));
$MyData = new pData();  
$MyData->addPoints(array(-4,VOID,VOID,12,8,3),"Probe 1");
$MyData->addPoints(array(3,12,15,8,5,-5),"Probe 2");
$MyData->addPoints(array(2,7,5,18,19,22),"Probe 3");
$MyData->setSerieTicks("Probe 2",4);
$MyData->setSerieWeight("Probe 3",2);
$MyData->setAxisName(0,"Temperatures");
$MyData->addPoints(array("Jan","Feb","Mar","Apr","May","Jun"),"Labels");
$MyData->setSerieDescription("Labels","Months");
$MyData->setAbscissa("Labels");
 
?>