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
echo '<body>';
//initailisation de toutes les object Textes et Objet courbe
$Text = new TextObject('My first Text ', 18, 'Arial');
$Text2 = new TextObject('My second Text', 28, 'Comic Sans MS');
$linearG = new LinearGraph(array(1,3,4,5,3,1));

echo '<section class="demo">
      <div class="gridster">
          <ul>
              <li data-row="1" data-col="1" data-sizex="1" data-sizey="1">'.$Text->draw().'</li>
              <li data-row="2" data-col="1" data-sizex="1" data-sizey="1">'.$Text2->draw().'</li>
              <li data-row="3" data-col="1" data-sizex="1" data-sizey="1">'.$linearG->draw().'</li>
              <li data-row="1" data-col="2" data-sizex="2" data-sizey="1"></li>
              <li data-row="2" data-col="2" data-sizex="2" data-sizey="2"></li>
              <li data-row="1" data-col="4" data-sizex="1" data-sizey="1"></li>
              <li data-row="2" data-col="4" data-sizex="2" data-sizey="1"></li>
              <li data-row="3" data-col="4" data-sizex="1" data-sizey="1"></li>               
              <li data-row="1" data-col="5" data-sizex="1" data-sizey="1"></li>
              <li data-row="3" data-col="5" data-sizex="1" data-sizey="1"></li>
              <li data-row="1" data-col="6" data-sizex="1" data-sizey="1"></li>
              <li data-row="2" data-col="6" data-sizex="1" data-sizey="2"></li>               
          </ul>
      </div>
  </section>
</body>';

// setup for gridster
echo '<script type="text/javascript">
      var gridster;

      $(function() {
          gridtster = $(".gridster > ul").gridster({
             widget_margins: [10, 10],
                  widget_base_dimensions: [140, 140],   
                  resize: {
            enabled: true
          },
              min_cols: 12
          }).data("gridster");
      });
  </script> ';
?>