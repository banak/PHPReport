<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './classe/TextObject.php';
include './pattern/init.php';
require_once './pattern/header.php';

echo 'Objet Text : <br>';
$Text = new TextObject('My first Text ', 18, 'Arial');

echo $Text->draw();

$Text2 = new TextObject('My second Text', 28, 'Comic Sans MS');
echo $Text2->draw();

echo '<br><br>graphique linéaire: <br>';

require_once ('./lib/jpgraph-3.0.7/src/jpgraph.php');
require_once ('./lib/jpgraph-3.0.7/src/jpgraph_line.php');

$datay1 = array(20,15,23,15);


// Setup the graph
$graph = new Graph(300,250);
$graph->SetScale("textlin");

//$theme_class=new UniversalTheme;

//$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(false);
$graph->title->Set('Filled Y-grid');
$graph->SetBox(false);

$graph->img->SetAntiAliasing();

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
 
$graph->xaxis->SetTickLabels(array('A','B','C','D'));
$graph->xgrid->SetColor('#E3E3E3');

// Create the first line
$p1 = new LinePlot($datay1);
$graph->Add($p1);
$p1->SetColor("#6495ED");
$p1->SetLegend('Line 1');


$graph->legend->SetFrameWeight(1);

// Output line
$graph->Stroke();

 
?>