<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once("./lib/pChart2.1.4/class/pData.class.php");
include_once("./lib/pChart2.1.4/class/pDraw.class.php");
include_once("./lib/pChart2.1.4/class/pImage.class.php");
include("./classe/graphic.php");


class LinearGraph implements Graphic
{
    public static $typeName = 'Linear';
    public static $NumName = 1;
    private $_name;
    private $_pdata;
    private $_pname;
    private $_data;
    private $_picture;

    public function __construct($data=array()) {
        echo 'constructeur graphique 2<br>';
        $this->_name = LinearGraph::$typeName . LinearGraph::$NumName;
        LinearGraph::$NumName++;
        $this->_pdata = new pData();  
       $this->fillGraphData($data);
        $this->_data = $data;
    }
    
    public function setData($data, $nameCourbe)
    {
       $this->fillGraphData($data);
       if (is_array($nameCourbe))
       {
           foreach ($nameCourbe as $name)
           {
               if (is_array($name))
               {
                    echo 'Erreur le tableau de nom de courbe n\'est que sur un niveau';
                    break;
               }
           }
               
           $this->_pname = $nameCourbe;
       }
    }
    
    public function draw()
    {
        
        $this->_pdata->setSerieTicks("Probe 2",4);
        $this->_pdata->setSerieWeight("Probe 3",2);
        $this->_pdata->setAxisName(0,"Temperatures");
        $this->_pdata->addPoints(array("Jan","Feb","Mar","Apr","May","Jun"),"Labels");
        $this->_pdata->setSerieDescription("Labels","Months");
        $this->_pdata->setAbscissa("Labels");
        
        
        //mettre les dimension en paramètre
        $this->_picture = new pImage(700,230,  $this->_pdata);
   
        $this->_picture->Antialias = FALSE;
         $this->_picture->drawRectangle(0,0,699,229,array("R"=>0,"G"=>0,"B"=>0));
         $this->_picture->setFontProperties(array("FontName"=>"./lib/pChart2.1.4/fonts/Forgotte.ttf","FontSize"=>11));
 $this->_picture->drawText(150,35,"Average temperature",array("FontSize"=>20,"Align"=>TEXT_ALIGN_BOTTOMMIDDLE));
          $this->_picture->setFontProperties(array("FontName"=>"./lib/pChart2.1.4/fonts/pf_arma_five.ttf","FontSize"=>6));
 $this->_picture->setGraphArea(60,40,650,200);
          $scaleSettings = array("XMargin"=>10,"YMargin"=>10,"Floating"=>TRUE,"GridR"=>200,"GridG"=>200,"GridB"=>200,"DrawSubTicks"=>TRUE,"CycleBackground"=>TRUE);
 $this->_picture->drawScale($scaleSettings);
  $this->_picture->Antialias = TRUE;
        
        $this->_picture->drawLineChart();

         /* Write the chart legend */
        $this->_picture->drawLegend(540,20,array("Style"=>LEGEND_NOBORDER,"Mode"=>LEGEND_HORIZONTAL));

         $this->_picture->render("./pictures/".$this->_name.".png");
        
        return '<img src="./pictures/'.$this->_name.'.png">';

    }

    function fillGraphData($data)
{
    $retour = array();
    if (is_array($data))
    {
        foreach ($data as $key => $value)
        {
            if (is_array($value))
            {
                $retour = fillGraphData($value);
            }
            else
            {
             //mettre le nom de la ligne en paramètre 
               
               $this->_pdata->addPoints($data,"Probe 1");
               
            }
        }
    }
    else
        $this->_pdata->addPoints(array(),"Probe 2");
}
    
    }