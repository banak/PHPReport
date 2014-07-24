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

    private $_data;

    public function __construct($data=array()) {
        echo 'constructeur graphique 2<br>';
        
        $this->_data = $data;
    }
    
    public function setData($data)
    {
        
    }
}